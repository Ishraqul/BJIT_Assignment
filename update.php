<?php
@include 'dbconnect.php'; 
if(isset($_REQUEST['submit'])){
	$a= $_REQUEST['name'];
	$b= $_REQUEST['price'];
	$c= $_REQUEST['quantity'];
	$d= $_REQUEST['description'];
	$e= $_REQUEST['image'];
	$hidden_id=	$_REQUEST['updating_hidden_id'];

	$update_query= "UPDATE product SET name='$a',price='$b',quantity='$c', description='$d',image='$e' WHERE id=$hidden_id";
	$final_update_query = mysqli_query($conn,$update_query);

	if($final_update_query){
		header("location: propanel.php?updated");
	}
}
?>