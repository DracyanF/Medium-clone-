<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Customerfeedback";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE Customer (
pass VARCHAR(50),
email VARCHAR(50)

)";
if ($conn->query($sql) === TRUE) {
 echo "Table created successfully";
} else {
 echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
