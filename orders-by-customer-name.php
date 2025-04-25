<?php

$host = "localhost";
$username = "sumsumBoom";
$password = "password";
$dbname = "sql_store";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize the query to get all orders and customers
$sql = "SELECT orders.order_id, customers.first_name, customers.last_name
        FROM orders
        JOIN customers ON orders.customer_id = customers.customer_id
        ORDER BY orders.order_id;";

// Execute the query
$result = $conn->query($sql);

// Initialize an empty array to hold the grouped orders
$groupedOrders = [];

// Process the result into the grouped orders format
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // If this order_id is not already in the groupedOrders array, add it
        if (!isset($groupedOrders[$row['order_id']])) {
            $groupedOrders[$row['order_id']] = [
                'order_id' => $row['order_id'],
                'customers' => $row['first_name'] . ' ' . $row['last_name']
            ];
        }
    }
} else {
    echo "0 results found.";
}

// Close the connection
$conn->close();

// Convert the grouped orders to a numerical array (if you need this format)
$groupedOrders = array_values($groupedOrders);

// Output the grouped orders
echo "<pre>";
print_r($groupedOrders);
echo "</pre>";

?>
