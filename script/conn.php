<?php
$servername = "localhost";
$user = "root";
$password = "";
$db_name = "etix";

// Create connection
$conn = mysqli_connect($servername, $user, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>