<?php
$i = 0;
while($i < 5){
    echo $i;
    echo PHP_EOL;
    $i++;
}

echo "=======\n";
// alternative process 
$j = 0;
while($j++ < 5){
    echo $j;
    echo PHP_EOL;
}

echo "=======\n";
// alternative process 
$j = 0;
while(++$j < 5){
    echo $j;
    echo PHP_EOL;
}