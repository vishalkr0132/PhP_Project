
<?php include('partials/sidebar-menu.php') ?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">

		<!-- Start Chocolate -->

		<div class="panel panel-default">
    <div class="panel-heading">
     Chocolate
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
            <th>Name</th>
            <th>Prices</th>
            <th data-breakpoints="xs">Direcption</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php 
			//Query to Get the Admin
			$sql = "SELECT * FROM tbl_chocolate";
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
					$id = $rows['id'];
					$name = $rows['name'];
					$prices = $rows['prices'];
                    $description = $rows['description'];

					//Display the values in our Table
                    ?>

					<tr>
						<td><?php echo $sn++;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $prices;?></td>
                    	<td>
							<?php echo $description;?>
						</td>
						<td>
						<!-- <button type="button" class="btn btn-primary">Change Password</button> -->
						<!-- <button type="button" class="btn btn-info">Update Admin</button> -->
						<a href="<?php echo SITEURL;?>admin/delete-chocolate.php?id=<?php echo$id;?>">
						<button type="button" class="btn btn-danger">Delete</button>
						</a>
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
                       
        </tbody>
      </table>
    </div>
  </div>

  <a href="add-chocolate.php">
  <input class="btn btn-primary" type="button" value="Add Menu">
  </a>
  <br><br>

		<!-- End Chocolate -->

  <div class="panel panel-default">
    <div class="panel-heading">
     Vanilla
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
            <th>Name</th>
            <th>Prices</th>
            <th data-breakpoints="xs">Direcption</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php 
			//Query to Get the Admin
			$sql = "SELECT * FROM tbl_vanilla";
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
					$id = $rows['id'];
					$name = $rows['name'];
					$prices = $rows['prices'];
                    $description = $rows['description'];

					//Display the values in our Table
                    ?>

					<tr>
						<td><?php echo $sn++;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $prices;?></td>
                    	<td>
							<?php echo $description;?>
						</td>
						<td>
						<!-- <button type="button" class="btn btn-primary">Change Password</button> -->
						<!-- <button type="button" class="btn btn-info">Update Admin</button> -->
						<a href="<?php echo SITEURL;?>admin/delete-vanilla.php?id=<?php echo$id;?>">
						<button type="button" class="btn btn-danger">Delete</button>
						</a>
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
                       
        </tbody>
      </table>
    </div>
  </div>

  <a href="add-vanilla.php">
  <input class="btn btn-primary" type="button" value="Add Menu">
  </a>
  <br><br>
  <!-- End Vanilla -->

  <div class="panel panel-default">
    <div class="panel-heading">
     Softy
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
            <th>Name</th>
            <th>Prices</th>
            <th data-breakpoints="xs">Direcption</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php 
			//Query to Get the Admin
			$sql = "SELECT * FROM tbl_softy";
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
					$id = $rows['id'];
					$name = $rows['name'];
					$prices = $rows['prices'];
                    $description = $rows['description'];

					//Display the values in our Table
                    ?>

					<tr>
						<td><?php echo $sn++;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $prices;?></td>
                    	<td><?php echo $description;?></td>
						<td>
							<!-- <button type="button" class="btn btn-primary">Change Password</button> -->
							<!-- <button type="button" class="btn btn-info">Update Admin</button> -->
							<a href="<?php echo SITEURL;?>admin/delete-softy.php?id=<?php echo$id;?>">
							<button type="button" class="btn btn-danger">Delete</button>
							</a>
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
                       
        </tbody>
      </table>
    </div>
  </div>
  <a href="add-softy.php">
  <input class="btn btn-primary" type="button" value="Add Menu">
  </a>
  <br><br>
  <!-- End Softy -->

  <!-- Start Cup -->

  <div class="panel panel-default">
    <div class="panel-heading">
     Cup Ice-Cream
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
            <th>Name</th>
            <th>Prices</th>
            <th data-breakpoints="xs">Direcption</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php 
			//Query to Get the Admin
			$sql = "SELECT * FROM tbl_cup";
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
					$id = $rows['id'];
					$name = $rows['name'];
					$prices = $rows['prices'];
                    $description = $rows['description'];

					//Display the values in our Table
                    ?>

					<tr>
						<td><?php echo $sn++;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $prices;?></td>
                    	<td>
							<?php echo $description;?>
						</td>
						<td>
						<!-- <button type="button" class="btn btn-primary">Change Password</button> -->
						<!-- <button type="button" class="btn btn-info">Update Admin</button> -->
						<a href="<?php echo SITEURL;?>admin/delete-cup.php?id=<?php echo$id;?>">
						<button type="button" class="btn btn-danger">Delete</button>
						</a>
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
                       
        </tbody>
      </table>
    </div>
  </div>

  <a href="add-cup.php">
  <input class="btn btn-primary" type="button" value="Add Menu">
  </a>
  <br><br>

		<!-- End Cup -->

		<!-- Start Kulfi -->

		<div class="panel panel-default">
    <div class="panel-heading">
     Kulfi
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
            <th>Name</th>
            <th>Prices</th>
            <th data-breakpoints="xs">Direcption</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php 
			//Query to Get the Admin
			$sql = "SELECT * FROM tbl_kulfi";
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
					$id = $rows['id'];
					$name = $rows['name'];
					$prices = $rows['prices'];
                    $description = $rows['description'];

					//Display the values in our Table
                    ?>

					<tr>
						<td><?php echo $sn++;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $prices;?></td>
                    	<td>
							<?php echo $description;?>
						</td>
						<td>
						<!-- <button type="button" class="btn btn-primary">Change Password</button> -->
						<!-- <button type="button" class="btn btn-info">Update Admin</button> -->
						<a href="<?php echo SITEURL;?>admin/delete-kulfi.php?id=<?php echo$id;?>">
						<button type="button" class="btn btn-danger">Delete</button>
						</a>
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
                       
        </tbody>
      </table>
    </div>
  </div>

  <a href="add-kulfi.php">
  <input class="btn btn-primary" type="button" value="Add Menu">
  </a>
  <br><br>

		<!-- End Kulfi -->

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
