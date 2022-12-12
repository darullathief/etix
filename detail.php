<?php require "script/conn.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style_detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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

    <div class="container">
    <?php
        $kdEvent = $_GET['$kdEvent'];
        $query = "select * from event where kdEvent = '$kdEvent'";
        $result = mysqli_query($conn, $query);
        
        while ($row = mysqli_fetch_assoc($result) ) {
            echo'
        <div class="jumbotron">
            <div>
                <p>'$row[]'</p>
                <h1>NFL Super Bowl LVII Tickets</h1>
                <p>Uploaded by : <b>Nine Sport</b></p>
            </div>
        </div>

        <aside>
            <p>Saturday, 14 January 2023  19:00</p>
            <p>Concert Hall, Hong Kong City Hall</p>
            <h2>Ticket Category</h2>
            <div class="cat-ticket">
                <!-- Kategori 1 -->
                <div class="ticket">
                    <div>
                        <p class="label-tix">Early Bird</p>
                        <p class="price-tix">Rp. 100.000</p>
                    </div>
                    <a href="#" class="btn">Add</a>
                </div>

                <!-- Kategori 1 -->
                <div class="ticket">
                    <!-- Kategori 1 -->
                    <div>
                        <p class="label-tix">Early Bird</p>
                        <p class="price-tix">Rp. 100.000</p>
                    </div>
                    <a href="#" class="btn">Add</a>
                </div>

                <div class="ticket">
                    <!-- Kategori 1 -->
                    <div>
                        <p class="label-tix">Early Bird</p>
                        <p class="price-tix">Rp. 100.000</p>
                    </div>
                    <a href="#" class="btn">Add</a>
                </div>

                <div class="total-est">
                    <div>
                        <p class="label-tix">Total</p>
                    <p class="total">RP 0</p>
                    </div>
                    <a href="payment.html" class="btn">Checkout</a>
                </div>
            </div>
        </aside>

        <div class="content">
            <img class="thumbnail" src="https://s1.ticketm.net/tm/en-us/img/static/superbowl/23/super-bowl-tile-2023.jpg">
            <h2>Description</h2>
            <p class="desc">Every year, the Super Bowl brings big thrills 
                to football fans across the country, pitting the Conference 
                champions against each other for the final matchup of the season. 
                Millions will tune in to the televised game, but nothing beats being 
                there live. See who will take home the coveted Vince Lombardi Trophy
                 when the tradition continues in Glendale, AZ for Super Bowl LVII on 
                 February 12, 2023, at State Farm Stadium. Get your tickets today at 
                 Ticketmaster, the Official Ticketing Partner of the NFL. All Super 
                 Bowl tickets are 100% mobile, so you can guarantee that the seat you 
                 buy is the seat you get. <br><br>
                 As the official partner of On Location, we’ve got your VIP 
                 access to the Big Game. From premium seats and the hottest 
                 tailgate parties, to meet and greets with NFL legends and 
                 getting you and your crew on the field to celebrate with the 
                 champions — a Super Bowl LVII package is the way to go for the 
                 ultimate game-day experience. Check out available tickets.</p>
        </div>
    </div>';?>

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
