<?php

$kdEvent            = $_GET['kdEvent'];
$username           = $_GET['username'];
$namaEvent          = $_GET['namaEvent'];
$tanggalEvent       = $_GET['tanggalEvent'];
$lokasiEvent        = $_GET['lokasiEvent'];
$deskripsi          = $_GET['deskripsi'];
$poster             = $_GET['poster'];
$statusEvent        = $_GET['statusEvent'];

$sql = "INSERT INTO event(kdEvent,username,namaEvent,tanggalEvent,lokasiEvent,deskripsi,
poster,statusEvent)
        VALUES('$kdEvent','$username','$namaEvent'.'$tanggalEvent','$lokasiEvent','$deskripsi','$poster','$statusEvent')";

mysqli_query($conn,$sql);
header("")
