<?php
require '../script/conn.php';
    
$event = $_GET['kd_event'];
$query = "UPDATE event SET statusEvent='Approved' WHERE kdEvent='$event'";

if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
?>