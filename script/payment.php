<?php
require "conn.php";

$kdPemesanan = rand(1000000000,9999999999);
$kdJenis = $_POST['kdJenis'];
$fullname = $_POST['fullname'];
$norek = $_POST['norek'];
$method = $_POST['payment_method'];
$evidence = $_FILES['evidence']['name'];
$username = $_COOKIE['user_name'];
$total = $_POST['total'];

$target_dir     = "../upload/evidence/";
$target_file    = $target_dir . basename($_FILES['evidence']['name']);
if (move_uploaded_file($_FILES['evidence']['tmp_name'], $target_file)) {
    
}

$query1 = "insert into orders values
         ('$kdPemesanan', '$username', '$fullname','On Process',$total,'$method','$evidence',$norek,curdate())";

if (mysqli_query($conn, $query1)) {
    // header("Location: ../thankssellticket.html"); 
} else {
    echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
}

$get_kdTiket = mysqli_query($conn,"select kdTiket from ticket 
                where kdJenis = '$kdJenis' and statusTicket = 'Available'
                limit 1");

while ($row = mysqli_fetch_assoc($get_kdTiket)) {
    $kdtiket = $row['kdTiket'];
}


$query2 = "insert into orderdetail values 
            ('$kdtiket','$kdPemesanan')";

if (mysqli_query($conn, $query2)) {
    header("Location: ../buyticket.html"); 
} else {
    echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
}
?>