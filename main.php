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
    <li class="nav-item ml-auto">
        <a class="nav-link" href="main.php">Home</a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="dash.php"><?php echo  $_SESSION['user']; ?> </a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="mycart.php">Cart</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="logout.php">Logout</a>
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
    <div class="carousel-item">
      <img src="https://as2.ftcdn.net/v2/jpg/01/91/44/95/1000_F_191449546_98rlPC6oqA3NPMeIQ0lxkP185fljRXrQ.jpg
"  width="1100" height="500">
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
   <!--   <a class="cart" href="mycart.php"><i class="fas fa-shopping-cart"></i><span><?php if(isset($_SESSION['cart'])){ echo count($_SESSION['cart']); }else{ echo '0';} ?></span></a> -->
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">CATEGORY</h1>

          <br>
          <div class="row">
            <?php
              require_once('dbconnect.php');
              $sql = "SELECT  id,category FROM categories ";
            $result =mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
             ?>
              <div class="col-lg-3 mt-5">
                <a href = "product.php?id=<?php echo $row['id']?>" class="text-center">
            <div class="card" >
           <!-- <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200" width="250" class="center"/>' ?> -->
          <div class="card-body">

            <h5 class="card-title"><?php echo $row['category'] ?></h5>

          </div>
          
        </div>
         </a>
      </div>
    <?php }
  }
  ?>
      
    </div>
    
  </div>
</section>
	<section>
    <div class="container">
    <h1 class="text-center">All Products</h1>
    <div class="row mt-5 ">
      <?php
        require_once('dbconnect.php');
        $sql = "SELECT  id,name,price,description,image FROM product ";
        $result =mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
      ?>

      <div class="col-lg-3 mt-5">
        
            <div class="card" >
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200" width="250" class="center"/>' ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name'] ?></h5>
            <p class="card-text">Price: $<?php echo $row['price'] ?></p>

            <p class="card-text"><?php echo $row['description'] ?></p>
            <form action="detail.php?id=<?php echo $row['id']   ?>" method="post">
            <button type="submit" name="Add" class="btn btn-info">Show More</button>
          </form>
         <!--  <form action="index.php" method="post">
            <input type="number" name="quan" min="1" max="200" placeholder="Quantity" required>
            <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
            <button type="submit" name="Add" class="btn btn-info">Add to Cart</button>
          </form> -->
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

