<?php
// We can check our data output different ways for the different purpose 

// Like 
/* 
Integer = int (123)
Double/float = (12.56)
Boolean = (true/false)
Null = (Null)
String = (“Hello World”)
Array(Different types of data can be array)
$array = array(“Hello”, 123, 45.34, true)
object = 
resource 
 */

 // Here is some practice for output of result. 

 $firstName = "Toufiqur"; // variable name camle case 
 $lastName = "Rahman";

 echo "My name is $firstName "."$lastName \n";

 echo "My name is {$firstName} {$lastName} \n";

 printf("My name is %s %s", $firstName, $lastName);