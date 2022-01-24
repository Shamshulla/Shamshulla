<?php
    session_start();
    require_once("../config/e_connection.php");
    $user_id = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : '';
    if($user_id) {

      $sql1 = "DELETE FROM login_emp WHERE Login_id = '$user_id'";
      $sql2 = "DELETE FROM user_std WHERE Login_id = '$user_id'";
      $res = $conn->query($sql1);
      $res = $conn->query($sql2);

      header("Location: admin/admin_home.php?page=employee_list");
    }

    
    $sql = "SELECT  * FROM employee_details";
    $res = $conn->query($sql);
  
    // $sql = "SELECT 'emp.FirstName', 'emp.Employee_ID', 'emp.Company_Mail', 'emp.Department_Name', 'emp.Job_TitlePosition', 'log.username', 'log.user_type'  FROM employee_details as emp INNER JOIN login_emp as log
    //         WHERE 'log.user_type' = 'Employee'";
    // $res = $conn->query($sql);

    ?>


    <!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "../css/index.css"> 
    </head>
    <body>

     <div><a href="admin_home.php"> Home </a> | <a href="admin_home.php?page=add_employee"> Add New User</a></div>
          <div>
              <table border='3' cellpadding='10' cellspacing='2' align='center'>
              <tr> 
                  <th>ID</th>
                  <th>Name</th>
                  <th>E_ID</th>
                  <th>Company Email</th>
                  <th>Department Name</th>
                  <th>Job_Title / Position</th>
                  <th>View More</th>
                  <th>Edit</th>
                  <th>Delete</th>
               </tr>
<?php
               if (!empty($res) && $res->num_rows > 0) {
               while ($row = $res->fetch_assoc()) {
        

        ?>
       
              <tr>
                <td><?php echo $row['user_id'] ?></td>
                <td><?php echo $row['FirstName'] ?></td>
                <td><?php echo $row['Employee_ID'] ?></td>
                <td><?php echo $row['Company_Mail'] ?></td>
                <td><?php echo $row['Department_Name'] ?></td> 
                <td><?php echo $row['Job_TitlePosition'] ?></td>
                <td><a href = "employee_home.php?page=profile&user_id=<?php echo $row['Login_id']?>"> View more </a></td>
                <td><a href = "employee_home.php?page=edit_employee_self&user_id<?php echo $row['Login_id']?>"> Edit </a></td>
                
                    <?php $user_id = $row['Login_id'] ?>
                <td><button onclick = "deleteCheck('<?php echo $user_id; ?>');"> DELETE </button></td>
              </tr>
            <?php
                        }
                    }
                ?>
            </table>
        </div>
    </body>
</html>