
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

for($i=$n; $i>=1; $i--){

    printSpaces($n-$i);
    printSymbol($i);

    echo "<br>";
}

echo "</pre>";