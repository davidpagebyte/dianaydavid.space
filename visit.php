<?php
$servername = "localhost";
$username = "u626816178_admin";
$password = "Dianaydavid5!";
$dbname = "u626816178_wedding";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO visitors (tag)
VALUES ('Test')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>