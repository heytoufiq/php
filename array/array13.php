<?php
/* 
Indexed and associative array sorting 
*/

$fruits = array('apple', 'b'=>'banana', 'f'=>'orrange', 'plum', 'dates', 'mango');
$numbers = array(11, 2, 13, 30, 77, 80, 90);
$random = array('apple', 'Apple', 'banana', 'Banana', 'mango', 'Mango');
//sort($fruits);// only sort doesn't preserve the key
//asort($fruits); // If you want to preserve the key use the asort 

//asort($numbers);
//arsort($numbers);//  reverse sort with preserve key
//ksort($fruits); // key sorting process  & krsort used for the revers sort 

sort($numbers, SORT_STRING);

print_r($numbers);

$cnumbers = count($numbers);


// for($i=0; $i < $cnumbers; $i++){
//     echo $numbers[$i]."\n";
// } 

foreach($numbers as $number){
    echo $number ."\n";
}

sort($random, SORT_STRING | SORT_FLAG_CASE);

print_r($random);