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
                            Cup Ice-Cream
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="POST" action="" >
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="name"  minlength="2" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3"> Prices</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="text" name="prices">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="ccomment" name="description" required=""></textarea>
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
                $name = $_POST['name'];
                $prices = $_POST['prices'];
                $description = $_POST['description'];
              

                 //2. Create Sql query to insert category into databale
                 $sql = "INSERT INTO tbl_cup SET 
                    name = '$name',
                    prices = '$prices',
                    description = '$description'
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