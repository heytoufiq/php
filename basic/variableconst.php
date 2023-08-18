<?php

// PHP variable value is changeable. Constant value is not changeable

// How to change php variable value 

$task = 'read';
echo $task;

echo "\n";

$task = 'write';
echo $task;

echo "\n";

// How to use constant variable 

define('GREETINGS', 'Hello World'); 

echo constant('GREETINGS');

//alternative ways 
echo "\n"; 

$const = 'constant';

echo "This value is constant {$const('GREETINGS')}";