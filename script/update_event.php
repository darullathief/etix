<?php
require 'conn.php';
$namaEvent = $_GET["namaEvent"];
$lokasiEvent = $_GET["lokasiEvent"];
$tanggalEvent = $_GET["tanggalEvent"];
$jenisTiket = $_GET["jenisTiket"];
$harga = $_GET["harga"];
$kapasitasTiket = $_GET["kapasitasTiket"];
// $poster = $_GET["poster"];
$deskripsi = $_GET["deskripsi"];
$kdJenis = rand(10000,99999);

$target_dir     = "./upload/";
$target_file    = $target_dir . basename($_FILES["poster"]["name"]);

if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
    $poster = $target_file;
}

$query1 = "update event SET statusEvent='On Sale', lokasiEvent='$lokasiEvent', tanggalEvent='$tanggalEvent', 
            poster='$poster',deskripsi='$deskripsi'
            WHERE kdEvent='$event'";

$query2 = "replace into ticketchategory(kdJenis, jenisTiket, kdEvent, harga, kapasitasTiket)
            ('$kdJenis','$jenisTiket','$kdEvent','$harga','$kapasitasTiket')";

if (mysqli_query($conn, $query1 && mysqli_query($conn, $query2))) {
    header("Location: event_management.php");
}
?>