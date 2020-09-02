<?php

    // declear db
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "progress";

    // create CONNECTION
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if(!$connection){
        die("connection filed" .mysqli_connect_err());
    }
    else{
        // console_log("connected");
    }




?>