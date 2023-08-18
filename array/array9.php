<?php 

/* 
* Discuss with empty value 
*/

$name = '';

if(isset($name)){
    echo"Name is set";
}else{
    echo"not set";
}

echo "\n";

if(empty($name)){
    echo"Name is empty";
}else{
    echo"not empty";
}

echo "\n";

if(isset($name) && (is_numeric($name) || $name!='')){
    echo "Name is set and it's not empty ";
}else{
    echo"Name is not set or it's empty";
}