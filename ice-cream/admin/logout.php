<?php
    //include constant .php for seteural
    include('../config/constant.php');
    //1.Destory the session
    session_destroy(); //unsets $_SESSION['user']
     //2.redirect to login page 
     header('location:'.SITEURL.'admin/login.php');
?>