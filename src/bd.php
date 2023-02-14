<?php

$db_host='localhost'; 
$db_user='root'; 
$db_pass=''; 
$db_name='harvest'; 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name); 
$mysqli->set_charset("utf8mb4"); 
$clearHarvest =  mysqli_query($mysqli, "TRUNCATE TABLE Trees");