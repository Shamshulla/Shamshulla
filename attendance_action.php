<?php
    session_start();
    require_once("../config/e_connection.php") ;
    error_reporting(E_ALL & ~E_NOTICE);

    if($_POST['submit'] == "submit") {
        
        function validate_data($data)
        {  
           global $conn;
           $data = trim($data);
           $data = stripslashes($data);
           $data = strip_tags($data);
           $data = htmlspecialchars($data);
           $data = mysqli_real_escape_string($conn,$data);
           return $data;
        } 

        $first_name = validate_data($_POST['firstName']);
        $empid      = validate_data($_POST['emp_id']);
        $empname    = validate_data($_POST['emp_name']);
        $date       = validate_data($_POST['date']);
        $login      = validate_data($_POST['login']);
        $logout     = validate_data($_POST['logout']);
        $status     = validate_data($_POST['status']);
        //$working    = validate_data($_POST['working']);

        $sql ="SELECT FirstName FROM employee_details WHERE user_id=$empid";
        $res = $conn->query($sql);
        while($row=$res->fetch_assoc()){
            $first_name = $row['FirstName'];
        }

        $sql = "INSERT INTO attendance_emp
                (Employee_Name, Date, Login_Time, Logout_Time, Attendance_status)
                VALUES 
                ('$first_name', '$date', '$login', '$logout', '$status')";

        $result = $conn->query($sql);
        if($result == TRUE) {
        echo "Data Attendance inserted successfully ";
        }
        else {
            echo "error while inserting data".$conn->error;
        }       
    }
$conn->close();

?>