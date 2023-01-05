<?php
require "conn.php";

$kdEvent            = rand(1000,9999);
$namaEvent          = $_GET['namaEvent'];
$tanggalEvent       = $_GET['tanggalEvent'];
$lokasiEvent        = $_GET['lokasiEvent'];
$kategoriEvent      = $_GET['kategoriEvent'];
$username = $_COOKIE['user_name'];


if ($kategoriEvent == "Music") {
  $kdEvent = "M$kdEvent";
} else if ($kategoriEvent == "Sport") {
  $kdEvent = "S$kdEvent";
} else if ($kategoriEvent == "Arts & Theatre") {
  $kdEvent = "A$kdEvent";
}

$sql = "INSERT INTO event (kdEvent,username,namaEvent,tanggalEvent,lokasiEvent,statusEvent,kategoriEvent)
        VALUES('$kdEvent','$username','$namaEvent','$tanggalEvent','$lokasiEvent','On Review', '$kategoriEvent')";


if (mysqli_query($conn, $sql)) {
        header("Location: ../thankssellticket.html"); 
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>
