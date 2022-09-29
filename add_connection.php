<?php

@include 'dbconnect.php';

session_start();

if(isset($_POST['submit'])):
   $name = $_POST['name'];
   $price = $_POST['price'];
   $quantity = $_POST['quantity'];
   $description = $_POST['description'];


   $insert = "INSERT INTO product(name,price,quantity,description) VALUES ('$name','$price','$quantity','$description')";

   echo "$insert";

   mysqli_query($conn,$insert);
   header('location: propanel.php');

endif;


?>
