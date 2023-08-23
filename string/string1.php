<?php
$name = "Rahim";

$strVar = "My Name is {$name} \n";

echo $strVar;
//heredoc is a one of the process to write string 
// $heredoc = <<<EOD
// Date one 
// Date two 
// My Name is\t{$name}
// EOD;

// echo $heredoc;

//nowdoc is a one of the process to write string 
$heredoc = <<<'EOD'
Date one 
Date two 
'My Name is\t{$name}'
EOD;

echo $heredoc;


