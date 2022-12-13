<?php
 if (!isset($username)){
    
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page/Home Page</title>
    <link rel="stylesheet" href="style/style_landingpage.css">
</head>
<body>
    <nav>
        <a href="landingpage.html"><img src="img/ETIX LOGO.png" class="logo" alt="logo"></a>
        <div>
            <a href="#" class="navitem">Transaction</a>
            <a href="event_management.php" class="navitem">My Event</a>
            <a href="#" class="navitem">My Ticket</a>
            <a href="#" class="navitem">Profile</a>
        </div>
    </nav>
        <div class="typography1">
            <div>
                <h1> LET'S GET START , <br>
                FIND YOUR <span class="warnafont"> TICKET! </span></h1>
            </div>
        </div>

        <div class="formsearch">
            <form> 
                <input type="text" name="Search for artist or event" placeholder="Search for artist or event...">
                <input type="submit" value="Search" class="btn">
            </form>
        </div> 


    <div class="content1">
    <div class="videoyt"> 
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gQlMMD8auMs"
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

        <div class="tulisangambar1">
            <h2> Born Pink Sale up to
                <br> 50% for new user! </h2>
            <p> Get this sale by sign
               <br> in to your account. </p>
            <img src="img/bpink.jpeg">
        </div>
    </div>
    <div class="tulisan1">
        <div>
            <p> Here's some recommendation for you! <p>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <img class="imgcard" src="img/sportcard.jpeg" alt="Sport">
            <div class="intro">
                <h2> <b> Sports</b> Fifa World Cup 2022 </h2>
                <p> 20th December 2022</p>
            </div>
        </div>

        <div class="card">
            <img class="imgcard" src="img/theatercard.jpeg" alt="Theate">
            <div class="intro">
                <h2> <b> Theater</b> Into the Red Velvet World </h2>
                <p> 1st January 2022</p>
            </div>
        </div>

        <div class="card">
            <img class="imgcard" src="img/musiccard.jpeg" alt="Music">
            <div class="intro">
                <h2> <b> Music</b> Born Pink World Tour </h2>
                <p> 10th December 2022</p>
            </div>
        </div>

        <div class="card">
            <img class="imgcard" src="img/theater2card.jpeg" alt="Music">
            <div class="intro">
                <h2> <b> Theater</b> Willy Wonka Indonesia </h2>
                <p> 22 May 2023</p>
            </div>
        </div>
    </div>

    <div class="subtulisan1">
        <div>
            <p> Browse by Category <p>
        </div>

        <div class="container2">
            <div class="card2">
                <img class="imgcard2" src="img/browsemusic.jpeg" alt="Music">
                <p> Music Concert</p>
            </div>
    
            <a href=""></a>
            <div class="card2">
                <img class="imgcard2" src="img/browsesport.jpeg" alt="Sport">
                <p> Sports </p>
            </div>
    
            <div class="card2">
                <img class="imgcard2" src="img/browseart.jpeg" alt="Art">
                <p> Arts & Theater</p>
            </div>
        </div>
    </div>
<br>
<div class="bodytengah">
        <!-- <div class="subtulisan2">
                    <p> <b>Top Selling </b> <p>
        </div>
        <div class="subsubtulisan2a">
                <img src="icon/iconmusic.png" class="icon">
                <p> Music Concert </p>
        </div>
<br>
        <div class="topselling">
            <div class="cardticket">
                <img class="imgticket" src="img/ticketpic1.jpeg" alt="Ticket">
                <div class="shapesdesc">
                    <div class="descticket">
                        <p> <b> Taylor Swift World Tour 2023</b>
                        <br> at Stadion Gelora Bung Karno </p>
                    </div>
                    <div class="descpriceticket">
                        <p> start from </p>
                        <p> Rp 800.000</p>
                    </div>
                </div>
            </div>

            <div class="cardticket">
                <img class="imgticket" src="img/ticketpic3.jpeg" alt="Ticket">
                <div class="shapesdesc">
                    <div class="descticket">
                        <p> <b>  BTS : Purple Earth </b>
                        <br> at Stadion Gelora Bung Karno </p>
                    </div>
                    <div class="descpriceticket">
                        <p> start from </p>
                        <p> Rp 1.000.000</p>
                    </div>
                </div>
            </div>

            <div class="cardticket">
                <img class="imgticket" src="img/ticketpic2.jpeg" alt="Ticket">
                <div class="shapesdesc">
                    <div class="descticket">
                        <p> <b> Jakarta Head in The Clouds Festival </b> 
                        <br> Community Park PIK 2</p>
                    </div>
                    <div class="descpriceticket">
                        <p> start from </p>
                        <p> Rp 500.000</p>
                    </div>
                </div>
            </div>


        </div>

        <br>
        <br>-->

        <div class="subsubtulisan2a">
            <img src="icon/iconsport.png" class="icon">
                <p> Sport </p>
        </div> 
        <br>
        <?php
        require 'script/conn.php';
        $query = "select * from event where kategoriEvent = 'Sport'";
        $result = mysqli_query($conn, $query);
        
        while ($row = mysqli_fetch_assoc($result) ) {
            echo'
            <a href="detail.php?kdEvent="'.$row['kdEvent'].'>
            <div class="topselling">
                <div class="cardticket">
                    <img class="imgticket" src="'.$row['poster'].'" alt="Ticket">
                    <div class="shapesdesc">
                        <div class="descticket">
                            <p> <b>'.$row['namaEvent'].'</b>
                            <br> at Concert Hall, Hong Kong City Hall </p>
                        </div>
                        <div class="descpriceticket">
                            <p> start from </p>
                            <p> Rp 100.000</p>
                        </div>
                    </div>
                </div>
                </a>';
        }
        ?>
       
        </div></div>

<br>
<br>

        <div class="subsubtulisan2a">
            <img src="icon/icontheatre.png" class="icon">
            <p> Arts & Theatre </p>
        </div>
    <br>
    <div class="topselling">
        <div class="cardticket">
            <img class="imgticket" src="img/ticketpic1.jpeg" alt="Ticket">
            <div class="shapesdesc">
                <div class="descticket">
                    <p> <b> Taylor Swift World Tour 2023</b>
                    <br> at Stadion Gelora Bung Karno </p>
                </div>
                <div class="descpriceticket">
                    <p> start from </p>
                    <p> Rp 800.000</p>
                </div>
            </div>
        </div>

        <div class="cardticket">
            <img class="imgticket" src="img/ticketpic3.jpeg" alt="Ticket">
            <div class="shapesdesc">
                <div class="descticket">
                    <p> <b>  BTS : Purple Earth </b>
                    <br> at Stadion Gelora Bung Karno </p>
                </div>
                <div class="descpriceticket">
                    <p> start from </p>
                    <p> Rp 1.000.000</p>
                </div>
            </div>
        </div>

        <div class="cardticket">
            <img class="imgticket" src="img/ticketpic2.jpeg" alt="Ticket">
            <div class="shapesdesc">
                <div class="descticket">
                    <p> <b> Jakarta Head in The Clouds Festival </b> 
                    <br> Community Park PIK 2</p>
                </div>
                <div class="descpriceticket">
                    <p> start from </p>
                    <p> Rp 500.000</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="jualticket">
    <img class="vectorsell" src="img/vectorsell.png">
    <div class="tulisanjual">
        <p> <b> Let's create your event now ! </b> <br>
            Tell us about your upcoming event and we'll
           <br> make your event become awesome.
            </p>
        </div>

                <div>
                    <a href="sellticket.html" class="btn jual">Submit Your Event</a>
                </div></div>
             </div>

   
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
            <a href="" class="btn-socmed">Instagram</a>
            <a href="" class="btn-socmed">Youtube</a>
        </div>
    </footer>

</body>
</html>