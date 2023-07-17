<?php

    //Include Constants.php file here
     include('../config/constant.php');
    //1.Get the Id of Admin to be Delete
    $id = $_GET['id'];
    //2.Create Sql qurey to delete admin
    $sql = "DELETE FROM tbl_softy WHERE id =$id";

    //execute the query
    $res = mysqli_query($conn,$sql);

    //Check Wether the queary successfully or not 
    if($res==TRUE)
    {
        //Query Executed successully and admin deleted
       //echo "admin Deleted";
       //create Session variable to display message 
       $_SESSION['delete'] = "<div class='success'> Admin  Deleted Successfully.</div>";
       //Redirect to Manage Admin Page
       header('location:'.SITEURL.'admin/manage-menu.php');
    }
    else
    {
        //Failed to Delete Admin
       //echo "Failed to Delete Admin";

       $_SESSION['delete'] = "<div class='error'> Failed to Delete Admin. try Again Later.</div>";
       header('location:'.SITEURL.'admin/manage-menu.php');
    }
    //3.Redirect to manage admin page with message (sucess/error)
?>