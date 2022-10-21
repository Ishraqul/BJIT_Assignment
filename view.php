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
  <a class="active" href="dash.php">Home</a>
  <a href="view.php">Order</a>
  <a href="logout.php">Logout</a>

</div>
<div class="content">
      <section>
              <h1>Order Summary</h1>

            <table>
                  <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>


                  </tr>
  <?php
@include'dbconnect.php'; 
if(isset($_REQUEST['id'])){
  $recv_data = $_REQUEST['id']; 
  $get_info = "SELECT * FROM order_details WHERE order_id = '$recv_data'";
  $result =mysqli_query($conn,$get_info);
  if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_array($result)){
    ?>
<tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td>$<?php echo $row['price']; ?></td>
                       
      <?php
      }
      }
}

      ?>
 
</section>


 
</div>




</body>
</html>

</div>