<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
<script src="https://kit.fontawesome.com/6d5ca9b667.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="sidebar">
      <?php echo " Welcome " . $_SESSION['user_ad']; ?>
  <a class="active" href="index.php">Home</a>
  <a href="#news">Order</a>
  <a href="propanel.php">Product</a>
  <a href="cat.php">Category</a>
  <a href="user.php">User</a>
  <a href="logout.php">Logout</a>

</div>
      <style>
        table {\
            width: 100%;
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
            <h1>User List</h1>

            <table>
                  <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                  </tr>
                        <?php
                        require_once('dbconnect.php');
                        $sql = "SELECT * FROM user_info ";
                        $result =mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result) > 0){
        
                        while($row = mysqli_fetch_array($result)){
        
      ?>
                  <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['Full_Name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Password']; ?></td>
                       <!--  <td><a href = "delete.php?ID=<?php echo $row['ID']   ?>" <i class="fas fa-times"></i></a></td>  -->
                  </tr>
                  <?php
                              }
                        }
                  
                  ?>
            </table>
      </section>

</body>
</html>