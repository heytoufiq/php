<?php

/* 
* Array extract without changing main array using array slice function 
*/

$fruits = array('apple', 'banana', 'orrange', 'papaya');

$random = array('a'=>'12', 'b'=>'45', 'c'=>'33', 'd'=>'40', 'e'=>'50', 12=>90, 'f'=>'60', 'g'=>87);

// $someFruits = array_slice($fruits, 2);
// $someFruits = array_slice($fruits, -3, 3);
$someFruits = array_slice($fruits, -3, 3, true);
// $randomData = array_slice($random, 3, null, true);
$randomData = array_slice($random, -4, 3, true);
 
print_r($someFruits);
 
print_r($randomData);
 


