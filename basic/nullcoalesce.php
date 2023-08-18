<?php

$default_lat = 23.9;
$default_long = 29.4;

$user_lat;
$user_long;

// $user_lat=24.5;
// $user_long=25.5;

$lat = isset($user_lat) ? $user_lat : $default_lat;
$long = isset($user_long) ? $user_long : $default_long;

echo "Default lat is ".$lat." "."Default long is ".$long;

echo PHP_EOL;
if(isset($user_lat) && ($user_long)){
    echo $user_lat." ".$user_long;
}else{
    echo "Default lat is {$default_lat}";
}
echo PHP_EOL;
// nullcoalesce process 

$lat = $user_lat ?? $default_lat;
$long = $user_long ?? $default_long;

echo $lat ." ". $long;