<?php

function dbConnect(){
    $servername = "127.0.0.1";
    $server_username = "root";
    $server_password = "laravel10";
    $db_name = "teacher_portal";
    
    $con = new mysqli($servername,$server_username,$server_password,$db_name);
        if(!$con){
            die("Could not connect to database");
        }
    return $con;
}


    
