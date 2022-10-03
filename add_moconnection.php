<?php

@include 'dbconnect.php';

session_start();

if(isset($_POST['submit'])):
   $category = $_POST['category'];
   $Description = $_POST['Description'];


   $insert = "INSERT INTO categories(category,Description) VALUES ('$category','$Description')";

   echo "$insert";

   mysqli_query($conn,$insert);
   header('location: cat.php');

endif;


?>
