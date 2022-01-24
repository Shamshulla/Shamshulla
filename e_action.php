<?php
    session_start();
    require_once("../config/e_connection.php");
    error_reporting(E_ALL & ~E_NOTICE);
    
     
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
       
        if(isset($_POST['submit']) && $_POST['submit'] == 'Submit') {
        $first_name         = validate_data($_POST['firstName']);
        $last_name          = validate_data($_POST['lastName']);
        $mail               = validate_data($_POST['mail']);
        $dob                = validate_data($_POST['dob']);
        $phonenumber        = validate_data($_POST['pnumber']);
        $civilstat          = validate_data($_POST['civil_status']);
        $h_address          = validate_data($_POST['home_add']);
        $gender             = validate_data($_POST['gender']);
        $cname              = validate_data($_POST['c_name']);
        $dep_name           = validate_data($_POST['department']);
        $job_position       = validate_data($_POST['position']);
        $e_id               = validate_data($_POST['eid']);
        $cmail              = validate_data($_POST['cmail']);
        $emp_type           = validate_data($_POST['e_type']);
        $user_name          = validate_data($_POST['username']);
        $password           = md5($_POST['password']);
        $user_type          = validate_data($_POST['usertype']);


         //login info
         $sql = "INSERT INTO login_emp
         (username, password, last_login, user_type)
         VALUES 
         ('$user_name', '$password', NOW(), '$user_type')";   
         
         $result = $conn->query($sql);
 
         $last_id = $conn->insert_id;

         //personal information

        $sql = "INSERT INTO employee_details
        (Login_id, FirstName, LastName, Personal_Mail, DOB, Phone_Number, Civil_Status, Home_Address, Gender, Company_Name, Department_Name, Job_TitlePosition, Employee_ID, Company_Mail, Employee_Type, reg_date)
        VALUES 
        ('$last_id', '$first_name', '$last_name', '$mail', '$dob', '$phonenumber', '$civilstat', '$h_address', '$gender', '$cname', '$dep_name', '$job_position', '$e_id', '$cmail', '$emp_type', NOW())";

         $result = $conn->query($sql);
         if($result == TRUE){
             echo "Data inserted to employee_details table successfully";
            }
            else {
                echo "error while inserting data".$conn->error;
            }
    }
?>    