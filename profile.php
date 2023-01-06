<!DOCTYPE html>AA
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style_profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
    <img src="img/ETIX LOGO.png" alt="logo" class="logo">
     </nav>
     <div class="container">
        <div class="sidebar">
            <div class="file">
        <?php
        require "script/conn.php";
        $username   = $_COOKIE['user_name'];
        $query      = "select * from user where username ='$username'";
        $result     = mysqli_query ($conn, $query);

        $rows= [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        foreach ($rows as $r) {
            echo
               '<img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="gambar1">
                <div class="username">
                    <p>@'.$r['username'].'</p>
                    <p class="fullname"><b>'.$r['fullNameUser'].'</b></p>
                </div> ';}
                ?>
            </div>
            <ul>
                <li><a href="profile.html"><img src="icon/PROFILE.png" class="navicon"><span class="nav-link">Profile</span></a></li>
                <li><a href="#"><img src="icon/change-password.png" class="navicon"><span class="nav-link">Change Password</span></a></li>
                <li><a href="payment_history.html"><img src="icon/TRANSACTION.png" class="navicon"><span class="nav-link">Payment History</span></a></li>
                <li><a href="#"><img src="icon/setting.png" class="navicon"><span class="nav-link">Settings</span></a></li>
            </ul>
        </div>
        <div class="biodata">
        <h2>Profile</h2>
        <div class="form">
            <form action="" >

            <?php
                foreach ($rows as $r) {
                    echo 

                '<label for="">Email</label>
                <input type="text" placeholder="Email" value='.$r['email'].'>
                <label for="">Username</label>
                <input type="text" placeholder="Username (@)" value='.$r['username'].'>
                <label for="">Name</label>
                <input type="text" placeholder="Full name" value='.$r['fullNameUser'].'>
                <label for="">Date of Birth</label>
                <div class="birth-data">
                    <input type="text" placeholder="Day" value='.$r['Day'].'>
                    <input type="text" placeholder="Month" value='.$r['Month'].'>
                    <input type="text" placeholder="Year" value='.$r['Year'].'>
                </div>
                <label for="">Phone Number</label>
                <input type="text" placeholder="Phone Number (+62)">
                <label for="">Address</label>
                <input type="text" placeholder="Full Address">
                <hr>
                <input type="submit" value="Update Profile" class="yellow"> ';}

                ?>
            </form> 
     </div>
     </div>
     </div>
     </div>
</body>
</html>