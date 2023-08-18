<?php 
//Variable is like as a container. You can put different type of data. We can keep constant and variable in php. There has different type of variable. PHP is loosely type programming language. There is no way to keep space, dot, punctuation(- ; . ) in variable declaration. Only alphabet(a-z) or numeric/number(0-9) should use in variable declaration. But, we can’t  add a number before before a variable. We can add number after a variable ($myname1234)


// Data type 
$name = "Toufiq"; // Data type is string 
$age = 30; // data type is number or integer 
$float = 30.12; // data type is float 
$boolTure = true; // data type is boolean. It used for conditional testing. 
$boolFalse = false; // data type is boolean. It used for conditional testing. 
$myArray = array("Toufiq, 30, 30.4,"); // In a single variable stored multiple data 
//$object & null & Resource 

$my_name = 'Toufiq'; // 
$myName = 'Toufiq'; // camle case 
$MyNameIs = 'Toufiq'; // Title case 

$result = "age"; //End of the line of php must have to add semicolon (;)

echo $$result;

echo PHP_EOL; // End of the line (PHP_EOL)

echo 'Hello'." ".$name; // added space between Hello & name using double quote with concatenation

echo "\n"; // PHP new line 

echo "Hello Mr. {$name}"; // How to use a variable inside string {$name}

?>