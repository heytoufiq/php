<?php

/*
Array clone process or shallow copy or deep copy 
*/

$person = array('fname'=>'Hello', 'lname'=>'World');
$newperson = $person; // call by value / deep copy 
//$newperson = &$person; // copy by reference / shallow copy 
$newperson['lname']='Pluto';
 
print_r($person);
print_r($newperson);

function printData($person){
    $person['fname'] .= ' changed';
    print_r($person);
}

printData($person);
print_r($person);