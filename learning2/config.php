<?php

  
    $servername = "localhost";
    $dbname = "countries";
    $username = "root";
    $passuser = "";

    $connect = new mysqli($servername, $username, $passuser, $dbname);

    mysqli_set_charset($connect,"utf8");

    if($connect->connect_error){
        die("Connection faild: ". $connect->connect_error);
    }