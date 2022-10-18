
<!DOCTYPE html>
<html lang= 'en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial scale=1.0">
    <link rel="stylesheet" href="css/log.css">


<?php
session_start();
@include'dbconnect.php';
@include'fetch_data.php';

// if(isset($_GET['id']) && $_GET['id'] != ''){
//     $id=get_safe_value($conn,$_GET['id']);
//     $query = "SELECT * FROM product WHERE id='$id'";
//     $res= mysqli_query($conn,$query);
//     $check = mysqli_num_rows($res);
//          $row = mysqli_fetch_assoc($res);
//         $categories = $row['category'];
//     }
//     else{
//         header('location:propanel.php');
//         die();
//     }
// }
if(isset($_REQUEST['edit_id'])){
    $recv_info = $_REQUEST['edit_id'];

    $get_data = "SELECT * FROM product WHERE id=$recv_info";
    $select_info = mysqli_query($conn, $get_data);
    while($row = mysqli_fetch_assoc($select_info)){

?>
<body>
        <div class="form-container">
            <form action="update.php" method="post">
                <h3>Edit Product</h3>
               
            <div class= "form-group">
                <label >Name</label>
                <input type="name" name="name" value="<?php echo $row['name']?>" class="box" required >
            </div>
<!--             <div class= "form-group">
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
            </div>  -->

             <div class= "form-group">
                <label >Price</label> 
                <input type="Price" name="price"  value="<?php echo $row['price']?>" class="box"required>
            </div>
             <div class= "form-group">
                <label >Quantity</label> 
                <input type="Quantity" name="quantity"  value="<?php echo $row['quantity']?>" class="box"required>
            </div>
            <div class= "form-group">
                <label >Description</label> 
                <input type="text" name="description"  value="<?php echo $row['description']?>" class="box"required>
            </div>
            <div class= "form-group">
                <label >Upload Image</label> 
                <input type="file" name="image" id="pro_image" class="box"required>
            </div>
                <input type="submit" value="Update Data " name="submit" class="form-btn">
                <input type="hidden" name="updating_hidden_id" value="<?php echo $recv_info; ?>">

            </form>
        </div>
    </body>


<?php
    }
}

?>

    
    
</head>
</html>