<?php
    $kategori= $_GET['kategori'];

    if($kategori == "Arts"){
        $kategori = "Arts & Theatre";
    } else{
        $kategori= $_GET['kategori'];
    }
    echo $kategori;
        function show($k){
            require 'script/conn.php';
            $query = "select * from vEvent where kategoriEvent = '$k' &&  statusEvent='On Sale' 
            group by kdevent ";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result) ){
                echo'
                <a href="detail.php?kdEvent='.$row['kdEvent'].'">
                    <div class="cardticket">
                        <img class="imgticket" src="upload/'.$row['poster'].'" alt="Ticket">
                        <div class="shapesdesc">
                            <div class="descticket">
                                <p> <b>'.$row['namaEvent'].'</b>
                                <br> at '.$row['lokasiEvent'].' </p>
                            </div>
                            <div class="descpriceticket">
                                <p> start from </p>
                                <p> '.$row['harga'].'</p>
                            </div>
                        </div>
                    </div>
                </a>';
            }
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Search by Category </title>
    <link rel="stylesheet" href="style/style_searchcategory.css">
</head>
<body>
    <nav>


        <a href="index.php"><img src="img/ETIX LOGO.png" class="logo" alt="logo"></a>
        
        <div class="formsearch">
            <form> 
                <input type="text" name="Search for artist or event" placeholder="Search for artist or event...">
            </form>
        </div> 


        <div>
            <a href="payment_history.html" class="navitem"><img src="icon/TRANSACTION.png" class="navicon">Transaction</a>
            <a href="event_management.php" class="navitem"><img src="icon/MYEVENT.png" class="navicon">My Event</a>
            <a href="myticket.html" class="navitem"><img src="icon/MYTICKET.png" class="navicon">My Ticket</a>
            <a href="profile.html" class="navitem"><img src="icon/PROFILE.png" class="navicon">Profile</a>
        </div>
    </nav>
    <div class="pencarian">
        <form>
            <form action="" >
                <input type="text" name="search" placeholder="Search for artist or event...">
    
            </form>
        </div>
       

<br>
<div class="bodytengah">
      
        <br>
        <br>

        <div class="subsubtulisan2a">
            <img src="icon/iconsport.png" class="icon">
                <p> <?php echo $kategori;?> </p>
        </div>
        <br>
        <div class="topselling">
            <?php show($kategori);?>
        </div>

   
    </div>
         <!-- <br>
        <div class="topselling">
            <div class="cardticket">
                <img class="imgticket" src="https://s1.ticketm.net/tm/en-us/img/static/superbowl/23/super-bowl-tile-2023.jpg" alt="Ticket">
                <div class="shapesdesc">
                    <div class="descticket">
                        <p> <b> NFL Super Bowl LVII Tickets</b>
                        <br> at Concert Hall, Hong Kong City Hall </p>
                    </div>
                    <div class="descpriceticket">
                        <p> start from </p>
                        <p> Rp 100.000</p>
                    </div>
                </div>
            </div>
            </a>
            <div class="cardticket">
                <img class="imgticket1" src="img/eastventures.jpg" alt="Ticket">
                <div class="shapesdesc">
                    <div class="descticket">
                        <p> <b> East Ventures Indonesia Open 2022</b>
                        <br> at Istora Senayan, Jakarta </p>
                    </div>
                    <div class="descpriceticket">
                        <p> start from </p>
                        <p> Rp 1.000.000</p>
                    </div>
                </div>
            </div>

            <div class="cardticket">
                <img class="imgticket2" src="img/badminton.jpg" alt="Ticket">
                <div class="shapesdesc">
                    <div class="descticket">
                        <p> <b> Indonesia Badminton Festival 2022 </b> 
                        <br> at Nusa Dua, Bali</p>
                    </div>
                    <div class="descpriceticket">
                        <p> start from </p>
                        <p> Rp 750.000</p>
                    </div>
                </div>
            </div>

            <br>

            


        </div>

   
    </div>-->

    <div class="jualticket">
        <img class="vectorsell" src="img/vectorsell.png">
        <div class="tulisanjual">
            <h1>  <b> Let's create your event now ! </b> <br> </h1>
                <p>Tell us about your upcoming event and we'll
            <br> make your event become awesome.
                </p>
            </div>

                    <div>
                        <a href="#" class="btn jual">Submit Your Event</a>
                    </div></div>
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
                    <div class="follow">
                    <h4>Follow us</h4>
                    <a href="" class="btn-socmed">Instagram</a>
                    <a href="" class="btn-socmed">Youtube</a>
                    </div>
                </div>
            </footer>

</body>
</html>