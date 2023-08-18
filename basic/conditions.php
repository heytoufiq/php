<?php 
$n = 12;
if($n % 2 == 0){ // Logical operators and 2, 0, $n is operend 
    echo "$n is even number";
}else{
    echo "$n is odd number";
}

echo "\n";
$m = 12;
if ($m > 10 ){
    echo "$m is greater than 10";
}else{
    echo "$m is smaller than 10";
}
// Logical operators
/* 
== it check that both is equal 
!= it check that both is not equal 
> greater than 
< smaller than 
>= greater than equal to operator
<= smaller than equal to operator 
*/

// == 
echo "\n";
$alom = 100;
$rahim = 200;

if($alom == $rahim){
    echo "Alom has same amount of money as rahim";
}elseif($alom > $rahim){
    echo "Alom has more money than rahim";
}elseif($alom < $rahim){
    echo "Alom has less money than rahim";
}elseif($alom>=$rahim){
    echo "Alom has same or more money than rahim";
}

echo "\n";

$age = 14;

if($age >= 13 && $age <= 19){ //multiple condition check with and (&&)
    echo "This person is a teenager";
}else{
    echo "This person is not a teenager";
}

echo "\n";

$food = "Tuna";

if($food == "Tuna" || $food == "salmon"){ // multiple condition check with or (||)
    echo"{$food} has vitamin D";
}elseif($food == "apple"){
    echo "{$food} doesn't contains vitamin D";
}else{
    echo "We don't know if {$food} contains vitamin D";
}