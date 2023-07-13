
<?php 
        //Authorization access control 
        //check wether the user is logged in or not
        if(!isset($_SEESSION['USER']))//If user session is not set
        {
            //user is not logged in 
            //Redirect to Login page with message
            $_SESSION['no-login-message']="<div class='error text-center'>Plesse Login to access Admin panel.</div>";
            //Redirect to Login Page
            header('location:'.SITEURL.'admin/login.php');
        }
?>