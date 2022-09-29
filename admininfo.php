<?php
session_start();
require_once'dbconnect.php';
if(isset($_POST['Email']) && $_POST['Password']){
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	$query = "SELECT * FROM admin_info WHERE Email= '$Email' && Password='$Password'";

	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) != 0){
		$_SESSION['user'] = $Email;
		header ("Location:adminpanel.php");
	}

	else{
		echo "Password or User Name is incorrect";
		//header("Location: index.php");
	}
	
}



?> 
