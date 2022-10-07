<?php
@include'dbconnect.php';

mysqli_select_db($conn, 'web');
$name= $_POST['name'];
$product_name= $_POST['product_name'];
$quantity= $_POST['quantity'];
$total= $_POST['total'];


$query = " INSERT INTO order_details (name,product_name, quantity, total)
VALUES('$name', '$product_name', '$quantity', '$total')";

echo"$query";

mysqli_query($conn, $query);

header('location: mycart.php');
?>