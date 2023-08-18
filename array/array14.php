<?php
/* 
Indexed and associative array search
*/

$fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'orrange', 'p'=>'pulm', 'd'=>'dates');
$numbers= array(1,11,2,'56',3,4,22,77,5);

if(in_array(56, $numbers)){ // loosely search 
    echo "56 is found"."\n";
}

$offset = array_search(2, $numbers); // find out the array offset
echo $offset."\n"; 

if(key_exists('b', $fruits)){ // key exists or not 
    echo "key b is exists";
} 