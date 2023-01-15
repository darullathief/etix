<?php    
function show($k){
    require 'script/conn.php';
    $query = "select * from vevent where kategoriEvent = '$k' group by kdevent 
        limit 3";
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
    <title>Landing Page/Home Page</title>
    <link rel="stylesheet" href="style/style_landingpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <nav>
        <a href="index.php"><img src="img/ETIX LOGO.png" class="logo" alt="logo"></a>
        <div>
            <a href="login.html" class="btn">Login</a>
            <a href="login.html" class="btn">Register</a>
        </div>
    </nav>
    <div class="typography1">
            <div>
                <h1> LET'S GET START , <br>
                FIND YOUR <span class="warnafont"> TICKET! </span></h1>
            </div>
        </div>

        <div class="formsearch">
            <form action = "searchingpage.html"> 
                <input type="text" name="Search for artist or event" placeholder="Search for artist or event...">
                <input type="submit" value="Search" class="btn btn-search">
            </form>
        </div> 


    <div class="content1">
    <div class="videoyt"> 
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gQlMMD8auMs"
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

        <div class="tulisangambar1">
            <div>
                <h2> Born Pink Sale up to
                    <br> 50% for new user! </h2>
                <p> Get this sale by sign
                <br> in to your account. </p>
            </div>
            <img src="img/bpink.jpeg">
        </div>
    </div>
    <div class="tulisan1">
        <div>
            <p> Here's some recommendation for you! <p>
        </div>
    </div>
    <div class="container">
        <div class="slider-container" id="card1">
        <a href="#card1" class="slide"><span class="material-symbols-outlined">arrow_back_ios</span></a>
            <div class="card">
                <img class="imgcard" src="img/sportcard.jpeg" alt="Sport">
                <div class="intro">
                    <h2> <b> Sports</b> Fifa World Cup 2022 </h2>
                    <p> 20th December 2022</p>
                </div>
            </div>
            <a href="#card2" class="slide"><span class="material-symbols-outlined">arrow_forward_ios</span></a>
        </div>

        <div class="slider-container" id="card2">
            <a href="#card1" class="slide"><span class="material-symbols-outlined">arrow_back_ios</span></a>
            <div class="card">
                <img class="imgcard" src="img/theatercard.jpeg" alt="Theate">
                <div class="intro">
                    <h2> <b> Theater</b> Into the Red Velvet World </h2>
                    <p> 1st January 2022</p>
                </div>
            </div>
            <a href="#card3" class="slide"><span class="material-symbols-outlined">arrow_forward_ios</span></a>
        </div>

        <div class="slider-container" id="card3">
        <a href="#card2" class="slide"><span class="material-symbols-outlined">arrow_back_ios</span></a>
            <div class="card">
                <img class="imgcard" src="img/musiccard.jpeg" alt="Music">
                <div class="intro" >
                    <h2> <b> Music</b> Born Pink World Tour </h2>
                    <p> 10th December 2022</p>
                </div>
            </div>
            <a href="#card4" class="slide"><span class="material-symbols-outlined">arrow_forward_ios</span></a>
        </div>

        <div class="slider-container" id="card4">
        <a href="#card3" class="slide"><span class="material-symbols-outlined">arrow_back_ios</span></a>
            <div class="card">
                <img class="imgcard" src="img/theater2card.jpeg" alt="Music">
                <div class="intro">
                    <h2> <b> Theater</b> Willy Wonka Indonesia </h2>
                    <p> 22 May 2023</p>
                </div>
            </div>
            <a href="#card4" class="slide"><span class="material-symbols-outlined">arrow_forward_ios</span></a>
        </div>
    </div>

    <div class="subtulisan1">
        <div>
            <p> Browse by Category <p>
        </div>

        <div class="container2">
        <a href="searchcategory.php?kategori=Music">
            <div class="card2">
                <img class="imgcard2" src="img/browsemusic.jpeg" alt="Music">
                <p> Music Concert</p>
            </div></a>
    
            <a href="searchcategory.php?kategori=Sport">
            <div class="card2">
                <img class="imgcard2" src="img/browsesport.jpeg" alt="Sport">
                <p> Sports </p>
            </div></a>
    
            <a href="searchcategory.php?kategori=Arts">
            <div class="card2">
                <img class="imgcard2" src="img/browseart.jpeg" alt="Art">
                <p> Arts & Theater</p></a>
            </div>
        </div>
    </div>
<br>
<div class="bodytengah">
        <div class="subsubtulisan2a">
                    <img src="icon/iconmusic.png" class="icon">
                        <p> Music Concert </p>
                </div> 
            <div class="topselling">
                <?php show("Music");?>
            </div>
        <div class="subsubtulisan2a">
                    <img src="icon/iconsport.png" class="icon">
                        <p> Sport </p>
                </div> 
            <div class="topselling">
                <?php show("Sport");?>
            </div>

        <div class="subsubtulisan2a">
                    <img src="icon/icontheatre.png" class="icon">
                        <p> Arts & Theatre </p>
        </div> 
        <div class="topselling">
            <?php show("Arts & Theatre");?>
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
            <div>
                <a href="" class="btn-socmed">Instagram</a>
                <a href="" class="btn-socmed">Youtube</a>
            </div>
        </div>
    </footer>

</body>
</html>