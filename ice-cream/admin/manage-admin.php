<?php include("partials/sidebar-menu.php");?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="wthree-font-awesome">
			<div class="grid_3 grid_4 w3_agileits_icons_page">
						<div class="icons">
							<h2 class="w3ls_head">Manage Admin</h2>
							<section id="new">
							<a href="add-admin.php">
								<button type="button" class="btn btn-primary">Add-Admin</button>
							</a>
							<br><br>
							<?php

								if(isset($_SESSION['add']))
								{
									echo $_SESSION['add'];
									unset($_SESSION['add']);
								}

								 if(isset($_SESSION['delete']))
								 {
									 echo $_SESSION['delete'];
									 unset($_SESSION['delete']);
								 }

							?>

								<div class="row fontawesome-icon-list">

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
											<!-- <button type="button" class="btn btn-primary">Change Password</button> -->
											<!-- <button type="button" class="btn btn-info">Update Admin</button> -->
											<a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo$id;?>">
											<button type="button" class="btn btn-danger">Delete Admin</button>
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
									
									
								</table>	
														
									
								  </div>

								</section>
							<!-- <div class="section group">
									<div class="box"> 
										<div class="title ">
											<h3 class="page-header icon-subheading">Web Application Icons</h3>
										</div>
										
									</div>
							</div>  -->
						</div>
					</div>
		</div>
		
</section>
<!-- footer -->
	<div class="footer">
		<div class="wthree-copyright">
			<p>© 2022 Visitors. All rights reserved | Design by <a href="#">Vishal Kumar</a></p>
		</div>
	</div>
<!-- //footer -->
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
