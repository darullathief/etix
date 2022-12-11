<?php
require 'script/conn.php';
$event = $_GET['kd_event'];
$query = "select * from event where kdEvent='$event'";
$result = mysqli_query($conn, $query);

$rows = [];

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

$eventloc = null;
$eventdate = null;

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
        <img src="img/ETIX LOGO.png"  class="logo">
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

            <form action="" class="edit">
                <?php foreach ($rows as $r) {
                    echo '
                    <input type="text" name="" placeholder="Event Name" class="fl" value ="'.$r["namaEvent"].'">
                    <select name="" class="fr">
                        <option value="" selected disabled>Category</option>
                        <option value="Musik">Music Concert</option>
                        <option value="Olahraga">Sport</option>
                        <option value="Theater">Art & Theater</option>
                    </select>

                    <input type="text" name="" placeholder="Event Location" class="fl" value ="'.$r["lokasiEvent"].'">
                    <input type="date" name="" class="fr" value ="'.$r["tanggalEvent"].'">

                    <input type="text" name="" placeholder="Ticket Category" class="tl">
                    <input type="text" name="" placeholder="Price" class="tc">
                    <input type="text" name="" placeholder="Sell" class="tr">
                    <div class="action">
                        <a href="#">+</a>
                        <a href="#">-</a>
                    </div>

                    <div class="fileup">
                        <p>Upload Poster</p>
                        <input type="file" name="" id=""></div>
                    
                    <textarea name="" placeholder="Description" cols="5" rows="10"></textarea>';
                }?>
                <div class="save">
                    <a href="event_management.html" class="btn-cancel">Cancel</a>
                    <a href="#" class="btn-save">Save</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>