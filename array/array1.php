<?php
/* 
Introduction of array 
What is array > collection of data called array 
*/

$students = array("Rahim", "karim", 123, "Jamal");

$students = ["Rahim", "karim", 123, "Jamal"];

// echo count($students);

$n = count($students); // How much data contains inside the array 

for($i=0; $i < $n; $i++){
    echo $students[$i]."\n";
}
echo "\n";
for($i=$n-1; $i >= 0; $i--){ // reverse process 
    echo $students[$i]."\n";
}