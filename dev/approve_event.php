<?php
require '../script/conn.php';
    
$event = $_GET['kd_event'];
$approve = $_GET['approve'];

$query = "";
if ($approve = "no") {
  $query = "UPDATE event SET statusEvent='Approved' WHERE kdEvent='$event'";
} else if ($approve = "yes"){
  $query = "Delete from event WHERE kdEvent='$event'";
}

if (mysqli_query($conn, $query)) {
    header("Location : event_request.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
?>