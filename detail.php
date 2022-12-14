<?php require "script/conn.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Event</title>
    <link rel="icon" href="icon/ICON ETIX.png">
    <link rel="stylesheet" href="style/style_detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="landingpage.html"><img src="img/ETIX LOGO.png" class="logo" alt="logo"></a>
            <div>
            <input type="checkbox" id="hamburger">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <div class="menu-item">
                <a href="payment_history.html" class="navitem"><img src="icon/TRANSACTION.png" class="navicon"><span>Transaction</span></a>
                <a href="event_management.php" class="navitem"><img src="icon/MYEVENT.png" class="navicon"><span>My Event</span></a>
                <a href="myticket.html" class="navitem"><img src="icon/MYTICKET.png" class="navicon"><span>My Ticket</span></a>
                <a href="profile.html" class="navitem"><img src="icon/PROFILE.png" class="navicon"><span>Profile</span></a>
            </div>
        </div>
    </nav>

    <div class="container">
        
    <?php
        $kdEvent = $_GET['kdEvent'];
        $query = "select kdEvent, namaEvent, fullNameUser,  date_format(tanggalEvent,'%W, %D %M %Y') tanggalEvent,
                    lokasiEvent,deskripsi,poster,kategoriEvent,kdJenis,jenisTiket,
                    concat('Rp. ',format(harga,0)) harga
                    from vEvent where kdEvent = '$kdEvent' group by kdEvent";
        $result = mysqli_query($conn, $query);
        
        while ($row = mysqli_fetch_assoc($result) ) {
            echo'
            <div class="jumbotron">
            <div>
                <p>'.$row['kategoriEvent'].'</p>
                <h1>'.$row['namaEvent'].'</h1>
                <p>Uploaded by : <b>'.$row['fullNameUser'].'</b></p>
            </div>
        </div>

        <aside>
            <div class="ket">
                <p>'.$row['tanggalEvent'].'</p>
                <p>'.$row['lokasiEvent'].'</p>
            </div>
            <h2>Ticket Category</h2>
            <div class="cat-ticket">
                <!-- Kategori 1 -->
                <div class="ticket">
                    <div>
                        <p class="label-tix">'.$row['jenisTiket'].'</p>
                        <p class="price-tix">'.$row['harga'].'</p>
                    </div>
                    <a href="#" class="btn">Add</a>
                </div>

                <div class="total-est">
                    <div>
                        <p class="label-tix">Total</p>
                    <p class="total">'.$row['harga'].'</p>
                    </div>
                    <a href="payment.php?kdJenis='.$row['kdJenis'].'" class="btn">Checkout</a>
                </div>
            </div>
        </aside>

        <div class="content">
            <img class="thumbnail" src="upload/'.$row['poster'].'">
            <h2>Description</h2>
            <p class="desc">'.$row['deskripsi'].'</p>
        </div>';
        }
    ?>
    </div>
    <footer>
        <div>
            <h4>E-tix</h4>
            <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Our teams</a></li>
            </ul>
        </div>
        <div>
            <h4>Our Services</h4>
            <ul>
                <li><a href="event_management.html">Event Management</a></li>
            </ul>
        </div>
        <div>
            <h4>Partner with us</h4>
            <ul>
                <li><a href="#">Submit Event</a></li>
            </ul>
        </div>
        <div>
            <h4>Support</h4>
            <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Terms & Condition</a></li>
                <li><a href="#">Privacy  Policy</a></li>
            </ul>
        </div>
        </div>
        <div>
            <h4>Follow us</h4>
            <div>
                <a href="" class="btn-socmed">Instagram</a>
                <a href="" class="btn-socmed">Youtube</a>
            </div>
        </div>
    </footer>
</body>
</html>