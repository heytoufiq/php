<?php
/* 
* Function parameter type hinting check 
* Function parameter type check 
* Sometimes we need to check string or integer type data & how can we do it. 
*/

function factorial($n){
    if(gettype($n)!="integer"){ // type hinting check 
        return "Invalid";
    }
    $result = 1; 
    for($i = $n; $i > 1; $i--){ // factorial 
        $result *= $i;
    }
    return $result;
}

$x = 5;

echo "Factorial of {$x} is ". factorial($x);