<?php include("partials/menu.php"); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br/> <br/>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter your Name">
                    </td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" placeholder="Enter your Username">
                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter your Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondry">
                    </td>
                </tr>
                

            </table>

        </form>
    </div>
</div>

<?php include("partials/footer.php");?>

<?php 
    //process the value from Form and save it in database
    //check whether the submit button is clicked or not
    if(isset($_POST['submit']))
    {
        //Button Cliked
       //echo "Button Clicked";

       //1.Get the Data from form
       $full_name = $_POST['full_name'];
       $username = $_POST['username'];
       $password = md5($_POST['password']); //password encreption with md5

       //2.SQl Query to save the data into database

       $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
       ";
           
        //3.Execute Query and Save Data in Database
         $res = mysqli_query($conn,$sql) or die (mysqli_error());

       //4.Check wether the data (qyery is executed )is inserted or not and display appropiate message
       if($res==TRUE)
       {
           //data Inserted
          //echo "Data Inserted";
          //Create a session Variable to diisplay Message
          $_SESSION['add'] = "Admin Added Successfully";
          //Redirect page to Manage Admin
          header("location:".SITEURL.'admin/manage-admin.php');
       }
       else
       {
           //Failed To Inserted Data
          // echo "Faile To Data";

          //Create a session Variable to diisplay Message
          $_SESSION['add'] = "Failed to Add Admin";
          //Redirect page to Add Admin
          header("location:".SITEURL.'admin/add-admin.php');
       }
    }
    
?>