<?php include('partials/sidebar-menu.php') ?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Events
                            
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="title"  minlength="2" type="text" required="">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="ccomment" name="description" required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3"> Select Images</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="file" name="image">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit" name="submit">Save</button>
                                            <!-- <button class="btn btn-default" type="button">Cancel</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            
            <!-- page end-->
        </div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2022 All rights reserved | Design by <a href="#">Vishal Kumar</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>

<?php
            //Check wether the submit button clicked or not
            if(isset($_POST['submit']))
            {
                //echo "clicked";
                //1.Get the Value from Category From
                $title = $_POST['title'];
                $description = $_POST['description'];
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
                    // $ext = end(explode('.',$image_name));
                    $tmp = explode('.', $image_name);
                    $ext = end($tmp);

                    //Rename the Image 
                    $image_name = "Food_Category_".rand(000,999).'.'.$ext;//e.g. Food _category_834.jpg

                    $source_path = $_FILES['image']['tmp_name'];

                    $destination_path = "../images/events/".$image_name;

                    //finally Upload the image
                    $upload = move_uploaded_file($source_path,$destination_path);

                    //check wether the image is upload or not 
                    // and if the image is not uploaded then will stop the process and redirect with error message 
                    if($upload==false)
                    {
                        // set messge 
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload image.</div>";
                        //Redirect to add category page
                        header('location:'.SITEURL.'admin/add-event.php');
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
                 $sql = "INSERT INTO tbl_events SET 
                    title = '$title',
                    description = '$description',
                    image_name='$image_name'
                ";
                //3. Execute the query and save database
                $res = mysqli_query($conn,$sql);

                //4. check wwether the query executed or not and data added or not 
                if($res==true)
                {
                    //Query Executed and category added 
                    $_SESSION ['add'] ="<div class='success'>Category Added Successfully.</di>";
                    //Redirect to manage Catagery page
                    // header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    $_SESSION ['add'] ="<div class='error'>Failed to add category.</di>";
                    //Redirect to manage Catagery page
                    // header('location:'.SITEURL.'admin/manage-category.php');
                }

            }
        ?>