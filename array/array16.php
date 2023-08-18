<?php
/* 
Some utility functions of array (walk, map, filter)
*/

$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);

// array walk function 
function square($n){
    printf("Square of %d is %d \n", $n, $n*$n);
}

// array map function 
function cube($n){
    return $n*$n*$n;
}

// array filter function
function even($n){
    return $n%2==0;
}

function odd($n){
    return $n%2==1;
}

$arrayFiltereven = array_filter($numbers, 'even'); // even is callback function
$arrayFilterOdd = array_filter($numbers, 'odd'); // odd is callback function

array_walk($numbers, 'square'); // square is callback function 

$newArray = array_map('cube', $numbers); // cube is callback function

print_r($numbers);
print_r($newArray);
print_r($arrayFiltereven);
print_r($arrayFilterOdd);

$persons = array('sujon','kabir','sabab','selim','roni','jamal','kamal','sayma');

function filterByS($name){
    return $name[0] == 's';
}

$newPersons = array_filter($persons, 'filterByS');

print_r($newPersons);
