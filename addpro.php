<?php
session_start();
@include'dbconnect.php';
@include'fetch_data.php';

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
                <input type="name" name="name" placeholder="" class="box" required >
            </div>
            <div class= "form-group">
                <label >Category</label>
                <select class="box" name="categories_id">
                    <option>Select Category</option>
                    <?php
                    foreach ($options as $option) {
                        ?>
                        <option><?php echo $option['id']; ?></option>
                        <?php
                    }
                    ?>
                </select>    
            </div>

             <div class= "form-group">
                <label >Price</label> 
                <input type="Price" name="price" placeholder="" class="box"required>
            </div>
             <div class= "form-group">
                <label >Quantity</label> 
                <input type="Quantity" name="quantity" placeholder="" class="box"required>
            </div>
            <div class= "form-group">
                <label >Description</label> 
                <input type="text" name="description" placeholder="" class="box"required>
            </div>
            <div class= "form-group">
                <label >Upload Image</label> 
                <input type="file" name="image" id="pro_image" class="box"required>
            </div>
                <input type="submit" value="Submit" name="submit" class="form-btn">

            </form>
        </div>
    </body>
</head>
</html>