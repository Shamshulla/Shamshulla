<?php
    error_reporting(E_ALL & ~E_NOTICE);
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
        <title> Admin Home</title>
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
            
            .admin_box {
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
        <link rel = "stylesheet" href="../css/admin_styele.css">
    
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <img src="../image/image3.jfif" alt="" width="15%" height="80">
            </div>
        </nav>

        <div class = "head">
            <div class = "left-head" > <h1> Admin Dashboard </h1> </div>
            <div class = "right-head" > <h3> Welcome <?php echo $username; ?></h3> </div>
        </div>

        <?php
        if($page == 'employee_list') {
            include('employee_list.php');
        } else if($page == 'attendence_list') {
            include('attendence_list.php');
        } else if($page == 'leave_calculation') {
            include('leave_calculation.php');
        } else if($page == 'add_employee') {
            include('employee_reg.php');
        } else if($page == 'edit') {
            include('edit_employee.php');
        } else {
        ?>
        <a href = "admin_home.php?page=employee_list" class="list"><div class = "admin_box"><li> Employee List </li></div></a><br>
        <a href = "admin_home.php?page=attendence_list" class="list"><div class = "admin_box"><li> Attendance List </li></div></a><br>
        <a href = "admin_home.php?page=leave_calculation" class="list"><div class = "admin_box"><li> Leave Calculation </li></div></a><br>
        <a href = "admin_home.php?page=logout" class="list"><div class = "admin_box"><li> Log Out </li></div></a><br>
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
            <p><b>&copy;Copyright PITS Solution</b></p>
        </footer>
    </body>
    </html>    