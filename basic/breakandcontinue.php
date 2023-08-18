<?php
// How to use break inside loop 
for($i=0; $i < 10; $i++){
    echo $i;
    echo PHP_EOL;
    if($i==2){
        break;
    }
}
echo "==============\n";
// Loop & logic with break
for($i=20; $i < 50; $i++){
    if($i % 13==0){
        echo $i;
        echo PHP_EOL;
        break;
    }
}
echo "==============\n";
// Loop & logic with continue
for($i=20; $i < 50; $i++){
    if($i % 13==0){
        echo $i;
        echo PHP_EOL;
        continue;
    }
}
echo "==============\n";
// Loop & logic with continue
for($i=20; $i < 30; $i++){
        if($i<27){
            continue;
        }
        echo $i;
        echo PHP_EOL;
}

// Loop & logic with goto
echo "==============\n";
for($i=20; $i<30; $i++){
    if($i<27){
        goto a;
    }
    echo $i;
    echo PHP_EOL;

a:
}