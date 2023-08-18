<?php
/*
* Determines if the argument is even or odd
* Function need to return 
* condition need to echo 
* If your condition got the true then return will true or false 
* If you set an one parameter then argument will pass one argument 
* You can keep your function.php file another directory and you can all it using this code- inclue_once"directory_location/filename"
*/

function isEven($n){ // Parameter
    if($n % 2 == 0){
        return true;
    }
    return false;
}

$x = 12;

if (isEven($x)){ // Argument 
    echo "{$x} is an Even Number";
}else{
    echo "{$x} is an Odd Number";
}