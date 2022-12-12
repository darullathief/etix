<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style_em.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <nav>
        <img src="img/ETIX LOGO.png"  class="logo">
    </nav>

    <div class="container">
        <aside>
            <ul>
                <li><a href="home_vendor.html">Dashboard</a></li>
                <li><a href="event_management.html">Event Management</a></li>
            </ul>
        </aside>
        <div class="event">
        <h2>Event List</h2>
            <?php
             require 'script/conn.php';
                $query = "select * from event";
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
                            <th>Status</th>
                            <th>Kode Event</th>
                            <th>Nama Event</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                        ";
                        foreach ($rows as $r) {
                            echo "<tr>
                                    <td>".$r['statusEvent']."</td>
                                    <td>".$r['kdEvent']."</td>
                                    <td>".$r['namaEvent']."</td>
                                    <td>".$r['kategoriEvent']."</td>";
                                    
                            if ($r['statusEvent'] == "On Review") {
                                echo '<td>-</td></tr>';
                            } else  if ($r['statusEvent'] == "Approved") {
                                echo '<td><a href="edit_event.php?kd_event='.$r['kdEvent'].'" class="lst">Last Step</a></td></tr>';
                            } elseif ($r['statusEvent'] == "On Sale") {
                               echo '<td><a href="edit_event.php?kd_event='.$r['kdEvent'].'" class="btn"><span class="material-symbols-outlined">
                                    edit
                                    </span></a>
                                    <a href="#" class="btn btn-del"><span class="material-symbols-outlined">
                                    delete
                                    </span></a></td></tr>';
                            }
                        }
                        echo'</table>';
                }
                 
            ?>
                       
        </div>
    </div>
</body>
</html>