<!--
      *
     **
    ***
   ****
  *****
 ******
*******

-->


<?php


$n= $_GET['n'];
$s= $_GET['s'];


function printSymbol($symbol){

    for($i=1; $i<=$symbol; $i++)
        echo $GLOBALS['s'];
}

function printSpaces($space){

    for($i=1; $i<=$space; $i++)
        echo ("&nbsp;");
}

echo "<pre>";

for($i=1; $i<=$n; $i++){

    printSpaces($n-$i);
    printSymbol($i);

    echo "<br>";
}

echo "</pre>";

//or

//echo "<pre>";
//
//for ($i=1; $i<=$n; $i++){
//
//    for($j=1; $j<=$n-$i; $j++){
//
//        echo "&nbsp;";
//
//    }
//
//    for($j=1; $j<=$i; $j++){
//
//        echo $s;
//
//    }
//
//    echo "<br>";
//}
//
//echo "</pre>";