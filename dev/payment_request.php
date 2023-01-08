<?php
require '../script/conn.php';

$query = "select * from orders where statusBayar ='On Process'";
$result = mysqli_query($conn, $query);

$rows= [];
while ($row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
}

// if(count($rows) == 0){
//     echo "Belum ada data";
// } else{
//     echo "
//     <table style='margin: 50px;'>
//         <tr>
//             <th>No Rekening</th>
//             <th>Nama Pembeli</th>
//             <th>Total Bayar</th>
//             <th>Metode Pembayaran</th>
//             <th>Bukti Bayar</th>
//             <th>Aksi</th>
//             </tr>";

//             foreach ($rows as $r) {
//                 echo "<tr>
//                 <td>".$r['noRek']."</td>
//                 <td>".$r['fullNameOrder']."</td>
//                 <td>".$r['totalBayar']."</td>
//                 <td>".$r['metodePembayaran']."</td>
//                 <td><img class='ev' src='../upload/evidence/".$r['buktiBayar']."'></td>
//                 <td><a href = approve_payment.php?kdPemesanan=".$r['kdPemesanan']."&approve=yes>Setujui</a>
//                 <a href = approve_payment.php?kdPemesanan=".$r['kdPemesanan']."&approve=no>Tolak</a></td>
//             </tr>";
//             }
//         }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Request</title>
    <link rel="stylesheet" href="../style/dev.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <h2>Payment Request</h2>
    <?php
        if(count($rows) == 0){
            echo "<h3 class='no-data'>No Data Available</h3>";
        } else{
            echo "
            <div class ='scrollable'>
                <table>
                    <tr>
                        <th>Fullname</th>
                        <th>Account Number</th>
                        <th>Total</th>
                        <th>Method</th>
                        <th>Evidence</th>
                        <th>Action</th>
                    </tr>";   
                    
                    foreach ($rows as $r) {
                        echo "<tr>
                        <td>".$r['fullNameOrder']."</td>
                        <td>".$r['noRek']."</td>
                        <td>".$r['totalBayar']."</td>
                        <td>".$r['metodePembayaran']."</td>
                        <td class='center'><a href = evidence.php?kdPemesanan=".$r['kdPemesanan']." class='open'><span class='material-symbols-outlined'>open_in_new</span></a></td>
                        <td><a class='btn approve' href = approve_payment.php?kdPemesanan=".$r['kdPemesanan']."&approve=yes>Setujui</a>
                        <a class='btn deny' href = approve_payment.php?kdPemesanan=".$r['kdPemesanan']."&approve=no>Tolak</a></td>
                    </tr>";
                    }
            echo"
                </table>
            </div>";
        }
    ?>
</body>