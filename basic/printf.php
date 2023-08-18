<?php 

// printf & sprintf

$firstName = "Mr";
$middleName = "Toufiqur";
$lastName = "Rahman";

printf('My Name is, %s, %2s %s', $firstName, $lastName, $middleName); // Now output will be random order. 

echo "\n";

printf('My Name is, %3$s %2$s %1$s', $lastName, $middleName, $firstName); // variable swapping. $s(string) and %3(value of swapping or changing position of argument) 

echo "\n";

printf('The binary equivalent of %1$d is %1$b', 12);   // one of argument used in two place to display decimal and binary number using swapping process 

echo "\n";
$number = 45.126;

printf("%.2f", $number); // How to remove a number after decimal 

echo "\n";
$m = 123.3253; // Show this output 0123
$n = 27.155; // Show this outpu 0023

printf("%04d \n", $m);
printf("%04d \n", $n);

// Alternative process 
printf("%07.2f \n", $m);
printf("%07.2f \n", $n);


// sprintf

$fullName = sprintf('My Name is, %s, %2s %s', $firstName, $lastName, $middleName);

echo strtoupper($fullName); // strtoupper used for capital letter 