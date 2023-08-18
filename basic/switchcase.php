<?php

// Find out odd even number using switch case method 

$n = 13;
$r = $n % 2;

switch($r){
    case 0:
    echo "{$n} is even number \n";
    break;
    default:
    echo "{$n} is odd number \n";
}

// Multiple case testing using switch case 

$color = 'red';

switch($color){
    case 'red':
        echo ucwords($color)." is our favourite color";
        break;
    case 'green':
        echo ucwords($color)." is our favourite color";
        break;
    case 'blue':
        echo ucwords($color)." is our favourite color";
        break;
        default:
        echo "We don't about this {$color}";
}

echo "\n";

// how to find out +ve even+odd or -ve even+od number 

$m = -13;
$result = $m % 2;

switch($result){
    case 0:
        switch($m){
            case $m > 0:
                echo "{$m} is positive even number";
                break;
            case $m < 0;
                echo "{$m} is negative even number";
        }
        break;
        default:
        switch($m){
            case $m > 0:
                echo "{$m} is positive odd number";
                break;
            case $m < 0;
                echo "{$m} is negative odd number";
        }
}

echo "\n";

// Multiple case alternative process 

switch(true){
    case ($result == 0 && $m > 0):
        echo "{$m} is positive even number";
        break;
    case ($result == 1 && $m > 0):
        echo "{$m} is positive odd number";
        break;
    case ($result == 0 && $m < 0):
        echo "{$m} is negative even number";
        break;
    case ($result == -1 && $m < 0):
        echo "{$m} is negative odd number";
}