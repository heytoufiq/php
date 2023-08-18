<?php
/* 
* How to define return type of value 
*/

function sum(int $x, int $y, int $z):int{ // defined function parameter type 
    return $x+$y+$z;
}

echo sum(4,6,10); // argument shuould be integer type

echo PHP_EOL;

// String type 

function concatenation(string $x, string $y, string $z):string{ // defined function parameter type 
    // return "$x,$y,$z";
    return "{$x}{$y}{$z}";
}

echo concatenation("A","B","C"); // argument shuould be integer type