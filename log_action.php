<?php
    session_start();
    require_once("config/e_connection.php");
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

    // $username  = validate_data($_POST['username']);
    // $password   = md5($_POST['password']);

    // if($username=='')  { 
    //     echo"<script>alert('Please enter the Username')</script>";  
    //     exit(); 
    // } 

    // if($password=='')  {
    //     echo"<script>alert('Please enter the password')</script>";  
    //     exit();  
    // } 


    if(isset($_POST['login']) && $_POST['login'] == 'Login') {

        $username  = validate_data($_POST['username']);
        $password   = md5($_POST['password']);

        $sql = "SELECT * FROM login_emp WHERE username = '$username' AND password = '$password'";
        $res = $conn->query($sql);

        if($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            $_SESSION['user_id']   = $row['login_id'];
            $_SESSION['usertype']  = $row['user_type'];
            $_SESSION['username']  = $row['username'];

            if($row['user_type'] == 'Admin') {
                header("Location: admin/admin_home.php");
            } else {
                header("Location: employee/employee_home.php");
            }

        } else {
            header('Location: index.php?log_msg=1');
            }
    }


?>