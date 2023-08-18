<?php

// Normal conditions 
$number = 12;
if($number==12){
    echo "Twelve";
}elseif($number==10){
    echo "ten";
}else{
    echo"default";
}
echo "\n";
// if else condition check by ternary operator 

$output1 = ($number==12)? "Twelve" : (($number == 10)? "ten": "default");
echo $output1;

echo "\n";

$output2 = ($number==12)? "Twelve" : (($number == 10)? "ten": (($number ==11) ? "Eleven":"default"));
echo $output2;

echo "\n";

// odd and even number 
if($number % 2 == 0){
    echo "{$number} is even number";
}else{
    echo "{$number} is odd number";
}

echo "\n";

// ternary operator procedure 

$result = ($number % 2==0) ? "{$number} is even number" : "{$number} is odd number"; // $result = condition ?  value1 : value2 (if condition true then value1 will return a result or condition false then value2 will return a result)
 echo $result;