<?php
    require_once("../config/e_connection.php");
    $user_id = $_REQUEST['user_id'];

    $sql = "SELECT * FROM employee_deatils as emp INNER JOIN login_emp as log
            ON emp.login_id = log.login_id WHERE log.login_id = '$user_id'";
    
    $res = $conn->query($sql);

    if($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        echo "<pre>";
        print_r($row);
    }
?>