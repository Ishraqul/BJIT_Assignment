<?php
require_once('dbconnect.php');

 $recv= $_REQUEST['id'];
$query = "DELETE FROM product WHERE id = $recv";
$run_del = mysqli_query($conn,$query);
if($run_del){
    header("location: propanel.php?deleted");
}
?>