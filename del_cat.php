<?php
require_once('dbconnect.php');

 $recv= $_REQUEST['id'];
$query = "DELETE FROM categories WHERE id = $recv";
$run_del = mysqli_query($conn,$query);
if($run_del){
    header("location: cat.php?deleted");
}
?>