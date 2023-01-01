<?php
require '../script/conn.php';

$query = "select * from orders where statusBayar ='On Process'";
$result = mysqli_query($conn, $query);

$rows= [];
while ($row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
}

if(count($rows) == 0){
    echo "Belum ada data";
} else{
    echo "
    <table style='margin: 50px;'>
        <tr>
            <th>No Rekening</th>
            <th>Nama Pembeli</th>
            <th>Total Bayar</th>
            <th>Metode Pembayaran</th>
            <th>Bukti Bayar</th>
            <th>Aksi</th>
            </tr>";

            foreach ($rows as $r) {
                echo "<tr>
                <td>".$r['noRek']."</td>
                <td>".$r['fullNameOrder']."</td>
                <td>".$r['totalBayar']."</td>
                <td>".$r['metodePembayaran']."</td>
                <td><img class='ev' src='../upload/evidence/".$r['buktiBayar']."'></td>
                <td><a href = approve_payment.php?kdPemesanan=".$r['kdPemesanan']."&approve=yes>Setujui</a>
                <a href = approve_payment.php?kdPemesanan=".$r['kdPemesanan']."&approve=no>Tolak</a></td>
            </tr>";
            }
        }

?>

<html>
    <style>
        table{
            width: 88%;
            margin: auto;
        }
        table, th, td {
            border:1px solid black;
            padding:3px;
        }

        .ev{
            height: 20px;
        }
    </style>
</html>