<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "etix";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>