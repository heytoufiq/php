<?php
$strvar = "Quick Brown brown Fox fox over the lazy dog";
$strReplace = str_replace('brown', 'Brown', $strvar);
echo $strReplace;
// original string won't be change 
echo PHP_EOL;
echo $strvar; 

// case insensitive search 
echo PHP_EOL;
$striReplace = str_ireplace('brown', 'red', $strvar, $count);
echo $striReplace;
echo PHP_EOL;
// How many string replaced 
echo "Totoal replaced: {$count}";
echo PHP_EOL;
// bunch of string replace by using str_ireplace & array  
$strrbyarray = str_ireplace(array('brown', 'fox'), array('red', 'cat'), $strvar);
echo $strrbyarray;