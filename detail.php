
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/style2.css">


</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Category </a>
      </li>
<!--       <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >Logout</a>
      </li> -->
    </ul>
  </div>
</nav>
<body>
  <h2 align="center">Product Details</h2>
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
     <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="400" width="400" class="center"/>;' ?>
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
     
<form action="mycart.php?id=<?php echo $row['id']   ?>" method="post">
      <button type="submit" name="Add" class="btn btn-info">Add to Cart</button>
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
