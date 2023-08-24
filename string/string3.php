<?php
// How to split a charecter from a string 
$strvar = "Hello World";

// echo $strvar[0],"\n";
// echo $strvar[-3],"\n";
$lenth = strlen($strvar);
echo substr($strvar, $lenth-5);
echo PHP_EOL;
//echo substr($strvar, 1, 4);
echo substr($strvar, -7, 3);

