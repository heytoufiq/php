<?php
/*
* variable scope 
*/

// $name = "Toufiq";

// function doSomething(){
//     // global $name; // global variable declared for global scope 
//     // echo $name;
//     echo $GLOBALS['name']; // super global declared for global scope
    
// }

// doSomething();

// function doSomething(){
//     $name = "Toufiq"; // local scope 
//     echo $name;

// }

// doSomething();
//echo $name; // it will not work for local scope 

function doSomething(){
    static $i; // static scope 
   $i = $i ?? 0;
   $i++;
   echo $i;
   echo "\n";

}

function doExtra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doSomething();
doExtra();



