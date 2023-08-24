<?php 
// How to explode a string using (explode)
$strvar = "Hello World!, How are you";
$strXplode = explode(",", $strvar);
print_r($strXplode);
echo PHP_EOL;

// How to join exploded string using (join & implode) 
$mainStr = join(" ", $strXplode);
echo $mainStr, "\n";

// How to convert a string to array 
$strSplit = str_split($strvar);
print_r($strSplit);

echo PHP_EOL;

$strTok = strtok($strvar, " ,");
while($strTok !== false){
    echo $strTok."\n";
    $strTok = strtok(" ,");
}

echo PHP_EOL;

$strPreg = preg_split("/ |,/", $strvar);
print_r($strPreg);