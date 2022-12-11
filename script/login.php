<?php
require "conn.php";

$GLOBALS['username'] = $_POST['username'];
$GLOBALS['password'] = $_POST['password'];

$query = "select username, password from user";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result) ) {
    if ($row['username'] == $username) {
        if ($row['password'] == $password) {
            header('Location: ../index.php');
        } else {
            echo"<h2> Password Salah</h2>";
        }
    } else {
        echo"<h2>Username tidak ditemukan</h2>";
    }
}

?>