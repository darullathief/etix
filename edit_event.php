<?php
require 'script/conn.php';
$GLOBALS['event']  = $_GET['kd_event'];
$query = "select * from event where kdEvent='$event'";
$query2 = "select * from ticketChategory where kdEvent='$event'";
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);

$rows = [];
$rows2 = [];

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
while ($row = mysqli_fetch_assoc($result2)) {
    $rows2[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style_em.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
    <a href="index.php"> <img src="img/ETIX LOGO.png"  class="logo"> </a>
    </nav>

    <div class="container">
        <aside>
            <ul>
                <li><a href="home_vendor.php">Dashboard</a></li>
                <li><a href="event_management.php">Event Management</a></li>
            </ul>
        </aside>

        <div class="event">
            <h2>Edit Event</h2>

            <form action="script/update_event.php" class="edit" enctype="multipart/form-data" method="post">
                <?php foreach ($rows as $r) {
                    echo '
                    <input type="text" name="kdEvent" style="display:none;" value ="'.$r["kdEvent"].'">
                    <input type="text" name="namaEvent" placeholder="Event Name" class="fl" value ="'.$r["namaEvent"].'">
                    <select name="" class="fr">
                        <option value="" selected disabled>'.$r["kategoriEvent"].'</option>
                    </select>

                    <input type="text" name="lokasiEvent" placeholder="Event Location" class="fl" value ="'.$r["lokasiEvent"].'">
                    <input type="date" name="tanggalEvent" class="fr" value ="'.$r["tanggalEvent"].'">';

                        if (count($rows2) > 0) {
                            foreach ($rows2 as $r2) {
                                echo' 
                                    <input type="text" name="kdJenis" style="display: none;" value="'.$r2['kdJenis'].'">
                                    <input type="text" name="jenisTiket" placeholder="Ticket Category" class="tl" value="'.$r2['jenisTiket'].'">
                                    <input type="text" name="harga" placeholder="Price" class="tc" value="'.$r2['harga'].'">
                                    <input type="text" name="kapasitasTiket" placeholder="Amount" class="tr" value="'.$r2['kapasitasTiket'].'">
                                    ';
                                }
                        } else{
                            echo' 
                                    <input type="text" name="jenisTiket" placeholder="Ticket Category" class="tl" value="">
                                    <input type="text" name="harga" placeholder="Price" class="tc" value="">
                                    <input type="text" name="kapasitasTiket" placeholder="Amount" class="tr" value="">
                                    ';
                        }
                        
                        }
                   
                    echo'
                    <div class="fileup">
                        <p>Upload Poster</p>
                        <input type="file" name="poster" id="" value"'.$r["poster"].'"></div>
                    
                    <textarea name="deskripsi" placeholder="Description" cols="5" rows="10">'.$r["deskripsi"].'</textarea>';
                ?>
                <div class="save">
                    <a href="event_management.html" class="btn-cancel">Cancel</a>
                    <input type="submit" class="btn-save" value="Save">
                </div>
            </form>
        </div>
    </div>
</body>
</html>