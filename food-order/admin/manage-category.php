<?php include("partials/menu.php");?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Catagory</h1>

        <br /><br />
        <?php

            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        
        ?>
        <br><br>

<!--Button To Admin-->
<a href="<?php echo SITEURL;?>admin/add-category.php" class="btn-primary">Add Category</a>

<br /><br />

    <table class="tbl-full">
        <tr>
            <th>S.N.</th>
            <th>Title</th>
            <th>Image</th>
            <th>Featured</th>
            <th>Action</th>
            <th>Action</th>
        </tr>

        <?php
            //Query to Get All Category From Database
            $sql = "SELECT*FROM tbl_category";

            //Execute Query
            $res = mysqli_query($conn,$sql);

            //Count Rows
            $count = mysqli_num_rows($res);
            ///create serial number variable
            $sn=1;
            
            //check wether we have data in database or not
            if($count>0)
            {
                //We have data in database
                //get the data in display 
                while($row=mysqli_fetch_assoc($res))
                {
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
                    $featured = $row['featured'];
                    $active = $row['active'];
                    ?>
              <tr>
                    <td><?php echo $sn++ ;?></td>
                    <td><?php echo $title ?></td>

                    <td>
                        <?php
                            //check wether image name available or not
                            if($image_name!=="")
                            {
                                //Display the Image
                                ?>
                                <img src="<?php echo SITEURL;?>images/category/<?php echo $image_name;?>" width="100px">

                                <?php
                            }
                            else
                            {
                                //Display the message
                                echo "<div class='error'>Image Not Added.</div>";
                            }
                        ?>
                    </td>
                    <td><?php echo $featured?></td>
                    <td><?php echo $active ?></td>
                    <td>
                        <a href ="#" class ="btn-secondry">Update Category</a>
                        <a href ="#" class ="btn-danger">Delete Category</a>
                    </td>
                </tr>



                    <?php
                }
            }
            else
            {
                // we do not have data 
                //we will display the message inside table
                ?>
                 <tr>
                     <td colspan="6"><div class ="error">No Category Added.</td>
                 </tr>
                <?php
            }
        
        ?>

       
        
    </table>

        
    </div>
</div>

<?php include("partials/footer.php");?>