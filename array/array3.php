<?php
/* 
Details of Associative array 
*/

$students = [
    '12' => 'Rahim',
    '13' => 'karim',
    '14' => 'Jamal',
];

// echo $students['14']."\n";

$foods = [
    'vegetables' => 'brinjal, brocoli, carrot, capsicam',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];

$foods['drinks'] .=",orange juice"; // new data add 

$n = count($foods)."\n";
echo $n;

echo $foods['vegetables']."\n";

foreach($foods as $key=>$value){
    echo $key."=".$value."\n";
}

$values = array_values($foods);

print_r($values);

$keys = array_keys($foods);
// print_r($keys);

for($i=0; $i<count($keys); $i++){
    $key = $keys[$i];
    echo $foods[$key]."\n"; 
}


$values = array_values($foods);
// print_r($values);

for($i=0; $i<count($values); $i++){
    $value = $values[$i];
    echo $value."\n"; 
}




