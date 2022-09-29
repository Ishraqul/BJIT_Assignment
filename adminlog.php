<?php
session_start();
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
            <form action="admininfo.php" method="post">
                <h3>Sign in</h3>
                <p>Enter your email address and password to access admin panel</p>

                <div></div>
                <div></div>
            <div class= "form-group">
                <label >E-mail</label>
                <input type="email" name="Email" placeholder="Enter your email" class="box" required >
            </div>
            <div class= "form-group">
                <label >Password</label> 
                <input type="password" name="Password" placeholder="Enter your password" class="box"required>
            </div>
            <div></div>
              <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
                <input type="submit" value="Log In" name="submit" class="form-btn" >
                <p>Don't have an account? <a href="signup.php"> Sign Up </a></p>

            </form>
        </div>
    </body>
</head>