<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/tab.css">
<link rel="stylesheet" href="css/button.css">
</head>
<body>

<div class="sidebar">
  <?php echo " Welcome " . $_SESSION['user_ad']; ?>
  <a class="active" href="adminpanel.php">Home</a>

  <a href="propanel.php">Product</a>
  <a href="cat.php">Category</a>
  
</div>
<div class="content">
  <div class="row">
    <a href="addcat.php" class="button">Add Categories</a>    

    </div>
    <section>
    <h1>List of Categories</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Categories</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
        <?php
        require_once('dbconnect.php');
        $sql = "SELECT * FROM categories ";
        $result =mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
        
              while($row = mysqli_fetch_array($result)){
        
      ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <td><a href = "delete.php?id=<?php echo $row['id']   ?>" </a>Remove</td> 
          </tr>
          <?php
              }
            }
      
          ?>
    </table>

  </section>

  
</div>
</body>
</html>
