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
   <a class="active" href="main.php">Product page</a>   
  <a href="dash.php">Home</a>
  <a href="view.php">Order</a>
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
                        <th>Total</th>
                        <th>Action</th>


                  </tr>
  <?php
                        require_once('dbconnect.php');
                        $sql = "SELECT * FROM order_manager ";
                        $result =mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result) > 0){
        
                        while($row = mysqli_fetch_array($result)){
        
      ?>
<tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td>$<?php echo $row['total']; ?></td>
                       <td><a href = "view_ad.php?id=<?php echo $row['order_id']   ?>" >View</a></td>
                  </tr>
      <?php
      }
      }

      ?>
 
</section>


 
</div>




</body>
</html>
