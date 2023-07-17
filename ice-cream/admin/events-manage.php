
<?php include('partials/sidebar-menu.php') ?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Events
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">S.N.</th>
            <th>Title</th>
            <th>Images</th>
            <th data-breakpoints="xs">Direcption</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>
          </tr>
        </thead>
        <tbody>
          
        <?php
            //Query to Get All Category From Database
            $sql = "SELECT*FROM tbl_events";

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
                    $description = $row['description'];
                    ?>
                    <tr data-expanded="true">
                      <td><?php echo $sn++ ;?></td>
                      <td><?php echo $title ;?></td>
                      <td>
                      <?php
                            //check wether image name available or not
                            if($image_name!=="")
                            {
                                //Display the Image
                                ?>
                                <img src="<?php echo SITEURL;?>images/events/<?php echo $image_name;?>" width="100px">

                                <?php
                            }
                            else
                            {
                                //Display the message
                                echo "<div class='error'>Image Not Added.</div>";
                            }
                        ?>
                      </td>
                      <td><?php echo $description?></td>
                      
                      <td>
                        <a href="<?php echo SITEURL;?>admin/delete-event.php?id=<?php echo$id;?>">
											  <button type="button" class="btn btn-danger">Delete Admin</button>
											</a>
                    </td>
                    </tr>
                    <?php
                }
             }
             else
            {
              
              ?>
                <?php
            }
        
        ?>              
        </tbody>
      </table>
    </div>
  </div>
  <a href="add-event.php">
  <input class="btn btn-primary" type="button" value="Add Events">
  </a>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2022  All rights reserved | Design by <a href="#">Vishal Kumar</a></p>
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
