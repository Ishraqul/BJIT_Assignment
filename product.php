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
<br>
<body>
  <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">PRODUCTS</h1>

          <br>
          <div class="row">
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
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="200" width="250" class="center"/>' ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name'] ?></h5>
            <p class="card-text">Price: $<?php echo $row['price'] ?></p>

            <p class="card-text"><?php echo $row['description'] ?></p>
            <form action="detail.php?id=<?php echo $row['id']   ?>" method="post">
            <button type="submit" name="Add" class="btn btn-info">Show More</button>
          </form>
          </div>
        </div>    
      </div>
      <?php
      }
      }
    }

      ?>
  </section>
    </body>

    </html>
