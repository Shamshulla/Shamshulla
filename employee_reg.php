<?php
  require_once("../config/e_connection.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../ereg.css">
    <title>Employee Reegistration Form</title>
</head>
 <body style="background-image:url('https://images.unsplash.com/photo-1475965894430-b05c9d13568a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80')">
    <div class="container-fluid">
        <button><a href="admin_home.php?page=employee_list"> Back </a></button>
        <p class = "para"> <h2 align = "center"><b> Employee Registration Form </b> </h2> </p>
        <h2 align = "center"><a class="active" href="#headding">Employee Personal Information</a></h2>
      
     <form action="../action/e_action.php" method="post" id="form" >
         <div class="container">
             <div class="form-group col-12 col-sm-6 col-xs-6">
                 <lable for="first_name"><b>First Name</b></label><br>
                 <input type="text" name="firstName" placeholder="Enter First Name" class="form-control" required><br>
                </div>
                
                <div class="form-group col-12 col-sm-6 col-xs-6">
                    <lable for="second_name"><b>Last Name</b></label><br>
                    <input type="text" name="lastName" placeholder="Enter Last Name" class="form-control" required><br>
                </div>
                
                <div class="form-group col-12 col-sm-6 col-xs-6">
                    <label for="email">Email Address(Personal):</label>
                    <input type="email" name="mail" placeholder="Enter like example@example.com" class="form-control" required><br>
                </div>
                    
                <div class="form-group col-12 col-sm-6 col-xs-6">
                    <label for="birthday"><b> D O B </b></label><br>
                    <input type="date" name="dob"  class="form-control" required><br>
                </div>
                
                <div class="form-group col-12 col-sm-6 col-xs-6">
                    <lable for="number"><b>Mobile Number</b></label><br>
                    <input type="number" name="pnumber" placeholder="Enter Phone Number" class="form-control" required><br>
                </div>
                    
                <div class="form-group col-12 col-sm-6 col-xs-6">
                    <lable for="civil"><b>Civil Status</b></label><br>
                    <input type="text" name="civil_status" placeholder="Enter Civil Status" class="form-control" required><br>
                </div>
                
                <div class="form-group col-12 col-sm-6 col-xs-6">
                    <lable for="home_address"><b>Home Address</b></label><br>
                    <input type="text" name="home_add" placeholder="Enter your Home Address" class="form-control" required><br>
                </div>
                
                <!-- <div class="form-group col-12 col-sm-6 col-xs-6" id="imagePreview">
                    <lable for="Profile_Image"><b>Profile Image</b></label><br>
                    <input type="file" name="pimage"  class="form-control" required><br>
                    <input type="submit" name="submit" value="Upload">
                    <img src=" " alt="Profile Image" class="image-preview__image">
                    <span class="image-preview__image__default-text"> Profile Image Preview </span>
                </div> -->
                
                <div class="form-group col-12 col-sm-6 col-xs-6" align = "center">
                    <lable for="gender"><b>Gender</b></label><br>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Other">Other <br>
                </div>
            </div>

        <!--EDUCATIONAL INFORMATION-->

        <h2 align = "center"><a class="active" href="#headding">Employee Company Information</a></h2>

        <h2 align = "center"><a class="active" href="#headding">Designation</a></h2>
        
        <div class="container">
            <div class="form-group col-12 col-sm-6 col-xs-6">
                <lable for="company_name"><b>Company Name</b></label><br>
                <input type="text" name="c_name" placeholder="Enter Company Name" class="form-control" required><br>
            </div>
            
            <div class="form-group col-12 col-sm-6 col-xs-6">
                <lable for="department"><b>Department Name</b></label><br>
                <input type="text" name="department" placeholder="Enter Department Name" class="form-control" required><br>
            </div>

            <div class="form-group col-12 col-sm-6 col-xs-6">
                <lable for="title-position"><b>Job Title / Position</b></label><br>
                <input type="text" name="position" placeholder="Enter Job Title / Position" class="form-control" required><br>
            </div>

            <div class="form-group col-12 col-sm-6 col-xs-6">
                <lable for="e-id"><b>Employee ID</b></label><br>
                <input type="text" name="eid" placeholder="Enter Employee ID" class="form-control" required><br>
            </div>

            <div class="form-group col-12 col-sm-6 col-xs-6">
                <label for="c-email">Email Address(Company):</label>
                <input type="email" name="cmail" placeholder="Enter like example@example.com" class="form-control" required><br>
            </div>
        
            <div class="form-group col-12 col-sm-6 col-xs-6">
                <lable for="e-type"><b>Employement Type</b></label><br>
                <input type="text" name="e_type" placeholder="Enter Employement Type" class="form-control" required><br>
            </div>
        </div>

    <!--LOGIN INFORMATION--> 

    <h2 align="center"><a class="active" align = "center" href="#headding">Login Information</a></h2>
    
    <div class = "container">
        <lable for="user_name"><b>User Name</b></label><br>
        <input type="text" name="username" placeholder="Enter User Name" class="form-control" required><br>
        
        <lable for="password"><b>Password</b></label><br>
        <input type="password" name="password" placeholder="Enter Password" class="form-control" required><br>
                       
        <lable for="user_type"><b>User Type</b></label><br>
        <input type="text" name="usertype" placeholder="Enter User Type" class="form-control" required><br>
        
        <div style="text-align:center">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" id="btn">
    </div>
</form>

<div align="center" class="footer">
    <p><b>Education@sam</b></p>
    <p><i>Pentagon Space Mastering the Future</i></p>
</div>
</body>
</html>