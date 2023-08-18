<?php
/* 
* How to remove a data from associative array.
*/

$person = array('fname'=>'Hello', 'lname'=>'World');

print_r($person);

unset($person['lname']); // unset is a function which remove a data from associative array. 

print_r($person);
