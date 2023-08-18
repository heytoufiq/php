<?php
$n =12;
if($n % 2==0){
    echo "Even Number";
}else{
    echo "Odd Number";
}

echo PHP_EOL;

// Alternative if else syntax process 
if($n % 2==0):
    echo "Even Number";
    echo PHP_EOL;
else:
    echo "Odd Number";
    echo PHP_EOL;
endif;

// ALternative switch case syntax process 
switch($n % 2 ==0):
    case 0:
    echo "Even Number";
    break;
    default:
    echo "Odd Number";
    break;
endswitch;

