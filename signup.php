<?php

@include 'dbconnect.php';

session_start();

if(isset($_POST['submit'])){
   $Full_Name = mysqli_real_escape_string($conn, $_POST['Full_Name']);
   $Email = mysqli_real_escape_string($conn, $_POST['Email']);
   $Password = $_POST['Password'];
   

   $select = " SELECT * FROM user_info WHERE Email = '$Email '";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      echo '<script>alert("Email exists")</script>';
   }else{
         $insert = "INSERT INTO user_info(Full_Name, Email, Password) VALUES('$Full_Name', '$Email','$Password')";
         mysqli_query($conn, $insert);
         header('location:login.php');

      }
   }



?>

<!DOCTYPE html>
<html lang= 'en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <body>
    
        <div class="form-container">
            <form action="" method="post">
                <h3>Free Sign Up</h3>

                <p>Don't have an account? Create your</p>
                <p>account it takes less than a minute</p>

                   <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>

            <div class= "form-group">
                <label >Full Name</label>
                <input type="name" name="Full_Name" placeholder="Enter your full name" class="box" required >
            </div>
            <div class= "form-group">
                <label >E-mail</label>
                <input type="email" name="Email" placeholder="Enter your email" class="box" required >
            </div>
            <div class= "form-group">
                <label >Password</label> 
                <input type="password" name="Password" placeholder="Enter your password" class="box"required>
            </div>
                <input type="submit" value="Sign Up" name="submit" class="form-btn">
                <p><input type="checkbox" name="">I accept Terms and Conditions</p>
                <p>Already have an account? <a href="login.php"> Log In </a></p>

            </form>
        </div>
    </body>
</head>