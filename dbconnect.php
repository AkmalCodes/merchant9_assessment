<?php

$servername = "127.0.0.1";
$server_username = "root";
$server_password = "laravel10";
$db_name = "student_api";

$con = new mysqli($servername,$server_username,$server_password,$db_name);
    if($con){
        echo ""; // insert connection succes message
    }else{
        die("Could not connect to database");
    }

    
