<?php 

    //Start Session
    session_start();

    //create Constant to store non repeating value
    define('SITEURL','http://localhost/ice-cream/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','ice-cream');

     //3.Execute Query and Save Data in Database
     $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD)or die(mysqli_error());//database Connection
     $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_errno());// Selecting database

?>