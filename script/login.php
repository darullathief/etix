<?php
require "conn.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "select username, password from user";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result) ) {
    if ($row['username'] == $username) {
        if ($row['password'] == $password) {
            setcookie('user_name', $username, time() + (86400 * 30), "/");
            setcookie('pass', $password, time() + (86400 * 30), "/");
            header('Location: ../index.php');
        } else {
            echo"<h2> Password Salah</h2>";
        }
    } else {
        echo"<h2>Username tidak ditemukan</h2>";
    }
}

?>