<?php
require 'conn.php';
$s = "M0001";
$k = "80000";
$d = [];
// $kdtiket = $s.$k;
for ($i=1; $i > 12 ; $i++) { 
    $kdtiket = $s.$k.$i;
    $d[i]= $kdtiket;
} 
$i = 1;
while ($i <= 12) {
    if ($i<10) {
        $kdtiket = $s.$k."0$i";
        // echo $kdtiket."<br>";
    } else {
        $kdtiket = $s.$k.$i;
    }
    echo $kdtiket."<br>";
    $i++; 
}
// $query3 = "insert into ticket values 
//         ('$kdtiket','$kdJenis','Available'";
?>