<?php
include 'dbconnect.php';

function getClientData()
{   
    $con = dbConnect(); // function defined in dbconnect.php
    $stmt = mysqli_stmt_init($con); // open the connection
    $query = "SELECT id, secret FROM oauth_clients";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $client_id, $client_secret);

        $results = [];
        while (mysqli_stmt_fetch($stmt)) {
            $results[] = [
                'client_id' => $client_id,
                'client_secret' => $client_secret,
            ];
        }
        mysqli_stmt_close($stmt); // close the statement
    }
    mysqli_close($con); //close the connection

    header('Content-Type: application/json');
    echo json_encode($results);
}

if(isset($_GET['action'])){
    getClientData();
}