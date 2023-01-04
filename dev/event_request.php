<?php
require '../script/conn.php';

$query = "select * from event where statusEvent ='On Review'";
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
            <th>Kode Tiket</th>
            <th>Nama Event</th>
            <th>Kategori</th>
            <th>Diupload oleh</th>
            <th>Aksi</th>
            </tr>";

            foreach ($rows as $r) {
                echo "<tr>
                <td>".$r['kdEvent']."</td>
                <td>".$r['namaEvent']."</td>
                <td>".$r['kategoriEvent']."</td>
                <td>".$r['username']."</td>
                <td><a href = approve_event.php?kd_event=".$r['kdEvent']."&approve=yes>Setujui</a>
                <a href = approve_event.php?kd_event=".$r['kdEvent']."&approve=no>Tolak</a></td>
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
    </style>
</html>