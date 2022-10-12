<?php
$sql = "SELECT id,category FROM categories";
$result = mysqli_query($conn,$sql);
if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>