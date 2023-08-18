<?php
/* 
Array manipulation
Array is mutable 
array_shift
array_unshift
array_pop
array_push
*/

$students = array("Rahim", "Karim", 123, "Jamal");
$n = count($students);
$students[2] = "Toufiq";
for($i=0; $i < $n; $i++){
    echo $students[$i]."\n";
}

echo PHP_EOL;

$student = array_pop($students);
$student = array_shift($students);


$students[]= "John Doe";
array_push($students, "Rihan");
array_unshift($students, "Jilal");
$n = count($students);

for($i=0; $i < $n; $i++){
    echo $students[$i]."\n";
}