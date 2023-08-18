<?php 

// How to find out leap year using if else conditions

//1. Divisible by 4? 
//2. Divisible by 100?
//3. Divisible by 400?

$year = 2000;

if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "This {$year} is leap year";
}elseif($year % 4 == 0 && $year % 100== 0){
    echo "This {$year} is not leap year";
}elseif($year % 4 == 0){
    echo "This {$year} is leap year";
}else{
    echo "This {$year} is not leap year";
}

echo "\n";

// var_dump ($year % 400 ==0);
if($year % 4 ==0 && ($year % 100 !=0 || $year % 400 ==0)){ // (true && (false || true)) = true && true = true
    echo "This {$year} is leap year";
}else{
    echo "This {$year} is not leap year";
}