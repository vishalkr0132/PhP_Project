<?php include("partials/menu.php");?>

        <!-- Main Content Section Start-->
        <div class="Main-Content"> 
        <div class="wrapper">
        <h1>Manage Admin</h1>

        <br><br>

        <?php 
        
            if(isset($_SESSION['add']))//Checking Whether the Session is set of not
            {
                echo $_SESSION['add'];//Display the session message is set 
                unset($_SESSION['add']);//Remove Session Message
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['user-not-found']))
            {
                echo $_SESSION['user-not-found'];
                unset($_SESSION['user-not-found']);
            }
            if(isset($_SESSION['pwd-not-match']))
            {
                echo $_SESSION['pwd-not-match'];
                unset($_SESSION['pwd-not-match']);
            }
            if(isset($_SESSION['change-pwd']))
            {
                echo $_SESSION['change-pwd'];
                unset($_SESSION['change-pwd']);
            }
            
        ?>
         <br><br>

        <!--Button To Admin-->
        <a href="add-admin.php" class="btn-primary">Add Admin</a>

        <br /><br />
        
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Nmae</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>

                <?php 
                    //Query to Get the Admin
                    $sql = "SELECT * FROM tbl_admin";
                    //Execute The Queary
                    $res = mysqli_query($conn,$sql);

                    //Check Wether the Query is Executed of Not
                    if($res==TRUE)
                    {
                        //Count Row to Check Whether We Have Data In Database or Not
                        $count = mysqli_num_rows($res);//Function to get all the row i database

                        $sn=1;//Create a variable and assign the value

                        //Check the num of rows 
                        if($count>0)
                        {
                            //we have data in database
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //Using while loop to get all the data from database.
                            //and while loop will run as we have data in database

                            //Get Indivisul Data
                            $id=$rows['id'];
                            $full_name=$rows['full_name'];
                            $username=$rows['username'];

                            //Display the values in our Table
                            ?>

                                <tr>
                                    <td><?php echo $sn++;?></td>
                                    <td><?php echo $full_name;?></td>
                                    <td><?php echo $username;?></td>
                                    <td>
                                        <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id;?>" class="btn-primary">Change Password</a>
                                        <a href ="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id;?>" class ="btn-secondry">Update Admin</a>
                                        <a href ="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo$id;?>" class ="btn-danger">Delete Admin</a>
                                    </td>
                                </tr>
                                            
                            <?php

                            }
                        }
                        else
                        {
                            //we Do not Have Data Is Database
                        }
                    }
                

                
                ?>

               
            </table>
       </div>
       </div>
       <!-- Main Content Section End-->

   <?php include("partials/footer.php");?>