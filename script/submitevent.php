<?php
require "conn.php";

$kdEvent            = rand(10000,99999);
$namaEvent          = $_GET['namaEvent'];
$tanggalEvent       = $_GET['tanggalEvent'];
$lokasiEvent        = $_GET['lokasiEvent'];
$kategoriEvent      = $_GET['kategoriEvent'];
$username = $_COOKIE['user_name'];

$sql = "INSERT INTO event (kdEvent,username,namaEvent,tanggalEvent,lokasiEvent,statusEvent,kategoriEvent)
        VALUES('$kdEvent','$username','$namaEvent','$tanggalEvent','$lokasiEvent','On Review', '$kategoriEvent')";

if (mysqli_query($conn, $sql)) {
        header("Location: ../thankssellticket.html"); 
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>
