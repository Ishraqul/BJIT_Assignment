<?php
require('dbconnect.php');
$categories = '';
$msg = '';

if(isset($_GET['id']) && $_GET['id'] != ''){
    $id=get_safe_value($conn,$_GET['id']);
    $query = "SELECT * FROM product WHERE id='$id'";
    $res= mysqli_query($conn,$query);
    $check = mysqli_num_rows($res);
    if($check>0){
        $row = mysqli_fetch_assoc($res);
        $categories = $row['category'];
    }
    else{
        header('location:propanel.php');
        die();
    }


if(isset($_POST['submit'] )){
    $categories =get_safe_value($conn,$_POST['category']);
    $query = "SELECT * FROM product WHERE name='$name'";
    $res= mysqli_query($conn,$query);
    $check = mysqli_num_rows($res);
    if($check > 0){
        if(isset($_GET['id']) && $_GET['id'] !=' '){
            $getData = mysqli_fetch_assoc($res);
            if($id==$getData['id']){

            }else{
                $msg = "Categories exist";
            }
        } 
    }
}
if($msg == ''){
    if(isset($_GET['id']) && $_GET['id'] != ''){
        $command = "UPDATE categories SET categories = '$category' WHERE id = '$id'";
        mysqli_query($conn,$command);
    }else{
        mysqli_query($conn,"INSERT INTO categories(category,Description) VALUES ('$category','1')");
    }
    header('location:propanel.php');
    die();
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
            <form action="add_connection.php" method="post">
                <h3>Add Product</h3>
               
            <div class= "form-group">
                <label >Name</label>
                <input type="name" name="Name" placeholder="" class="box" required >
            </div>
            <div class= "form-group">
                <label >Category</label>
                <select class="box" name="categories_id">
                    <option>Select Category</option>
                    <?php 
                    $sql = "SELECT id,category FROM categories ORDER BY category";
                    $result = mysqli_query($conn,$sql);
                    while($row= mysqli_fetch_assoc($result)){
                        echo "<option value=".$row['id'].">".$row['categories'].
                        "</option>";
                    }

                    ?>
                    
                </select>
            </div>

             <div class= "form-group">
                <label >Price</label> 
                <input type="Price" name="Price" placeholder="" class="box"required>
            </div>
             <div class= "form-group">
                <label >Quantity</label> 
                <input type="Quantity" name="Quantity" placeholder="" class="box"required>
            </div>
            <div class= "form-group">
                <label >Description</label> 
                <input type="text" name="Description" placeholder="" class="box"required>
            </div>
                <input type="submit" value="Submit" name="submit" class="form-btn">

            </form>
        </div>
    </body>
</head>
</html>