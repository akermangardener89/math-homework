<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mathhomework";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM table1 WHERE column1 = 'value1' AND column2 = 'value2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Found data:<br>";
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. "<br>";
    echo "column1: " . $row["column1"] . "<br>";
    echo "column2: " . $row["column2"] . "<br>";
  }
} else {
  echo "No data found.";
}

$conn->close();
