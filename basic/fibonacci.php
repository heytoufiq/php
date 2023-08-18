<?php

$veryold = 0;
$old = 1;
$new =1; 

for($i=0; $i<10; $i++){
    echo $veryold." ";
    $old = $new;
    $new = $old+$veryold;
    $veryold = $old;
}
/* 
// initial value 
$veryold = 0;
$old = 1;
$new = 1;

// first loop 
$veryold = 1; // $veryold = $old (1)
$old = 1; // $old = $new (1)
$new = 1; // old+veryold (1+0)

// second loop 
$veryold = 1;
$old = 1;
$new = 2; // old+veryold (1+1)

// Third loop 
$veryold = 2; 
$old = 2;
$new = 3;

// Fourth loop 
$veryold = 3; 
$old = 3;
$new = 5; 
*/