<?php
/* 
Array shuffle and random array 
*/

$lottery = array('sohel', 'rahim', 'sohan', 'amjad', 'emran');

$random = mt_rand(0, 5);

echo $lottery[$random];

echo "\n";

$numbers = range(40, 72);

$rand = mt_rand(0,33);

$luck = $numbers[$rand];

if($luck % 2 ==0){
    echo "head";
}else{
    echo "Tail";
}

echo "\n";
shuffle($numbers);

print_r($numbers);
