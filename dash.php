<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/tab.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>
<body>

<div class="sidebar">
      <?php echo " Welcome " . $_SESSION['user']; ?>
  <a class="active" href="main.php">Home</a>
  <a href="dash.php">Order</a>
  <a href="logout.php">Logout</a>

</div>
  

<div class="content">

  <div class = row >
      <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">ORDERS</h5>
        <p class="card-text">05</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">PRODUCTS</h5>
        <p class="card-text">15</p>
      </div>
    </div>
    </div>
<section>
              <h1>Order Details</h1>

            <table>
                  <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Total</th>


                  </tr>
  <?php
@include'dbconnect.php';  
  $get_info = "SELECT * FROM order_details WHERE `name` = '$_SESSION[user]'";
  $result =mysqli_query($conn,$get_info);
  if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_array($result)){
    ?>
<tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td>$<?php echo $row['total']; ?></td>
                       <!--  <td><a href = "delete.php?ID=<?php echo $row['ID']   ?>" <i class="fas fa-times"></i></a></td>  -->
                  </tr>
      <?php
      }
      }

      ?>
 
</section>


 
</div>




</body>
</html>
