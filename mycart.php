<?php
session_start();
@include'dbconnect.php';
 if(isset($_GET['empty'])){
        unset($_SESSION['cart']);
    }

    if(isset($_GET['remove'])){
        $id = $_GET['remove'];
        foreach($_SESSION['cart'] as $k => $part){
            if($id == $part['id']){
                unset($_SESSION['cart'][$k]);
            }
        }
    }
    $total = 0;
    $tq = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/cart.css">
  <script src="https://kit.fontawesome.com/6d5ca9b667.js" crossorigin="anonymous"></script>

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
        <a class="nav-link" href="mycart.php">Cart</a>
      </li>
           <li class="nav-item ml-auto">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<body>

<div style="clear:both;">

    
</div>
<br>
<h3 class="text-center">Shopping Cart</h3>

<div class="table-responsive">
    <a class='empty' href="mycart.php?empty=1">EmptyCart</a>
    <table class="table table-bordered">
        <tr>
            <th width="40%">Product Name</th>
            <th width="10%">Quantity</th>
            <th width="20%"> Unit Price</th>
            <th width="20%"> Price</th>
            <th width="5%">Action</th>

        </tr>
        
        <?php
        if(isset($_SESSION['cart'])):?>
        <?php foreach($_SESSION['cart'] as $k => $item) :?>
                        
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['quan']; ?></td>
                        <td><?php echo $item['price'];?></td>
                        <td><?php echo $data = ($item['price'] * $item['quan']); 
                                        $total = $total + $data?></td>
                                       
                        <td><a href="mycart.php?remove=<?php echo $item['id']; ?>"><i class="fas fa-times"></i></a></td>
                    </tr>

                <?php endforeach ?>
            <?php endif ?>
        </table>
        
        <div class="total" style="float: right;">
            <h2>Total $: <span><?php echo $total; ?></span></h2>
        </div>
        
    </div>
    <br>

 <div class="w-50 m-auto">
    <h1 class="text-center">ORDER DETAILS</h1>
        <form action="order_done.php" method="post">
                <div class= "form-group">
                </div>
                <div class= "form-group">
                        <label ><h5>Name</h5></label>
                        <input type="text" name="name" autocomplete="off" class="form-control"value="<?php echo $_SESSION['user']; ?>" required>
                </div>
                <br>
                <div class= "form-group">
                        <label ><h5>Total</h5></label>
                        <input type="text" name="total" autocomplete="off" class="form-control" value="<?php echo $total?>">
                </div>
                <br>
   
                <button type="submit" name="order" class="btn btn-info">Order</button>
</div>
</form>
  
</div>

</body>
</html>