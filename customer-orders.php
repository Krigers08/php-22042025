
<?php

$host = "localhost";
$username = "sumsumBoom";
$password = "password";
$dbname = "sql_store";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT customers.customer_id, first_name, last_name, GROUP_CONCAT(orders.order_id ORDER BY orders.order_id) AS order_ids
        FROM customers 
        JOIN orders ON orders.customer_id = customers.customer_id
        GROUP BY customers.customer_id
        ORDER BY customers.customer_id;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["customer_id"] . " - Name: " . $row["first_name"] . " " . $row["last_name"] . " - Order IDs: " . $row["order_ids"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
