<?php
/* 
* how to split a large function into a smaller function
*/

function doTaskA(){
    echo "Step A done \n";
}

function doTaskB(){
    echo "Step B done \n";
}

function doTaskC(){
    echo "Step C done \n";
}

function doThelargerTask(){
    doTaskA();
    doTaskB();
    doTaskC();
}

doThelargerTask();

// or you can call one of function 

doTaskA();
