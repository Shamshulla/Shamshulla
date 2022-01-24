<?php
    error_reporting(E_ALL);
    require_once("../config/e_connection.php");
    //include_once("header.php");
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
    <link rel="stylesheet" href="css/">
    <title>Leave Calcualtion</title>
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
            
            .container {
                font-size:20px;
            }
        </style>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <img src="../image/image3.jfif" alt="" width="15%" height="80">
        </div>
    </nav>

    <div class="container">
        <button><a href="employee_home.php?page=employee_list"> Back </a></button>
        <h2 align="center"><b> Attendance Information </b></h2>
        
        <form action="../action/leave_action.php" method="post" enctype = "multipart/form-data" >
            <?php
                $sql = "SELECT user_id,Employee_ID FROM employee_details";
                $result = $conn->query($sql);
                echo "<pre>";
                $sql ="SELECT Date FROM attendance_emp";?>
                <table class="table table-hover">
                    <tr class="success">
                        <th><b>Employee ID</b></th>
                        <td>
                            <select name="emp_id" class="form-control">
                                <option><b>--select--</b></option>
                                <?php 
                                    while($row = $result->fetch_assoc()){
                                ?>
                                 <option value="<?php echo $row['user_id'] ?>"><?php echo $row['Employee_ID'] ?></option>
                                 <?php  } ?>
                            </select>
                        </td>
                    </tr>
                    <!-- <tr class="success">
                        <th><b>Employee NAME</b></th>
                        <td>
                            <select name="emp_name" class="form-control">
                                <option><b>--select--</b></option>
                                <?php 
                                      while($row = $result->fetch_assoc()){
                                ?>
                                 <option value="<?php echo $row['user_id']; ?>"><?php echo $row['FirstName']; ?></option>
                                    <?php  } ?>
                            </select>
                        </td>
                    </tr> -->
                    
                    <tr class="warning">
                        <th><b>From Date</b></th>
                        <!-- <?php 
                            $sql ="SELECT Date FROM attendance_emp";
                        ?> -->
                        <td><select name="from_date" class="form-control">
                                <option><b>--select--</b></option>
                                <?php 
                                    while($row = $result->fetch_assoc()){
                                ?>
                                 <option value="<?php echo $row['user_id'] ?>"><?php echo $row['Date'] ?></option>
                                 <?php  } ?>
                            </select></td>
                    </tr>

                    <tr class="warning">
                        <th><b>To Date</b></th>
                        <td><select name="to_date" class="form-control">
                                <option><b>--select--</b></option>
                                <?php 
                                    while($row = $result->fetch_assoc()){
                                ?>
                                 <option value="<?php echo $row['user_id'] ?>"><?php echo $row['Date'] ?></option>
                                 <?php  } ?>
                            </select></td>
                    </tr>
                    
                    <tr class="warning">
                        <th><b>Total Hours worked</b></th>
                        <td>
                            <?php
                                $sql = "SELECT Login_Time,Logout_Time FROM attendance_emp";
                                $result = $conn->query($sql);
                                $total_duration = 0;
                                foreach ($result as $row)
                                {
                                    $total_duration += strtotime($row['Logout_Time']) - strtotime($row['Login_Time']);
                                }
                                echo $total_duration/(60*60); echo 'hrs';
                            ?>



                        </td>
                    </tr>

                    <tr class="warning">
                        <th><b>Status of Working</b></th>
                        <td>
                            <?php
                                if($total_duration >= 7) {
                                    echo 'Full day';
                                } else if ($total_duration >= 4 && $total_duration < 7) {
                                    echo 'Half Day';
                                } else {
                                    echo 'Leave';
                                }
                            ?>
                        </td>
                    </tr> 

                    <!-- <tr  class="warning">
                        <th><b>Working Status</b></th>
                        <td>
                            <label for="status">Choose your option:</label>
                            <select name="working" id="working">
                                <option value="full_day">Full Day</option>
                                <option value="half_day">Half Day</option>
                                <option value="leave">Leave</option>
                            </select>
                        </td>
                    </tr> -->

                    <tr>
                       <td align="center"><input  type="submit" name="submit" value="submit" class="btn btn-success" id="btn"></td>
                    </tr>
                </table>
            </form> 
        </div>
        
        <footer>
            <br>
            <p><b>&copy;Copyright PITS Solution</p></b>
        </footer>
    </body>
</html>