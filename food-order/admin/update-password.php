<?php include('partials/menu.php');?>

<div class = "main-content">
    <div class = "wrapper">
        <h1>Change Password</h1>
        <br><br>

        <?php 
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
            }
        
        
        ?>

        <form action="" method="POST">

            <table class = "tbl-30">
                <tr>
                    <td>Current Password</td>
                    <td>
                        <input type="password" name="Current_Password" placeholder="Currrent Password">
                    </td>
                </tr>

                <tr>
                    <td>New Password</td>
                    <td>
                        <input type="password" name="new_Password" placeholder="New Password">
                    </td>
                </tr>

                <tr>
                    <td>Confirm Password</td>
                    <td>
                        <input type="password" name="confirm_Password" placeholder="Confirm Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="submit" name="submit" value="change password" class="btn-secondry">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php
    
    //check wether the submit Button is clicked on not 
    if(isset($_POST['submit']))
    {
        //echo "clicked";
        // 1. Get the data from

        $id=$_POST['id'];
        $current_password = md5($_POST['current_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);

        //2.check wether the user with current id and current password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password = '$current_password'";

        // Execute the query
        $res = mysqli_query($conn,$sql);

        if($res==true)
        {
            //check wether data is available or not 
            $count=mysqli_num_rows($res);
            if($count==1)
            {
                //user exits and password can be changed
                //echo "user found";
                //check wether the new password and confirm password 
                if ($new_password==$confirm_password)
                {
                    //Update the password
                   // echo "password Match";
                   $sql2 = "UPDATE tbl_admin SET 
                        password='$new_password'
                        WHERE ID=$id
                   ";
                   //execute the query 
                   $res2 = mysqli_query($conn,$sql);

                   //check wether the query the exeuted or not 
                   if ($res2==true)
                   {
                       //display succes message
                       //Redirecty to manage admin page with succes message
                       $_SESSION['change-pwd']="<div class ='success'>password changed Successffully.</div>";
                    //redirect the user
                   header('location:'.SITEURL.'admin/manage-admin.php');
                   }
                   else
                   {
                       //display error message
                       $_SESSION['change-pwd']="<div class ='error'>Failed to changed password. </div>";
                    //redirect the user
                   header('location:'.SITEURL.'admin/manage-admin.php');
                   }
                }
                else
                {
                    //redirec to manage admin page with error
                    $_SESSION['pwd-not-match']="<div class ='error'>password did not match.</div>";
                    //redirect the user
                   header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
            else
            {
                //user does not exits set message and redirect
                $_SESSION['user-not-found']="<div class ='error'>user not found.</div>";
                //redirect the user
               header('location:'.SITEURL.'admin/manage-admin.php');
            }

        }
    }

?>

<?php include ('partials/footer.php');?>