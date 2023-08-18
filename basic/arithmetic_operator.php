<?php
// Arithmetic operators & How it works 

// +, -, *, /, % 
// addition 
$addition = 12;
//$number = $number + 13; // = assignment operator 
$addition += 13; // Alternative process for adition +=
echo $addition;

echo "\n";
//subtraction
$subtraction = 12;
//$number = $number + 13; // = assignment operator 
$subtraction -= 13; // Alternative process for subtraction +=
echo $subtraction;

echo "\n";

// Multiplication 
$multiplication = 12; // = assignment operator 
// $multiplication = $multiplication * 12; // Alternative process for Multiplication *=
$multiplication *= 13;
echo $multiplication;

echo "\n";

// Division 
$division = 12; // = assignment operator 
// $division = $division / 12; // Alternative process for Division /=
$division /= 2; // forward slash
echo $division;

echo "\n";

// Modulas 
$modulas = 13; // = assignment operator 
// $modulas = $modulas % 3; // Alternative process for Modulas %=
$modulas %= 2;
echo $modulas;

echo "\n";

// precedence of arithmetic operator 

$number = 13-5*6; 
$number = (13-5)*6; // precedence of operators in php (BODMAS-Bracet or division, division, Multiplication, addition, Subtraction)
// $number = (13/5)*6;
// $number = (13*5)*6;
// $number = (13+5)*6;
//$number = (16+4) * (3-6);
echo $number;

echo "\n";

// Increament operator 
$number = 12;
$number ++; // It means $number +=1; or $number = $number+1;
echo $number;

echo "\n";

// Dcreament operator 
$number = 12;
$number --; // It means $number -=1; or $number = $number-1;
echo $number;

echo "\n";

$n = 7;
$m = $n++; // post increment
echo $m, "\n", $n;

echo "\n";


//alternative process 
$n = 7;
$m = ++$n; // pre-increment
echo $m, "\n", $n;

// echo "\n";

// $m = $n++; how it works exactly 
/* 
$n = 7;
$m = $n;
$n = $n+1;
echo $m, "\n", $n; 
*/
