<?php
   include("connection.php");
   error_reporting(0);
   
   $delete_id=$_GET['$id'];
   $delete_qurey="DELETE FROM `register` WHERE `id`=$delete_id";
   $con=mysqli_query($conn,$delete_qurey);
   if($con)
   {
      echo "Deleted";
      header("location: employe.php" );
   }
   else
   {
      echo "Not Deleted ";
   }
?> 