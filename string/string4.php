<?php
$strvar = "Hello World";
$lenth = strlen($strvar) -1;
for($i = $lenth; $i>=0; $i--){
    echo $strvar[$i];
}

echo PHP_EOL;

$lenthstr = strlen($strvar);
for($i = 1; $i<$lenthstr; $i++){
    echo $strvar[$i * -1];
}

echo PHP_EOL;
echo strrev($strvar);