<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "restaurant";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db, 8111);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>