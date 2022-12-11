

<?php
require '../script/conn.php';

$query = "select * from event where statusEvent ='On Review'";
$result = mysqli_query($conn, $query);

$rows= [];

while ($row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
}

if(count($rows) == 0){
    echo "Belum ada data";
}

?>