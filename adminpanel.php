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
      <?php echo " Welcome " . $_SESSION['user_ad']; ?>
  <a class="active" href="index.php">Home</a>
  <a href="propanel.php">Product</a>
  <a href="cat.php">Category</a>
  <a href="user.php">User</a>
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


<section>
      <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans';
        }
 
        td {
            background-color: whitesmoke;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
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
                        require_once('dbconnect.php');
                        $sql = "SELECT * FROM order_details ";
                        $result =mysqli_query($conn,$sql);
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
            </table>
 
</section>

</div>
 
</div>




</body>
</html>
