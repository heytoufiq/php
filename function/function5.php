<?php
/*
* How to pass unlimted argument inside function parameter. 
*/


function sum(int ...$numbers):int{ // Three dot means unlimited numbers of argument can be pass 
    $result = 0;
    for($i=0; $i<count($numbers); $i++){ // count function used for find out the how many argument will pass 
        //$result += $numbers[$i];
        // print_r("$result \n");
        //print_r("$numbers[$i] \n");
        $result = $result+$numbers[$i]; //
        // $i+=1;
        // $i = $i+1;
    }
    return $result;
}

echo sum(5,6,7,8,9,10,11);