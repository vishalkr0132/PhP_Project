<?php include('partials/menu.php');?>

    <div class="main-content">
        <div class="wrapper">
        <h1>Add Category </h1>

        <br><br>
        <?php

            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        
        ?>
        <br><br>

        <!--Add Category From Start-->
        <form action="" method="POST" enctype="multipart/form-data">

            <table>
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" placeholder="Category title">
                    </td>
                </tr>

                <tr>
                    <td>Select Image</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="yes">Yes
                        <input type="radio" name="featured" value="No">No
                    </td>
                </tr>

                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name="active" value="yes">Yes
                        <input type="radio" name="active" value="No">No
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category"  class ="btn-secondry">

                    </td>
                </tr>
             </table>
        </form>
        <!--Add Category From Start-->

        <?php
            //Check wether the submit button clicked or not
            if(isset($_POST['submit']))
            {
                //echo "clicked";

                //1.Get the Value from Category From
                $title = $_POST['title'];
                
                // For radio input we need to check wether yhe button is selected or not
                if(isset($_POST['featured']))
                {
                    //Get the value from form
                    $featured = $_POST['featured'];
                }
                else
                {
                    // Set the deafult value
                    $featured = "no";
                }
                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No";
                }

                //check the wether the image is selected or not and set the value or image name accordingly
              //  print_r($_FILES['image']);

                //die();//break the code here 

                if(isset($_FILES['image']['name']))
                {
                    //Upload the Image
                    // to upload image we need name ,source path and destinatipon path
                    $image_name = $_FILES['image']['name'];

                    //Auto rename our image
                    //Get the extension of our image (jpg,png,gif,etc)
                    $ext = end(explode('.',$image_name));

                    //Rename the Image 
                    $image_name = "Food_Category_".rand(000,999).'.'.$ext;//e.g. Food _category_834.jpg

                    $source_path = $_FILES['image']['tmp_name'];

                    $destination_path = "../images/category/".$image_name;

                    //finally Upload the image
                    $upload = move_uploaded_file($source_path,$destination_path);

                    //check wether the image is upload or not 
                    // and if the image is not uploaded then will stop the process and redirect with error message 
                    if($upload==false)
                    {
                        // set messge 
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload image.</div>";
                        //Redirect to add category page
                        header('location:'.SITEURL.'admin/add-category.php');
                        //stop
                        die();
                    }
                }
                else
                {
                    // Don't Upload Image and set the image_name value as blank
                    $image_name="";
                }

                //2. Create Sql query to insert category into databale
                $sql = "INSERT INTO tbl_category SET 
                    title = '$title',
                    image_name='$image_name',
                    featured = '$featured',
                    active = '$active'
                ";
                //3. Execute the query and save database
                $res = mysqli_query($conn,$sql);

                //4. check wwether the query executed or not and data added or not 
                if($res==true)
                {
                    //Query Executed and category added 
                    $_SESSION ['add'] ="<div class='success'>Category Added Successfully.</di>";
                    //Redirect to manage Catagery page
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    $_SESSION ['add'] ="<div class='error'>Failed to add category.</di>";
                    //Redirect to manage Catagery page
                    header('location:'.SITEURL.'admin/manage-category.php');
                }

            }
        ?>
        </div>
    </div>
<?php include('partials/footer.php');?>