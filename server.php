<?php
    $servername = "localhost";
    $username = "root";
    $password = "123456789";
    $dbname = "stats_ma_teams_db";

    //Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check Connection
    if(!$conn){
        die("Connection error" . mysqli_connect_error());
    }
    else{
        // echo "Connected success";
    }
?>