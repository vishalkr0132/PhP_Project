<?php include('config/constant.php')?>
<!DOCTYPE html>

<html lang="zxx">

<head>
    <title>Ice Cream</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Ice Cream Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function() {
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
    <link href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <li class="nav-item  mx-lg-3  active">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    
                    <li class="nav-item">
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

    <!--menu -->
    <div class="section main-menu py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="title-heading text-center mb-sm-5 mb-4">
                <h5 class="title text-capitalize text-dark"> Menu</h5>

            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active"  href="menu.php" >Chocolate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="menu-vanila.php" >Vanilla</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="menu-softy.php" >Softy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="menu-cup.php" >Cup Ice-Cream</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="menu-kulfi.php" >Kulfi</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <!-- Start Chocolate -->

                <div class="menu-container-aa" id="table-flaver">
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
                    <div class="ice-cream-menu border-right">
                        <div class="menu-text-right1" style="width:100%";>
                            <div class="menu-title">
                                <h4> <?php echo $name; ?></h4>
                            </div>
                            <div class="menu-price">
                                <h4 class="price-clr">&#8377; <?php echo $prices; ?> </h4>
                            </div>
                            <div class="clearfix"></div>
                            <p> <?php echo $description; ?> </p>
                        </div>
                    </div>
                    <?php
            }
                 }
                 else
                 {
                 //we Do not Have Data Is Database
                 }
                 }
         ?>

      </div>

     
               
                   
         </div>
        </div>

       
    </div>

    <!-- //menu -->

    <!-- newsletter -->

    <!-- //newsletter -->

    <!-- footer -->
    <div class="mkl_footer text-center py-4">
        <div class="container py-xl-5 py-4">
            <div class="mkls_footer_grid">
                <!-- <h2 class="text-white text-capitalize mb-5">we are best in making ice creams</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, doloremque laudantium, totam rem aperiam</p> -->
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
                            <i class="fas fa-location-arrow mr-2"></i>Patna , India</p>
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
        <p class="text-white">© 2018 Ice Cream. All rights reserved | Design by
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
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
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
        $(document).ready(function() {
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