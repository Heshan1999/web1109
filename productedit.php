<?php
 
include_once("db/db.php");    //connect to the database

$result= mysqli_query($con,"SELECT * FROM product");


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleCRUD.css">
    <link rel="stylesheet" href="newstyles.css">
</head>

<body>
<header id="home" class="header">
        <!--navigation-->
        <?php include_once("adminnav.php");?>
        <br><br>
	
<center><h1>Product Details Display</h1></center>
<br>
<br>
<table class="tabledisplayuser">
  <tr>
  <th>Product ID</th>
    <th>Product Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Description</th>
      <th>Image</th>
      <th>Action</th>
  </tr>
  <?php
    include_once("db/db.php");
    $result = mysqli_query($con, "SELECT * FROM product");	
    ?>
    <?php while($product_data = mysqli_fetch_array($result) ) : ?>
        <tr>
            <td><?php echo($product_data['pro_id']);?></td>
            <td><?php echo($product_data['pname']);?></td>
            <td>
            <?php
                        
                        

                        if ($product_data['cat'] == 1)  {
                            
                        echo "Women's";
                        
                        } elseif ($product_data['cat'] == 2) {
                        echo "Men's";
                        }
                        else{
                          echo "Kid's";
                        }
                    ?>
            
            <td><?php echo($product_data['pro_value']);?></td>
            <td><?php echo($product_data['description']);?></td>
            <td><img width="50" src='images/<?php echo($product_data['pro_img']);?>'/></td>
            <td><a href='edit.php?id=<?php echo($product_data['pro_id']);?>'>Edit</a> | <a href='delete.php?id=<?php echo($product_data['pro_id']);?>'>Delete</a></td>
            
        </tr>
        
    <?php endwhile; ?>
</table>

</div>

</header>
</body>

</html>