<?php include('../config/constant.php'); ?>

<html>
    <head>
        <title>Login - Food Order System</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>

            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

              /*  if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-messahe']);
                }*/
            ?>
            <br><br>
            <!--Logi From Strat -->
            <form action="" method="POST" class="text-center">
                Username:<br>
                <input type="text" name="username" placeholder="Enter Username"><br><br>

               password:<br>
               <input type="password" name="password" placeholder="Enter Password"><br><br>
                <input type="Submit" name="submit" value="Login" class="btn-primary">
                <br><br>
            </form>
            <!--Logi From Strat -->
            <p class="text-center">Created By <a href="#">Vishal Kumar</a></p>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        //process for login
        //1.gET the Data from Login From
          $username = $_POST['username'];
          $password = md5($_POST['password']);


          //2. Sql to check wether the user with username and password exist or not
          $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password ='$password'";

          //3.Execute the Qurey
          $res = mysqli_query($conn, $sql);

          //.4 count rows to check wether the usee exist or not 
          $count = mysqli_num_rows($res);

          if($count==1)
          {
              //user Available and Login Success
              $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
              
             // $_SESSION['user'] = $username; // To check wether the user is logged in or not and logout will unset it
              //Redirect to home page /dashboad
              header('location:'.SITEURL.'admin/');
          }
          else
          {
              //user not Available and Lohin Fail
              $_SESSION['login'] = "<div class='error' text-center >username or password did not match</div>";
              //Redirect to home
              header('location:'.SITEURL.'admin/login.php');
          }
    }

?>