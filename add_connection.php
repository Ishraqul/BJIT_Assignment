<?php
@include 'dbconnect.php';
session_start();
mysqli_select_db($conn, 'web');
if(isset($_POST['submit'])):
   $name = $_POST['name'];
   $categories_id = $_POST['categories_id'];
   $price = $_POST['price'];
   $quantity = $_POST['quantity'];
   $description = $_POST['description'];
    $image = $_POST['image'];



   $insert = "INSERT INTO product(name,categories_id,price,quantity,description,image) VALUES ('$name','$categories_id','$price','$quantity','$description','$image')";

   echo "$insert";

   mysqli_query($conn,$insert);
   header('location: propanel.php');

endif;


?>
