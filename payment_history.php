<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment History</title>
    <link rel="icon" href="icon/ICON ETIX.png">
    <link rel="stylesheet" href="style/style_ph.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="index.php"><img src="img/etixlogo.png"  class="logo"></a>
    </nav>

    <div class="container">
        <aside>
            <div class="profile">
                <img class="profile-pic" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
                <div>
                    <p class="username">@selsyaanz</p>
                <p class="name">Selsya Nabila R</p>
                </div>
                
            </div>
            <ul>
            <li><a href="profile.php"><img src="icon/PROFILE.png" class="navicon"><span class="nav-link">Profile</span></a></li>
                <li><a href="#"><img src="icon/change-password.png" class="navicon"><span class="nav-link">Change Password</span></a></li>
                <li><a href="payment_history.php"><img src="icon/TRANSACTION.png" class="navicon"><span class="nav-link">Payment History</span></a></li>
                <li><a href="#"><img src="icon/logout.png" class="navicon"><span class="nav-link">Sign out</span></a></li>
            </ul>
        </aside>


        <div class="content">
            <h2>Payment History</h2>
        
            <?php
            require "script/conn.php";
                    $username   = $_COOKIE['user_name'];
                    $query      = "select * from vpaymenthist where username ='$username'";
                    $result     = mysqli_query ($conn, $query);

                    $rows= [];

                    while ($row = mysqli_fetch_assoc($result)) {
                        $rows[] = $row;
                    }

                    if(count($rows) == 0) {
                        echo"<p> Belum Memiliki Tiket</p>";
                    } else {
                        foreach ($rows as $r) {
                            echo 
                        '<div class="card">
                            <img class="poster" src= "upload/'.$r['poster'].'">
                            <div class="row">
                                <p class="label">Event Name</p>
                                <p class="text">'.$r['namaEvent'].'</p>
                            </div>

                            <div class="row">
                                <p class="label">Date</p>
                                <p class="text">'.$r['tglBayar'].'</p>
                            </div>

                            <div class="row">
                                <p class="label">Total</p>
                                <p class="text">'.$r['totalBayar'].'</p>
                            </div>
                            
                            <div class="row">
                                <p class="label">Method</p>
                                <p class="text">'.$r['metodePembayaran'].'</p>
                            </div>

                            <div class="row">
                                <p class="label">Details</p>
                                <p class="text">'.$r['jenisTiket'].'</p>
                            </div>
                        </div>';
                        
                        }
                            
                        
                    }
                ?>
            
        </div>
                

   
    </div>
</body>
</html>