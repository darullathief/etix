<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <link rel="stylesheet" href="style/style_em.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <nav>
        <a href="index.php"><img src="img/ETIX LOGO.png"  class="logo"></a>
    </nav>

    <div class="container">
    <input type="checkbox" name="" id="hamburger">
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <aside>
            <ul>
                <li><a href="home_vendor.html">Dashboard</a></li>
                <li><a href="event_management.html">Event Management</a></li>
            </ul>
        </aside>
        <div class="event">
        <h2>Event List</h2>
            <div class ="scrollable">

            <?php
             require 'script/conn.php';
                $username = $_COOKIE['user_name'];
                $query = "select * from event where username ='$username'";
                $result = mysqli_query($conn, $query);
                
                $rows= [];
                
                while ($row = mysqli_fetch_assoc($result) ) {
                    $rows[] = $row;
                }

                if(count($rows) == 0){
                    echo"<p>Belum Ada Event</p>";
                } else {
                    echo"
                    <table>
                        <tr>
                            <th class='sticky sticky-status'>Status</th>
                            <th class='sticky sticky-kd'>Kode Event</th>
                            <th>Nama Event</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                        ";
                        foreach ($rows as $r) {
                            echo"<tr>";

                            if ($r['statusEvent'] == "On Review") {
                                echo '<td class="sticky sticky-status review">On Review</td>';
                            } else  if ($r['statusEvent'] == "Approved") {
                                echo '<td class="sticky sticky-status">Approved</td>';
                            } else if ($r['statusEvent'] == "On Sale") {
                               echo '<td class="sticky sticky-status sale">On Sale</td>';
                            }
                            echo "
                                    
                                    <td class='sticky sticky-kd'>".$r['kdEvent']."</td>
                                    <td>".$r['namaEvent']."</td>
                                    <td>".$r['kategoriEvent']."</td>";
                                    
                            if ($r['statusEvent'] == "On Review") {
                                echo '<td>-</td></tr>';
                            } else  if ($r['statusEvent'] == "Approved") {
                                echo '<td><a href="edit_event.php?kd_event='.$r['kdEvent'].'" class="lst">Last Step</a></td></tr>';
                            } else if ($r['statusEvent'] == "On Sale") {
                               echo '<td><a href="edit_event.php?kd_event='.$r['kdEvent'].'" class="btn"><span class="material-symbols-outlined">
                                    edit
                                    </span></a>
                                    <a href="script/delete_event.php?kd_event='.$r['kdEvent'].'" class="btn btn-del"><span class="material-symbols-outlined">
                                    delete
                                    </span></a></td></tr>';
                            }
                        }
                        echo'</table>';
                }
                 
            ?>
             </div>          
        </div>
    </div>
</body>
</html>