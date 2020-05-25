<?php

    $n= $_GET['n'];
    $s= $_GET['s'];

    $space=(2*$n)-2;

    function printStar($star){

        for($j=1; $j<=$star; $j++)
            echo $GLOBALS['s'];
    }

    function printSpace(){

        for($j=1; $j<=$GLOBALS['space']; $j++)
            echo "&nbsp;";

        $GLOBALS['space'] -= 2;
    }

    echo "<pre>";

    for($i=1; $i<=$n; $i++){

            printStar($i);
            printSpace();
            printStar($i);

            echo "<br>";
    }

    $star1=$n-1;
    $star2=$n-1;
    $space=2;

    for($i=1; $i<=$n; $i++){

        for($j=1; $j<=$star1; $j++)
            echo $s;
        $star1--;

        for($j=1; $j<=$space; $j++)
            echo "&nbsp;";
        $space += 2;

        for($j=1; $j<=$star2; $j++)
            echo $s;
        $star2--;

        echo "<br>";
    }
    echo "</pr>";