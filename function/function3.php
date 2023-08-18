<?php
/*
* Function parameter default value or optional parameter
*/

function serve($foodtype="coffee", $number="1 cup"){
    echo "{$number} of {$foodtype} has/have been served";
}

$ft = "coffee";
$n = "4 cups";
serve($ft, $n);