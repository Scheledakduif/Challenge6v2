<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Milan');
define('DB_PASSWORD', 'no3e7?6H');
define('DB_NAME', 'db_car_5_v2');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>