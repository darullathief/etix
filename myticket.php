
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Ticket </title>
    <link rel="icon" href="icon/ICON ETIX.png">
    <link rel="stylesheet" href="style/style_myticket.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <img src="img/etixlogo.png"  class="logo">
    </nav>
    <div class="container">
        <aside>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">My Ticket</a></li>
            </ul>
        </aside>

        <?php
            require "script/conn.php";
                $username   = $_COOKIE['user_name'];
                $query      = "select * from vmyevent where username ='$username'";
                $result     = mysqli_query ($conn, $query);

                $rows= [];

                while ($row = mysqli_fetch_assoc($result)) {
                    $rows[] = $row;
                }

                if(count($rows) == 0) {
                    echo"<p> Belum Memiliki Tiket</p>";
                } else {
                    echo"
                    <table>
                    <tr>
                        <th>Event Poster</th>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Quantity</th>
                        <th>Package</th>
                        <th>Payment Status</th>
                    </tr>
                    ";

                    while ($r= mysqli_fetch_assoc($result) ) {
                        echo"
                        <tr>
                        <td><img src= 'upload/".$r['poster']."' alt='bornpink' class='bp'></td>
                        <td>".$r['namaEvent']."</td>
                        <td class='date'>".$r['tanggalEvent']."</td>
                        <td class='qty'> 1 </td>
                        <td>".$r['jenisTiket']."</td>
                        <td>".$r['statusBayar']."></td>
                        </tr>";
                    }

                    echo'</table>';
                }

        ?>
                
                    
    
    </div>
</body>
</html>