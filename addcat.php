<!DOCTYPE html>
<html lang= 'en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    
    <body>
        <div class="form-container">
            <form action="add_moconnection.php" method="post">
                <h3>Add Category</h3>
               
            <div class= "form-group">
                <label >Category Name</label>
                <input type="name" name="category" placeholder="" class="box" required >
            </div>
            <div class= "form-group">
                <label >Description</label> 
                <input type="text" name="Description" placeholder="" class="box"required>
            </div>
                <input type="submit" value="Submit" name="submit" class="form-btn">

            </form>
        </div>
    </body>
</head>
</html>