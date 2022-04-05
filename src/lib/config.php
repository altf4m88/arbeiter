<?php
    $host = "localhost";
    $user = "root"; 
    $pass = "";
    $db = "employees_data";

    $con = mysqli_connect($host, $user, $pass, $db);

    if (mysqli_connect_errno()){
        echo "Failed Connection:".mysqli_connect_error();
    }

?>