<?php 
/* decimal
1 to 10 decimal number and the decimal number base is 10. It will repeat inside the 1 to 10  */

/* Binary
0 and 1 is binary number and the base is 2   */

/* Octal Number 
0 to 7 (It will repeat inside the 1 to 7) */

/* Hexadecimal number 
0 to 9 and ABCDEF */

$n = 12; // binary number
$o = 012; // Octal Number 
$h = 0x2B; // Hexadecimal number 

printf ("The decimal number is %d and %d and %d", $n, $o, $h);

echo PHP_EOL;

printf("The binary equivalent of %d is %b \n", 1212, 1212);

printf("The hexadecimal equivalent of %d is %x \n", 1212, 1212);

printf("The hexadecimal equivalent of %d is %X \n", 1212, 1212); // If you want to show captial letter of result hexadecimal number (4BC is output)

printf("The octal equivalent of %d is %o \n", 27, 27);

printf("The octal equivalent of %d is %o \n", 65536, 65536);

printf("Octal %o = %d", 020000, 0200000);