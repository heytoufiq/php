<?php
$strvar = "Quick brown fox over the lazy dog";
$strOffset = strpos($strvar, "fox");
// If you use capital letter then you should use the stripos
$strOffset = stripos($strvar, "Fox");
// you need to check the offset if you use strpos
$strOffset = strpos($strvar, "Quick");
if($strOffset !==false){
    echo "\nWord was found\n";
}else{
echo "\nWord was not found\n";
}

// reverse search string 
$strOffset = strrpos($strvar, "fox");
// caseinsetive with reverse search string 
$strOffset = strripos($strvar, "fox");
