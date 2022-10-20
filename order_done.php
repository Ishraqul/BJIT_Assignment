<?php
@include'dbconnect.php';
session_start();

if(isset($_POST['order'])){
$name= $_POST['name'];
$total= $_POST['total'];


$query = " INSERT INTO order_manager (name,total)
VALUES('$name', '$total')";

if(mysqli_query($conn, $query)){
	$order_id= mysqli_insert_id($conn);
	$query1 = "INSERT INTO order_details(order_id, product_name, price, quantity) VALUES (?,?,?,?)";
	$stmt= mysqli_prepare($conn,$query1);
	if($stmt){
		mysqli_stmt_bind_param($stmt,"isss", $order_id,$product_name,$price,$quantity);
		foreach($_SESSION['cart'] as $k => $item){
			$product_name = $item['name'];
			$price= $item['price'];
			$quantity=$item['quan'];
			mysqli_stmt_execute($stmt); 
		}
		unset($_SESSION['cart']);

	}

}
}
header('location: mycart.php');
?>