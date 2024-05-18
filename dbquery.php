<?php 
    include 'dbconnect.php';
    $stmt = mysqli_stmt_init($con);

    $query = "SELECT client_id, client_secret FROM "