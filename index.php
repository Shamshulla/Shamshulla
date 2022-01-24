<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
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
         .error_msg {
             color: red;
         }
            </style>
            <!-- <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
            <link rel = "stylsheet" href="../css/log.css">
        </head>
        <body>
            <nav class="navbar">
                <div class="container">
                    <img src="image/image3.jfif" alt="" width="15%" height="80">
                </div>
            </nav>

        <?php
            $error_code = isset($_REQUEST['log_msg']) ? $_REQUEST['log_msg'] : "" ;
        ?>
        <p class = "para" ><h1 align="center"> Login  </h1></P>
        <form action = "log_action.php" method = "post" enctype = "multipart/form-data">
            <fieldset>
                <br><br>
                <div class="imgcontainer" align="center">
                    <img src="image/image1.png" alt="Image1" class="avatar" width="200px">
                    <img src="image/image3.jfif" alt="Image3" class="avatar" width="300px">
                    <img src="image/image2.png" alt="Image2" class="avatar" width="200px">
                </div>

                <div class="container" align="center">

                    <br><br>
                    <label for="mail"><b>Username</b></label>
                    <input type="text" placeholder="Enter User Name" name="username" required>
                    <br><br>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter your Password" name="password" required>
                    <br><br>
                    
                    <button type = "submit" name = "login" value = "Login">Login</button><br><br>
                
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <br>
                    <br>
                 </div>
                 
                      <div class="error_msg" align="center">  
                          <?php
                            if($error_code == '1') {
                                echo '<span id="log_error_msg">Incorrect username or password</span>';
                            }
                        ?> 
                      </div>
                <div class="container" style="background-color:#f1f1f1" align="center">
                    <button type="button" class="cancelbtn"> Cancel </button><br><br><br>
                    <span class="password"> Forgot <a href="#"> password? </a></span>
                </div>
                <br><br>
                 </fieldset>

        </form>
        <footer>
            <br>
            <p><b>&copy;Copyright PITS Solution</p></b>
        </footer>
    </body>
</html>    