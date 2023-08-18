<?php
/* 
How to cut some value from an array and how to add new data inside the array
*/

$fruits = array('apple', 'banana', 'orrange', 'plum', 'dates', 'mango');

$newFruits = array('jackfruits', 'tamarind', 'pineapple', 'papaya'); // added new value inside the array after cutting/removing a value
$someFruits = array_splice($fruits, 1, -2, $newFruits); 


print_r($fruits);
print_r($someFruits);