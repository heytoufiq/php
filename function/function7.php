<?php
/* 
* Recursion and recursive function
*/
function printN($i){
    if($i>=10){ // breaking condition. applied for condition to ignore infinite loop 
        return;
    }
    echo $i."\n";
    $i++;
    printN($i); // function called by himself  
}

printN(0);

echo PHP_EOL;

// Recursion and recursive function

function printNumber($counter, $end, $stepping=1){
    if($counter > $end){
        return;
    }
echo $counter."\n";
$counter+=$stepping;
printNumber($counter, $end, $stepping);
}

printNumber(21, 40, 4);
