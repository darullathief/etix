<?php
require "conn.php";

$kdEvent            = rand(10000,99999);
$namaEvent          = $_GET['namaEvent'];
$tanggalEvent       = $_GET['tanggalEvent'];
$lokasiEvent        = $_GET['lokasiEvent'];
$kategoriEvent      = $_GET['kategoriEvent'];
$username = $_COOKIE['user_name'];

$sql = "INSERT INTO event (kdEvent,username,namaEvent,tanggalEvent,lokasiEvent,statusEvent)
        VALUES('$kdEvent','$username','$namaEvent','$tanggalEvent','$lokasiEvent','On Review')";

mysqli_query($conn,$sql);
echo $kdEvent;
echo $namaEvent;
header("Location: ../thankssellticket.html"); 

?>
