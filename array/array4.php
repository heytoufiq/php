<?php
/* 
1. String to array & array to string 
*/

// $fruits = 'orange, apple, mango'; // string 

// $fruits = explode(', ', 'orange, apple, mango'); // string to array 

$fruits = preg_split('/(, |,)/', 'orange, apple, mango'); // alternative process 

// print_r($fruits);

echo $fruits;

echo "\n";

echo count($fruits);

echo "\n";

$fruits = join(', ', $fruits);
//print_r($fruits);

echo $fruits;

