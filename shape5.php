<?php

$n = $_GET['n'];
$s = $_GET['s'];

$space = "&nbsp;";

for ($i=1; $i<=$n; $i++){

    for($j=1; $j<=$n-$i; $j++){

        echo $space;

    }

    for($j=1; $j<=$i; $j++){

        echo $s;

    }

    echo "<br>";



}