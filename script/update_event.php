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
$kdJenis = $_POST['kdJenis'];

if ($kdJenis == '') {
    $kdJenis = rand(10000,99999);
}

$target_dir     = "../upload/";
$target_file    = $target_dir . basename($_FILES['poster']['name']);
$fileSize = $_FILES['poster']['size'];

if (move_uploaded_file($_FILES['poster']['tmp_name'], $target_file)) {
    $poster = $_FILES['poster']['name'];
}

$query1 ="";
if ($fileSize > 0) {
    $query1 = "update event SET statusEvent='On Sale', lokasiEvent='$lokasiEvent', tanggalEvent='$tanggalEvent', 
            poster='$poster',deskripsi='$deskripsi'
            WHERE kdEvent='$kdEvent'";
} else {
    $query1 = "update event SET statusEvent='On Sale', lokasiEvent='$lokasiEvent', tanggalEvent='$tanggalEvent', 
            deskripsi='$deskripsi'
            WHERE kdEvent='$kdEvent'";
}


$query2 = "replace into ticketchategory(kdJenis, jenisTiket, kdEvent, harga, kapasitasTiket)
            values ('$kdJenis','$jenisTiket','$kdEvent',$harga,$kapasitasTiket)";

if (mysqli_query($conn, $query1)) {
    echo"Query 1 oke";
}  else {
    echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $query2)) {
    // header('Location: ../event_management.php');
} else {
    echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
  }

  $i = 1;
  while ($i <= $kapasitasTiket) {
      if ($i<10) {
          $kdtiket = $kdEvent.$kdJenis."0$i";
      } else {
          $kdtiket = $kdEvent.$kdJenis.$i;
      }
      //---------------------------------------
      $query3 = "insert into ticket values 
        ('$kdtiket','$kdJenis','Available')";
  
      //---------------------------------------
      if (mysqli_query($conn, $query3)) {
          echo"Query 3 oke";
      }  else {
          echo "Error: " . $query3 . "<br>" . mysqli_error($conn);
      }
      $i++; 
  }
header('Location: ../event_management.php');
?>