<?php
require '../script/conn.php';

$query = "select * from event where statusEvent ='On Review'";
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
//             <th>Kode Tiket</th>
//             <th>Nama Event</th>
//             <th>Kategori</th>
//             <th>Diupload oleh</th>
//             <th>Aksi</th>
//             </tr>";

//             foreach ($rows as $r) {
//                 echo "<tr>
//                 <td>".$r['kdEvent']."</td>
//                 <td>".$r['namaEvent']."</td>
//                 <td>".$r['kategoriEvent']."</td>
//                 <td>".$r['username']."</td>
//                 <td><a href = approve_event.php?kd_event=".$r['kdEvent']."&approve=yes>Setujui</a>
//                 <a href = approve_event.php?kd_event=".$r['kdEvent']."&approve=no>Tolak</a></td>
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
</head>

<body>
    <h2>Event Request</h2>
    <?php
        if(count($rows) == 0){
            echo "<h3 class='no-data'>No Data Available</h3>";
        } else{
            echo "
            <div class ='scrollable'>
                <table>
                    <tr>
                        <th>Kode Tiket</th>
                        <th>Event Name</th>
                        <th>Category</th>
                        <th>Uploaded By</th>
                        <th>Action</th>
                    </tr>";
            
                        foreach ($rows as $r) {
                            echo "<tr>
                            <td>".$r['kdEvent']."</td>
                            <td>".$r['namaEvent']."</td>
                            <td>".$r['kategoriEvent']."</td>
                            <td>".$r['username']."</td>
                            <td><a class='btn approve' href = approve_event.php?kd_event=".$r['kdEvent']."&approve=yes>Setujui</a>
                            <a class='btn deny' href = approve_event.php?kd_event=".$r['kdEvent']."&approve=no>Tolak</a></td>
                        </tr>";
                    }
            echo"
                </table>
            </div>";
        }
    ?>
</body>