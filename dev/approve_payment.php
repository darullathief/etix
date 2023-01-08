<?php
require '../script/conn.php';

$kdPemesanan = $_GET['kdPemesanan'];
$approve = $_GET['approve'];

$query1 = "select * from orderdetail where kdPemesanan ='$kdPemesanan'";
$result = mysqli_query($conn,$query1);

if ($approve == "no") {
    $query = "UPDATE orders SET statusBayar='Disaproved' WHERE kdPemesanan='$kdPemesanan'";
    mysqli_query($conn, $query);
} else if ($approve == "yes"){
    while($row = mysqli_fetch_assoc($result)){
        $query2 = "UPDATE ticket SET statusTicket='Sold' WHERE kdTiket='".$row['kdTiket']."'";
        mysqli_query($conn, $query2);
    }
    $query3 = "UPDATE orders SET statusBayar='Done' WHERE kdPemesanan='$kdPemesanan'";
    
    if (mysqli_query($conn, $query3)) {
        header("Location : payment_request.php");
    } else {
        echo "Error: " . $query3 . "<br>" . mysqli_error($conn);
    }
}

    


?>