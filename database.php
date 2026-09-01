<?php

function db_connection(){
    $hostname = 'localhost';
    $username = 'groupcom_360_engineering';
    $password = '360password#';
    $database = 'groupcom_360_engineering';

    $connection = mysqli_connect($hostname, $username, $password, $database);
    #$Database_error = mysqli_connect_error($Connection);
    
    if(!$connection){
        die('Database Error: '.mysqli_connect_error($connection));
    }
    
    return $connection;
}
   




?>