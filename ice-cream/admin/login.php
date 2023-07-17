<?php include('../config/constant.php')?>
<!DOCTYPE html>
<head>
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>

		<?php 
			  if(isset($_SESSION['login']))
			  {
				  echo $_SESSION['login'];
				  unset($_SESSION['login']);
			  }
		?>
		<form action="#" method="POST">
			<input type="text" name="username" class="ggg"  placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<!-- <span><input type="checkbox" />Remember Me</span> -->
			<!-- <h6><a href="#">Forgot Password?</a></h6> -->
				<div class="clearfix"></div>
				<input type="submit"  name="submit">
		</form>
		<p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
</div>
</div>
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
    if(isset($_POST['submit']))
    {
        //process for login
        //1.gET the Data from Login From
          $username = $_POST['username'];
          $password = md5($_POST['password']);


          //2. Sql to check wether the user with username and password exist or not
          $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password ='$password'";

          //3.Execute the Qurey
          $res = mysqli_query($conn, $sql);

          //.4 count rows to check wether the usee exist or not 
          $count = mysqli_num_rows($res);

          if($count==1)
          {
              //user Available and Login Success
              $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
              
             // $_SESSION['user'] = $username; // To check wether the user is logged in or not and logout will unset it
              //Redirect to home page /dashboad
              header('location:'.SITEURL.'admin/');
          }
          else
          {
              //user not Available and Lohin Fail
              $_SESSION['login'] = "<div class='error' text-center >username or password did not match</div>";
              //Redirect to home
              header('location:'.SITEURL.'admin/login.php');
          }
    }

?>
