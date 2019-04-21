<?php

  
    $servername = "localhost";
    $dbname = "countries";
    $username = "root";
    $passuser = "";

    $connect = new mysqli($servername, $username, $passuser, $dbname);

    if($connect->connect_error){
        die("Connection faild: ". $connect->connect_error);
    }

    return $connect;