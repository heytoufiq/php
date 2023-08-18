<?php
/* 
How to merge and slice array using array_slice/array_splice and array_merge
*/

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array("a"=>20, "b"=>30, "c"=>40, "d"=>50, "e"=>60, "f"=>70, 12=>13, "g"=>80); 
 
// $newFruits1 = array_slice($fruits, 0, 3);
// $newFruits2 = array_slice($fruits, 3, null, true); 

// $newFruits = array_merge($newFruits1, $newFruits2);

// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);

// $newFruitsPlus = $newFruits1 + $newFruits2;

// print_r($newFruitsPlus);

$random1 = array_slice($random, 0, 2, true);
$random2 = array_slice($random, 4, null, true);
$random3 = array("j"=>83, "k"=>93);

 $randomData = array_splice($random, 2, 2, array("j"=>83, "k"=>93));

 $randomDataRightWay = $random1 + $random2 + $random3;

 print_r($randomData);

 print_r($random);

 print_r($randomDataRightWay);