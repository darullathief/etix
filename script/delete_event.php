<?php
$event = $_GET['kdEvent'];

$query = "Delete from event WHERE kdEvent='$event'";
$query = "Delete from ticketChategory WHERE kdEvent='$event'";

if (mysqli_query($conn, $query)) {
    echo"oke";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

if (mysqli_query($conn, $query2)) {
    header("Location: event_management.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
?>