<?php

$n = $_GET['n'];
$s = $_GET['s'];

function color(){

    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);

    echo "<span style='color:rgb($r,$g,$b);'>".$GLOBALS['s']."</span>";

}

echo "<pre>";

for ($i=1; $i<=$n; $i++){

    for($j=1; $j<=$i; $j++){

        // echo $s;
        color();
    }

    for($j=1; $j<=$n*2-($i*2); $j++){

        echo "&nbsp;";

    }

    for($j=1; $j<=$i; $j++){

        // echo $s;
        color();

    }

    echo "<br>";

}



for ($i=1; $i<=$n; $i++){

    for($j=$i; $j<=$n-1; $j++){

        // echo $s;
        color();

    }

    for($j=1; $j<=$i*2; $j++){

        echo "&nbsp;";

    }

    for($j=$i; $j<=$n-1; $j++){

        // echo $s;
        color();

    }

    echo "<br>";

}


echo "</pre>";










