<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "reg_employee";

    $conn = new mysqli($host, $username, $password, $db);
    if($conn->connect_error) {
        echo "Connection Failed" . $conn->connect_error;
        die();
    }
?>    