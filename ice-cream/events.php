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
    <link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
    <!-- simpleLightbox css -->
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
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt=" " class="img-fluid">
            </a>
            <h5 class="heading">Radhe radhe ice cream</h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
							<span class="sr-only">(current)</span>
						</a>
                    </li>
                    <li class="nav-item  mx-lg-3">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    
                    <li class="nav-item  mx-3">
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

    <!-- gallery -->
    <section class="gallery py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="title-heading text-center mb-sm-5 mb-4">
                <h3 class="title text-capitalize text-dark">Our Events</h3>
                <!-- <p class="title-text font-weight-light font-italic mt-2">Ut enim ad minim veniam</p> -->
            </div>
            <div class="inner-sec pt-md-4">
                <div class="row proj_gallery_grid">

                <?php 
					//Query to Get the Admin
					$sql = "SELECT * FROM tbl_events";
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
							    $title=$rows['title'];
							    $description=$rows['description'];
                                $image_name = $rows['image_name']

							    //Display the values in our Table
                                ?>

                    <div class="col-sm-4 section_1_gallery_grid " style="width: 400px; margin-top:30px; margin-bottom: 30px;">
                        <a href="images/g1.jpg">
                            <div class="section_1_gallery_grid1">


                            <?php
                            //check wether image name available or not
                            if($image_name!=="")
                            {
                                //Display the Image
                                ?>
                                <img src="<?php echo SITEURL;?>images/events/<?php echo $image_name;?>" height="250px" width="350px">

                                <?php
                            }
                            else
                            {
                                //Display the message
                                echo "<div class='error'>Image Not Added.</div>";
                            }
                        ?>

                                <!-- <img src="images/g1.jpg" alt=" " class="img-fluid" /> -->
                                <div class="proj_gallery_grid1_pos">
                                    <h3> <?php echo $title; ?> </h3>
                                    <p> <?php echo $description; ?> </p>
                                </div>
                            </div>
                        </a>
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
    </section>
    <!--//gallery-->

    <!-- stats -->
    <section class="stats_test py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="d-flex inner_stat_wthree_agileits text-center">
                <div class="col-sm-4 py-5 stats_left counter_grid">
                    <i class="far fa-building"></i>
                    <p class="counter">2</p>
                    <h4>Branches</h4>
                </div>
                <div class="col-sm-4 py-5 stats_left counter_grid2 border-left border-right">
                    <i class="far fa-edit"></i>
                    <p class="counter">665</p>
                    <h4>Food Items</h4>
                </div>
                <div class="col-sm-4 py-5 stats_left counter_grid1">
                    <i class="fas fa-users"></i>
                    <p class="counter">565+</p>
                    <h4>Clients</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- middle slider -->
    <div class="projects py-5">
        <div class="projects-grids py-xl-5 py-lg-3">
            <div class="sreen-gallery-cursual">
                <ul id="flexiselDemo1">
                    <li>
                        <div class="item">
                            <div class="projects-agile-grid-info">
                                <img src="images/m1.png" alt="" class="img-fluid" />
                                <div class="projects-grid-caption text-center mt-4">
                                    <h4>Chocolate</h4>
                                    <p class="my-2">Chocolate-hazelnut ice cream with roasted hazelnut pieces</p>
                                    <a href="menu.html">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="projects-agile-grid-info">
                                <img src="images/m2.png" alt="" class="img-fluid" />
                                <div class="projects-grid-caption text-center mt-4">
                                    <h4>Blueberry</h4>
                                    <p class="my-2">Blueberry compote-swirl ice cream</p>
                                    <a href="menu.html">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="projects-agile-grid-info">
                                <img src="images/m3.png" alt="" class="img-fluid" />
                                <div class="projects-grid-caption text-center mt-4">
                                    <h4>Buttered Popcorn</h4>
                                    <p class="my-2">Buttered Popcorn ice<br> cream</p>
                                    <a href="menu.html">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="projects-agile-grid-info">
                                <img src="images/m4.png" alt="" class="img-fluid" />
                                <div class="projects-grid-caption text-center mt-4">
                                    <h4>Dark chocolate</h4>
                                    <p class="my-2">Dark chocolate ice cream with a spicy pepper kick</p>
                                    <a href="menu.html">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="projects-agile-grid-info">
                                <img src="images/m5.png" alt="" class="img-fluid" />
                                <div class="projects-grid-caption text-center mt-4">
                                    <h4>Coffee</h4>
                                    <p class="my-2">Coffee ice cream with organic cacao nibs</p>
                                    <a href="menu.html">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //middle slider -->

    <!-- newsletter -->

    <!-- //newsletter -->

    <!-- footer -->
    <div class="mkl_footer text-center py-4">
        <div class="container py-xl-5 py-4">
            <div class="mkls_footer_grid">
                <h4 class="text-white text-capitalize mb-5">we are best in making ice creams</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, doloremque laudantium, totam rem aperiam</p>
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
                            <i class="fas fa-location-arrow mr-2"></i>patna , India</p>
                    </li>
                    <li class="mx-4">
                        <p class="text-white">
                            <i class="fas fa-phone mr-2"></i>7991198925</p>
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

    <!-- simpleLightbox -->
    <script src="js/simpleLightbox.js"></script>
    <script>
        $('.proj_gallery_grid a').simpleLightbox();
    </script>
    <!-- //simpleLightbox -->

    <!-- flexisel slider (for middle Slider) -->
    <script src="js/jquery.flexisel.js"></script>
    <script>
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 2
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 3
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 4
                    }
                }
            });

        });
    </script>
    <!-- //flexisel slider (for middle Slider) -->

    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

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