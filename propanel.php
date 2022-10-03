<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/tab.css">
<link rel="stylesheet" href="css/button.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>
<body>

<div class="sidebar">
  <?php echo " Welcome " . $_SESSION['user']; ?>
  <a class="active" href="adminpanel.php">Home</a>
  <a href="#news">Order</a>
  <a href="propanel.php">Product</a>
  <a href="cat.php">Category</a>
</div>

<div class="content">
  <div class="row">
    <a href="addpro.php" class="button">Add Product</a>
    

    </div>

<section>
    <h1>Product List</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
        <?php
        require_once('dbconnect.php');
        $sql = "SELECT product.*,categories.category FROM product,categories WHERE product.categories_id = categories.id ORDER BY product.id" ;
        $result =mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
        
              while($row = mysqli_fetch_array($result)){
        
      ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['image']; ?></td>
            <td><a href = "delete.php?id=<?php echo $row['id']   ?>" </a>Remove</td> 
          </tr>
          <?php
              }
            }
      
          ?>
    </table>

  </section>

  
</div>
</body>
</html>
