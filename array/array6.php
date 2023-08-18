<?php
/* 
Conversion from associative array to string - serialize, json
*/

$student = [
    'fname'=>'Jamal',
    'lname'=>'Ahmed',
    'age'=> 15,
    'class'=>8,
    'section'=>'B'
];

print_r($student);

echo $student['fname']." ".$student['lname']."\n";

printf("%s %s \n", $student['fname'], $student['lname']);


$serialized = serialize($student); // associative array to string 

echo $serialized;
echo "\n";

$newstudent = unserialize($serialized);

print_r($newstudent);

$jsondata = json_encode($newstudent); // associative array to json data encode 

echo $jsondata;

echo "\n";

$student2 = json_decode($jsondata, true); // json data to array 

print_r($student2);