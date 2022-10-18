<?php
session_start();
   
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/style2.css">

  <title></title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href=""><?php echo  $_SESSION['user']; ?> </a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="main.php">Home</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="mycart.php">Shopping</a>
      </li>
           <li class="nav-item ml-auto">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<body>
  <h2 align="center">Product Details</h2>
    <!--  <a class="cart" href="mycart.php"><i class="fas fa-shopping-cart"></i><span><?php if(isset($_SESSION['cart'])){ echo count($_SESSION['cart']); }else{ echo '0';} ?></span></a> -->
  <body>

<?php
@include'dbconnect.php';
  
if(isset($_REQUEST['id'])){
  $recv_data = $_REQUEST['id'];

  $get_info = "SELECT * FROM product WHERE id = $recv_data ";
  $result =mysqli_query($conn,$get_info);
  if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_array($result)){
    ?>
    <div class="container-info">     
      <img src="img/<?php echo $row['image']; ?>" class="card-img-top" alt="Product Images">
   </div>
   
       <div class="container-main">
    <h2><?php echo $row['name'] ?></h2>
    <h5>Category:<?php echo $row['categories_id']?> </h5>

    <p>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
    </p>
    <button class="button button1">Instock</button>
    <p></p>
    <h5>Retail Price: $<?php echo $row['price'] ?></h5>
    <p></p>
    <h5>Quantity:<?php echo $row['quantity']?> </h5>
     
 <form action="main.php" method="post">
            <input type="number" name="quan" min="1" max="200" placeholder="Quantity" required>
            <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
            <button type="submit" name="Add" class="btn btn-info">Add to Cart</button>
          </form>
    <h5>Description:<?php echo $row['description']?></h5>
    <p></p>
     <div></div>
    <div></div>
    <h5><pre>Available Stock:        Number of Orders:        Revenue:</pre></h5>
    <p><pre>100                              25                          $250,698</pre></p>

   </div>

     
   </div>
   <?php
      

  } 
}
}
?>




</body>
</html>
