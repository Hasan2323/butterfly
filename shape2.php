<?php


$n= $_GET['n'];
$s= $_GET['s'];

for($i=$n; $i>=1; $i--){

    for($j=1; $j<=$i; $j++){

        echo $s;
    }
    echo ("<br>");
}

//or
//
//for ($i=1; $i<=$n; $i++){
//
//    for($j=$i; $j<=$n; $j++){
//
//        echo $s;
//
//    }
//
//    echo "<br>";
//}