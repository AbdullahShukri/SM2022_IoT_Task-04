<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iot-task04";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT directions FROM data order by id desc limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["directions"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>