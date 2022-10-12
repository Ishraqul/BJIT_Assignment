
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/cart.css">

  <title></title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
  <h2 align="center">Products</h2>
<?php
@include'dbconnect.php';
if(isset($_REQUEST['id'])){
  $recv_data = $_REQUEST['id'];
  
  $get_info = "SELECT * FROM product WHERE product.categories_id = $recv_data";
  $result =mysqli_query($conn,$get_info);
  if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_array($result)){
    ?>
     <div class="col-lg-3 mt-5">
      
            <div class="card" >
 
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name'] ?></h5>
            <p class="card-text">Price: $<?php echo $row['price'] ?></p>

            <p class="card-text"><?php echo $row['description'] ?></p>
    
            <button type="submit" name="Add" class="btn btn-info">Show More</button>

          </div>
        </div>
        </div>
      </div>
      <?php
      }
      }
}
      ?>
    </body>

    </html>
