<?php

$n= $_GET['n'];
$s= $_GET['s'];


function printStar($star){

    for($j=1; $j<=$star; $j++) {
        $r = rand(0,255);
        $g = rand(0,255);
        $b = rand(0,255);
        echo "<span style='color: rgb($r, $g, $b)'>".$GLOBALS['s']."</span>";
    }
}

function printSpace($space){

    for($j=1; $j<=$space; $j++) echo "&nbsp;";

}

echo "<pre>";

for($i=1; $i<=$n; $i++){

    printStar($i);
    printSpace(($n-$i)*2);
    printStar($i);

    echo "<br>";
}

for($i=$n-1; $i>=1; $i--){

    printStar($i);
    printSpace(($n-$i)*2);
    printStar($i);

    echo "<br>";
}



echo "</pre>";