<?php include('partials/menu.php'); ?>

    <div class="main-contant">
        <div class="wrapper">
            <h1>Update Admin</h1>
            <br><br>

            <?php 
                //1.Get the Id of select admin
                $id=$_GET['id'];
                //2. Create SQL Query to Get the Details
                $sql="SELECT * FROM tbl_admin WHERE id=$id";

                //3.Execute the Query
                $res=mysqli_query($conn,$sql);
                //Check wether the qurey is executed or not
                if($res==true)
                {
                    //check wether the data is available or not 
                    $count = mysqli_num_rows($res);
                }

                if($count==1)
                {
                    //Get the Details
                   // echo "Admin Avilable";
                   $row=mysqli_fetch_assoc($res);

                   $full_name = $row['full_name'];
                   $username = $row['username'];
                }
                else
                {
                    //Redirect to manage Admin page 
                    header('location:'.SITEURL.'admin/manage-admin.php');

                }
            ?>

            <form action="" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td>Full Name:</td>
                        <td>
                            <input type="text" name="full_name" value="<?php echo $full_name;?>"
                        </td>
                    </tr>

                    <tr>
                        <td>Username:</td>
                        <td>
                            <input type="text" name="username" value="<?php echo $username;?>"
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value= "<?php echo $id;?>">
                            <input type="submit" name="submit" class ="btn-secondry">
                        </td>
                    </tr>

                </table>

            </form>

        </div>

    </div>

    <?php 
    
            //check whether the submit button is clicked or not
            if(isset($_POST['submit']))
            {
               // echo "Button Clicked";
               //Get all the value from form to update
              $id = $_POST['id'];
               $full_name = $_POST['full_name'];
                $username = $_POST['username'];

                //Create a SQL Qurey to Update Admin
                $sql = "UPDATE tbl_admin SET
                full_name = '$full_name',
                username = '$username' 
                WHERE id = '$id'
                ";

                //Execute the Query
                $res = mysqli_query($conn,$sql);
                //check wether the query execute successfully or not 
                if($res==true)
                {
                    //Query Executed and amdin update
                    $_SESSION['update']= "<div class = 'succes'>Admin Update Succesfully.</div>";
                    //redirect to manage Admin page
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
                else
                {
                    //Failed to Update
                    $_SESSION['update']= "<div class = 'error'>Failed to Admin Update.</div>";
                    //redirect to manage Admin page
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
    
    ?>

<?php include('partials/footer.php')?>