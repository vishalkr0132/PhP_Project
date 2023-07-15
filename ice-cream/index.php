<?php include('config/constant.php')?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Ice Cream </title>
    <!-- Meta tag -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Ice Cream Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/> -->
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
    <link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Banner-Slider-CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css" media="all" />
    <!-- owl carousel css (for welcome section) -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- flexSlider css (for testimonials) -->
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
                    <li class="nav-item active">
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
    <div class="pogoSlider" id="js-main-slider">
        <div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b1.jpg);">
            <div class="pogoSlider-slide-element">
                <div class="container">
                    <div class="banner-img-agile">
                        <!--<img src="images/bannerimg.png" alt="" class="img-fluid">-->
                    </div>
                    <!-- <h3 class="text-white">ice cream</h3> -->
					<!-- <p class="font-italic text-uppercase">it’s a great day for ice cream!</p>
					<a class="bubbly-button" href="menu.html">View Menu</a> -->
                </div>
            </div>
        </div>
        <!-- <div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b2.jpg);">
            <div class="pogoSlider-slide-element">
                <div class="container">
					<div class="banner-img-agile">
						<img src="images/bannerimg.png" alt="" class="img-fluid">
					</div>
					<h3 class="text-white">ice cream</h3>
					<p class="font-italic text-uppercase">it’s a great day for ice cream!</p>
					<a class="bubbly-button" href="menu.html">View Menu</a>
				</div
            </div>
        </div> -->
        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b3.jpg);">
            <div class="pogoSlider-slide-element">
                <div class="container">
                    <div class="banner-img-agile">
                        <!--<img src="images/bannerimg.png" alt="" class="img-fluid">-->
                    </div>
                    <!--	<h3 class="text-white">ice cream</h3>
					<p class="font-italic text-uppercase">it’s a great day for ice cream!</p>
					<a class="bubbly-button" href="menu.html">View Menu</a>-->
                </div>
            </div>
        </div>
        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b4.jpg);">
            <div class="pogoSlider-slide-element">
                <div class="container">
                    <div class="banner-img-agile">
                        <!--	<img src="images/bannerimg.png" alt="" class="img-fluid">-->
                    </div>
                    <!--<h3 class="text-white">ice cream</h3>
					<p class="font-italic text-uppercase">it’s a great day for ice cream!</p>
					<a class="bubbly-button" href="menu.html">View Menu</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->

    <!-- about -->
    <div class="about py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="title-heading text-center mb-sm-5 mb-4">
                <h3 class="title text-capitalize text-dark">welcome to site</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 aboutleft">
                    <p class="about-left-agile text-dark text-capitalize font-weight-bold">our flavors</p>
                    <!-- <h3 class="about-headagile text-capitalize mt-2 mb-4 text-right">fresh & tasty! </h3> -->
                    <p class="my-3" style="font-style:italic;">We are committed to using high-quality, sustainable ingredients, such as organic cream and eggs, organic cane sugar, and homemade mixings. Our ice cream is made-from-fruits and include recipes that have been carried down from generations.
                    </p>
                    <p class="my-3" style="font-style:italic;"> You can't buy happines but you can buy Ice-Cream. And thats kind of the same thing

                    </p>
                    <p class="my-3" style="font-style:italic;">
                        Life is like an Ice-Cream, Enjoy it before it Melts
                    </p>

                </div>
                <div class="col-lg-6 aboutright">
                    <div class="large-12 columns">
                        <!-- Owl-Carousel -->
                        <div id="owl-demo" class="owl-carousel owl-theme text-center agileinfo-gallery-row">
                            <a class="item g1">
                                <img class="lazyOwl img-fluid" src="images/v1.png" title="Ice Cream" alt="" />
                            </a>
                            <a class="item g1">
                                <img class="lazyOwl img-fluid" src="images/v2.png" title="Ice Cream" alt="" />
                            </a>
                            <a class="item g1">
                                <img class="lazyOwl img-fluid" src="images/v3.webp" title="Ice Cream" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//about-->

    <!-- about bottom -->
    <!-- <div class="video-w3l text-center py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="text-white">Summer would not be summer without Ice-cream. Ice-cream is the favorite currency of love.</h3>
            <p class="font-italic p-3">It is like a temptation to eat ice cream instead of something that is better for you. </p>
            <a class="btn btn-primary button-w3ls" href="#" role="button">Read More</a>
        </div>
    </div>-->
    <!-- //about bottom -->

    <!-- work -->
    <section class="services py-5" id="work">
        <div class="container py-xl-5 py-lg-3">
            <div class="title-heading text-center mb-sm-5 mb-4">
                <h3 class="title text-capitalize text-dark"> Work</h3>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex box-a py-5 px-3">
                        <div class="col-3">
                            <i class="fab fa-apple"></i>
                        </div>
                        <div class="col-9">
                            <h3>We provide Seasonal Flavors</h3>
                            <!-- <p class="mt-3">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.
                            </p>-->
                        </div>
                    </div>
                    <!-- .Box ends here -->
                </div>
                <!-- .Col-lg-6 ends here -->

                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="d-flex box-b  py-5 px-3">
                        <div class="col-9  text-right">
                            <h3>We provide Demanded Ice-cream</h3>
                            <!--<p class="mt-3">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.
                            </p>-->
                        </div>
                        <div class="col-3">
                            <i class="fas fa-utensils"></i>
                        </div>
                    </div>
                    <!-- .Box ends here -->
                </div>
                <!-- .Col-lg-6 ends here -->
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="d-flex box-a  py-5 px-3">
                        <div class="col-3">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="col-9">
                            <h3>We Have Fast Delivery</h3>
                            <!--<p class="mt-3">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.
                            </p>-->
                        </div>
                    </div>
                    <!-- .Box ends here -->
                </div>
                <!-- .Col-lg-6 ends here -->

                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="d-flex box-b  py-5 px-3">
                        <div class="col-9 text-right">
                            <h3>We Provide Fresh & Tasty Ice-Cream</h3>
                            <!--<p class="mt-3">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.
                            </p>-->
                        </div>
                        <div class="col-3">
                            <i class="fas fa-glass-martini"></i>
                        </div>
                    </div>
                    <!-- .Box ends here -->
                </div>
                <!-- .Col-lg-6 ends here -->
            </div>
            <!-- .Row ends here -->
        </div>
        <!-- .Container ends here -->
    </section>
    <!-- .Section ends here -->
    <!-- //work -->

    <!-- news -->
    <div class="middle-section py-5" id="news">
        <div class="container py-xl-5 py-lg-3">
            <div class="title-heading text-center mb-sm-5 mb-4">
                <h3 class="title text-capitalize text-dark">Specials</h3>
            </div>
            <div class="wthree_events_grid">
                <div class="event-grids">
                    <div class="agileits_event_grid_date">
                        <p class="text-white text-uppercase">Post on</p>
                        <span>May 13th 2022</span>
                    </div>
                    <div class="agileinfo_events_grid1">
                        <div class="events_info_w3ls">
                            <a href="#" data-toggle="modal" data-target="#latest_news">Lorem ipsum dolor sit amet</a>
                            <p>Etiam non sapien non mauris molestie mollis quis et augue. Ut et ante id neque dignissim tincidunt a interdum orci.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="event-grids">
                    <div class="agileits_event_grid_date">
                        <p class="text-white text-uppercase">Post on</p>
                        <span>May 14th 2022</span>
                    </div>
                    <div class="agileinfo_events_grid1">
                        <div class="events_info_w3ls">
                            <a href="#" data-toggle="modal" data-target="#latest_news">Nullam eu vehicula felis</a>
                            <p>Maecenas enim elit, molestie et magna vel, condimentum sollicitudin magna. In pretium eros ut rhoncus pulvinar.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="event-grids">
                    <div class="agileits_event_grid_date">
                        <p class="text-white text-uppercase">Post on</p>
                        <span>May 22nd 2022</span>
                    </div>
                    <div class="agileinfo_events_grid1 grid3 ">
                        <div class="events_info_w3ls">
                            <a href="#" data-toggle="modal" data-target="#latest_news">Donec tempor justo nec orci</a>
                            <p>Donec facilisis, orci a aliquet ultricies, lacus mauris vestibulum lorem, in malesuada augue sem sed dolor. Ut at metus vel enim elementum varius.Etiam ut cursus sem. Vestibulum dapibus a tellus.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="latest_news">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header w3serv_modal">
                    <h4 class="modal-title">Ice Cream</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <img src="images/g1.jpg" class="img-fluid" alt="" />
                    <p class="mt-3">Donec facilisis, orci a aliquet ultricies, lacus mauris vestibulum lorem, in malesuada augue sem sed dolor. Ut at metus vel enim elementum varius.Etiam ut cursus sem. Vestibulum dapibus a tellus.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- //news -->

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
                    <p class="counter">765+</p>
                    <h4>Food Items</h4>
                </div>
                <div class="col-sm-4 py-5 stats_left counter_grid1">
                    <i class="fas fa-users"></i>
                    <p class="counter">565+</p>
                    <h4>Client</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- testimonials -->
    <div class="slider py-5" id="testi">
        <div class="container py-xl-5 py-lg-3">
            <div class="title-heading text-center mb-sm-5 mb-4">
                <h3 class="title text-capitalize text-dark">what our people say's</h3>
                <!-- <p class="title-text font-weight-light font-italic mt-2">Ut enim ad minim veniam</p> -->
            </div>
            <div class="flexslider text-center">
                <ul class="slides">
                    <li>
                        <div class="client-grids">
                            <img src="images/c1.jpg" class="img-fluid" alt="Responsive image">
                            <h4 class="my-4">Aaliyah Moye</h4>
                            <p class="paragraph-agileinfo">adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod tempor incididunt ut labore et dolore, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </li>
                    <li>
                        <div class="client-grids">
                            <img src="images/c2.jpg" class="img-fluid" alt="Responsive image">
                            <h4 class="my-4">Smith Kevin</h4>
                            <p class="paragraph-agileinfo">adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod tempor incididunt ut labore et dolore, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </li>
                    <li>
                        <div class="client-grids">
                            <img src="images/c3.jpg" class="img-fluid" alt="Responsive image">
                            <h4 class="my-4">Edwin Hale</h4>
                            <p class="paragraph-agileinfo">adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod tempor incididunt ut labore et dolore, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //testimonials -->

    <!-- newsletter -->
    <div class="footer-top py-4 text-center">
        <div class="container py-xl-5 py-lg-3">
            <!-- newsletter  -->
            <div class="agile-newsletter">
                <p class="text-white">Subscribe Your Email</p>
                <form action="#" method="POST" class="my-4">
                    <input type="email" placeholder="E-mail" name="email_id" required="">
                    <input type="submit" value="Subscribe" name="submit">
                </form>
            </div>
            <!-- //newsletter -->

            <!-- social icons -->
            <!-- <div class="footercopy-social py-3">
                <ul>
                    <li>
                        <a href="#">
                            <span class="fab fa-facebook-f"></span>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <span class="fab fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fas fa-rss"></span>
                        </a>
                    </li>
                    <li class="ml-2">
                        <a href="#">
                            <span class="fab fa-vk"></span>
                        </a>
                    </li>
                </ul>
            </div>-->
            <!-- //social icons -->
        </div>
    </div>
    <!-- //newsletter -->

    <!-- footer -->
    <div class="mkl_footer text-center py-4">
        <div class="container py-xl-5 py-4">
            <div class="mkls_footer_grid">
                <!--<h2 class="text-white text-capitalize mb-5">we are best in making ice creams</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, doloremque laudantium, totam rem aperiam</p>
               -->
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
        <p class="text-white">© 2022 Ice Cream. All rights reserved | Design by
            <a href="#">Anupitsoulation </a>
        </p>
    </div>
    <!-- //copyright -->


    <!-- Js files -->

    <!-- JavaScript -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Default-JavaScript-File -->

    <!-- Owl-Carousel-JavaScript (for welcome section) -->
    <script src="js/owl.carousel.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
        });
    </script>
    <!-- //Owl-Carousel-JavaScript (for welcome section) -->

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
                        changePoint: 440,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 667,
                        visibleItems: 3
                    },
                    tablet: {
                        changePoint: 900,
                        visibleItems: 4
                    }
                }
            });

        });
    </script>
    <!-- //flexisel slider (for middle Slider) -->

    <!-- flexSlider (for testimonials) -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider (for testimonials) -->

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

    <!-- Pogo slider (for banner) -->
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Pogo slider (for banner) -->

    <script src="js/bootstrap.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->

    <!-- //Js files -->

</body>

</html>

<?php 
   
    if(isset($_POST['submit']))
    {
       

       //1.Get the Data from form
       $email_id = $_POST['email_id']; 

       //2.SQl Query to save the data into database

       $sql = "INSERT INTO tbl_email SET
            email_id ='$email_id'
       ";
           
        //3.Execute Query and Save Data in Database
         $res = mysqli_query($conn,$sql) or die (mysqli_error());

       //4.Check wether the data (qyery is executed )is inserted or not and display appropiate message
       if($res==TRUE)
       {
          //Create a session Variable to diisplay Message
        //   $_SESSION['add'] = "Admin Added Successfully";
          //Redirect page to Manage Admin
          header("location:".SITEURL.'index.php');
       }
       else
       {
          //Create a session Variable to diisplay Message
        //   $_SESSION['add'] = "Failed to Add Admin";
          //Redirect page to Add Admin
          header("location:".SITEURL.'index.php');
       }
    }
    
?>