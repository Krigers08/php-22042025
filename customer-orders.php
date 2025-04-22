
<?php

$host = "localhost";
$username = "sumsumBoom"; 
$password = "password"; 
$dbname = "sql_store";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customers Join ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["customer_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
      }
} else {
  echo "0 results";
}
$conn->close();