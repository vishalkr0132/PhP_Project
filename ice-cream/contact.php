<?php include('config/constant.php')?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Ice Cream </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Ice Cream Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<div class="header">
		<!-- navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<h1>
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt=" " class="img-fluid">
				</a>
				<h5 class="heading">Radhe radhe ice cream</h5>
			</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item  mx-lg-3">
						<a class="nav-link" href="about.php">About Us</a>
					</li>
					
                    <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Gallery
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="events.php">Events</a>
                             <a class="dropdown-item" href="gallery.php">Events Photos</a>
                             
                        </div>
                        </li>
					<li class="nav-item  mx-lg-3">
						<a class="nav-link" href="menu.php">Menu</a>
					</li>
					
					<li class="nav-item  active">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
					<li class="nav-item" style="margin-left: 10px;">
                        <a class="nav-link" href="admin/login.php">Login</a>
                    </li>
				</ul>
			</div>
		</nav>
		<!-- //navigation -->
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="banner-2">

	</div>
	<!-- //banner -->

	<!-- contact -->
	<div class="contact-main  w3layouts-section py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3 class="title text-capitalize text-dark">contact us</h3>
				<!-- <p class="title-text font-weight-light font-italic mt-2">Ut enim ad minim veniam</p> -->
			</div>
			<div class="inner_contact">
				<div class=" contact-leftgrid">
					<h4>let's Get In Touch</h4>
					<div class="address">
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-phone" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<p>+1 234 567 8901</p>
								<p>+1 234 567 8901</p>
							</div>
						</div>
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-envelope" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<a href="mailto:example@email.com"> mail@example.com</a>
								<a href="mailto:example@email.com"> mail@example.com</a>
							</div>
						</div>
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-map-marker" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<p>1234k Avenue, #5432 Nashville
									<br>33 Broome St,california.
								</p>
								<p>234k Avenue, 4th block,3FB,
									<br>california.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-right-grid">
					<div class="wthree-contact-form">

						<form action="#" method="POST">
							<input type="text" name="name" placeholder="Name" >
							<input type="email" class="email" name="email_id" placeholder="Email" >
							<input type="text" name="mobile_no" placeholder="Mobile" >
							<textarea name="message" placeholder="Message" ></textarea>
							<input type="submit" value="SUBMIT" name="submit">
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
		    class="map" style="border:0" allowfullscreen=""></iframe>
	</div>
	<!-- //contact -->

	<!-- newsletter -->

	<!-- //newsletter -->

	<!-- footer -->
	<div class="mkl_footer text-center py-4">
		<div class="container py-xl-5 py-4">
			<div class="mkls_footer_grid">
				<!-- <h2 class="text-white text-capitalize mb-5">we are best in making ice creams</h2> -->
				<!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
					doloremque laudantium, totam rem aperiam</p> -->
				<!-- footer logo -->
				<div class="logo2 my-sm-5 my-4">
					<a class="" href="index.html">
						<img src="images/logo.png" alt=" " class="img-fluid">
					</a>
				</div>
				<!-- //footer logo -->
			</div>
			<!-- address -->
			<div class="contact-left-footer border-bottom pb-sm-5 pb-4">
				<ul>
					<li>
						<p class="text-white">
							<i class="fas fa-location-arrow mr-2"></i>patna, India</p>
					</li>
					<li class="mx-4">
						<p class="text-white">
							<i class="fas fa-phone mr-2"></i>7991198925.</p>
					</li>
					<li>
						<p class="text-white">
							<i class="far fa-envelope-open mr-2"></i>
							<a href="mailto:info@example.com" class="text-white">example@gmail.com</a>
						</p>
					</li>
				</ul>
			</div>
			<!-- //address -->
		</div>
	</div>
	<!-- //footer -->

	<!-- copyright -->
	<div class="w3l-copy text-center py-4">
		<p class="text-white">© 2022 Ice Cream. All rights reserved | Design by
			<a href="#">Vishal</a>
		</p>
	</div>
	<!-- //copyright -->


	<!-- Js files -->

	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!-- //smooth scrolling-bottom-to-top -->

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>

<?php 
    
        if(isset($_POST['submit']))
        {
       

			//1.Get the Data from form
			$name = $_POST['name'];
			$mobile_no = $_POST['mobile_no'];
			$email_id = $_POST['email_id'];
			$message = $_POST['message'];
	 
			//2.SQl Query to save the data into database
	 
			$sql = "INSERT INTO tbl_contacts SET
				 name ='$name',
				 mobile_no ='$mobile_no',
				 email_id ='$email_id',
				 message = '$message'
			";
				
			 //3.Execute Query and Save Data in Database
			  $res = mysqli_query($conn,$sql) or die (mysqli_error());
	 
			//4.Check wether the data (qyery is executed )is inserted or not and display appropiate message
			// if($res==TRUE)
			// {
			 
			// }
			// else
			// {
			  
			// }
		}
    ?>