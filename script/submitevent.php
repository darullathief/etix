<?php

$kdEvent            = rand(10000,99999);
$namaEvent          = $_GET['namaEvent'];
$tanggalEvent       = $_GET['tanggalEvent'];
$lokasiEvent        = $_GET['lokasiEvent'];
$statusEvent        = $_GET['statusEvent'];
$kategoriEvent      = $_GET['kategoriEvent'];

$sql = "INSERT INTO event(kdEvent,username,namaEvent,tanggalEvent,lokasiEvent,statusEvent)
        VALUES('$kdEvent','$username','$namaEvent'.'$tanggalEvent','$lokasiEvent','ON REVIEW')";

mysqli_query($conn,$sql);
header("location: http://localhost/thankssellticket.html")
