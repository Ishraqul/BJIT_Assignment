<!-- <?php
session_start();
   
if(isset($_POST['Add'])){
     $_SESSION['cart'][] = array(
            'id' => rand(100,10000),
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'quan' => $_POST['quan'],
        );
    }
?> -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/cart.css">

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
        <a class="nav-link" href="adminlog.php">Admin </a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="login.php">Login/Register</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="mycart.php">Cart</a>
      </li>
    </ul>
  </div>
</nav>
<body>
	<section>
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="" data-slide-to="0" class="active"></li>
    <li data-target="" data-slide-to="1" class="active"></li>
    <li data-target="" data-slide-to="2" class="active"></li>
    <li data-target="" data-slide-to="3" class="active"></li>
    <li data-target="" data-slide-to="4" class="active"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.grabon.in/gograbon/images/web-images/uploads/1618566530277/promo-code-for-watches.jpg" width="1600" height="500">
    </div>
     <div class="carousel-item active">
      <img src="https://cdn.grabon.in/gograbon/images/web-images/uploads/1618566530277/promo-code-for-watches.jpg" width="1600" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/premio.jpg"  width="1100" height="500">
    </div>
     <div class="carousel-item">
      <img src="images/BMW-7-Series.jpg"width="1100" height="500">
    </div>
     <div class="carousel-item">
      <img src="images/hiace.jpg"width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
	<br>
  <br>
  <section>
       
  </section>

  <section>

  <div class="py-5">
  
</section>
	<section>
    <div class="container">
    <h1 class="text-center">All Products</h1>
    <div class="row mt-5 ">
      <?php
        require_once('dbconnect.php');
        $sql = "SELECT * FROM product ";
        $result =mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
      ?>

      <div class="col-lg-3 mt-5">
        
            <div class="card" >
           <img src="img/<?php echo $row['image']; ?>" class="card-img-top" alt="Product Images">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name'] ?></h5>
            <p class="card-text">Price: $<?php echo $row['price'] ?></p>

            <p class="card-text"><?php echo $row['description'] ?></p>
            <form action="login.php" method="post">
            <button type="submit" name="Add" class="btn btn-info">Add to cart</button>
          </form>
          </div>
        </div>    
      </div>
      <?php
      }
      }

      ?>
  </section>

</body>
</html>

<!-- detail.php?id=<?php echo $row['id']   ?> -->