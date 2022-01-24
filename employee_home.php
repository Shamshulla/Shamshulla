<?php
    error_reporting(E_ALL & ~E_NOTICE);
    //include('header.php');
    require_once("../config/e_connection.php"); 
    session_start();
    $username = $_SESSION['username'];
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';

    if($page == 'logout') {
        session_destroy();
        header("Location:../index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Employee Home </title>
        <link rel = "stylesheet" href="../css/ind_css.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
          <style>
          footer {
              text-align: center;
              background-color:#a9a9a9;
              color: white;
              position: fixed;
              left:0;
              bottom: 0;
              width: 100%;
              color:black;
            }
            
            .navbar {
                background-color:#a9a9a9;
            }
            
            .navbar {
                position: relative;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                padding-top: .5rem;
                padding-bottom: .5rem;
            }
            
            .emp_box {
                font-size:20px;
                color:black;
                font-size:30px;
                list-style-type: square;
                margin:20px; 
            }
            
            .left-head {
                text-align:center;
                font-family: monospace;
                color:#000080;
            }
            
            .right-head {
                text-align:center;
                font-family: monospace;
                color:#000080;
            }
        </style>
        
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <img src="../image/image3.jfif" alt="" width="15%" height="80">
            </div>
        </nav>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    <a class="btn btn-success" href="emp_attendance.php"> Add Employee Attendance </a>
                    
                    <a class="btn btn-info pull-right" href="../index.php"> Home </a>
                </h2>
            </div>
        </div>
        
        <div class = "head">
            <div class = "left-head" > <h1> Employee Dashboard </h1> </div>
            <div class = "right-head" > <h3> Welcome <?php echo $username; ?></h3> </div>
        </div>
        
        <?php
        if($page == 'employee_list') {
            include('employee_list.php');
        } else if($page == 'emp_attendance') {
            include('emp_attendance.php');
        } else if($page == 'leave_calculation') {
            include('leave_calculation.php');
        } else if($page == 'add_employee') {
            include('employee_reg.php');
        } else if($page == 'edit') {
            include('edit_employee_self.php');
        } else {
        ?>
        <a href = "employee_home.php?page=employee_list"><div class = "emp_box"><li> Employee List </li></div></a><br>
        <a href = "employee_home.php?page=emp_attendance"><div class = "emp_box"><li> Attendence </li></div></a><br>
        <a href = "employee_home.php?page=leave_calculation"><div class = "emp_box"><li> Leave Calculation </li></div></a><br>
        <a href = "employee_home.php?page=logout"><div class = "emp_box"><li> Log Out </li></div></a><br>
        <?php
        }
        ?>
        
        <script>
        function deleteCheck() {
            Let res = confirm(" Do you sure you want to DELETE this Record? ");
            
            if(res == true) {
                window.location.href="admin_home.php?page=employee_list&user_id="+user_id;
            }
        }
        </script>
        
        <footer>
            <p><b>&copy;Copyright Pits Solution</p></b>
        </footer>
    </body>
</html>    