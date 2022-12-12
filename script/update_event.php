<?php
require 'conn.php';
$kdEvent = $_POST['kdEvent'];
$namaEvent = $_POST['namaEvent'];
$lokasiEvent = $_POST['lokasiEvent'];
$tanggalEvent = $_POST['tanggalEvent'];
$jenisTiket = $_POST['jenisTiket'];
$harga = $_POST['harga'];
$kapasitasTiket = $_POST['kapasitasTiket'];
// $poster = $_POST['poster'];
$deskripsi = $_POST['deskripsi'];
$kdJenis = rand(10000,99999);

$target_dir     = '../upload/';
$target_file    = $target_dir . basename($_FILES['poster']['name']);

if (move_uploaded_file($_FILES['poster']['tmp_name'], $target_file)) {
    $poster = $target_file;
}

$query1 = "update event SET statusEvent='On Sale', lokasiEvent='$lokasiEvent', tanggalEvent='$tanggalEvent', 
            poster='$poster',deskripsi='$deskripsi'
            WHERE kdEvent='$kdEvent'";

$query2 = "insert into ticketchategory(kdJenis, jenisTiket, kdEvent, harga, kapasitasTiket)
            ('$kdJenis','$jenisTiket','$kdEvent','$harga','$kapasitasTiket')";

if (mysqli_query($conn, $query1) && mysqli_query($conn, $query2)) {
    header("Location: event_management.php");
}
?>