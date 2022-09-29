<?php
require_once('dbconnect.php');

 $recv= $_REQUEST['ID'];
$query = "DELETE FROM product WHERE ID = $recv";
$run_del = mysqli_query($conn,$query);
if($run_del){
    header("location: propanel.php?deleted");
}
?>