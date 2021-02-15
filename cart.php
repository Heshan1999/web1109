<?php include_once("db/db.php");

$id = $_GET['id'];


if(isset($_POST['submit'])) {
        
        
    
    
    $pro_id   = $_POST['pro_id'];
    $quantity   = $_POST['quantity'];
    $price   = $_POST['price'];
    $user_id   = $_POST['user_id'];    
    $pay_method_id   = $_POST['pay_method_id'];
   


  // image file directory
  


  $mysqli = mysqli_connect("localhost", "root", "", "ecomweb");

   


    $result = mysqli_query($mysqli, "INSERT INTO cart (pro_id,quantity,price,user_id,pay_method_id) VALUES ('$pro_id','$quantity','$price','$user_id','$pay_method_id')");
}

?>

<?php
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["product_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="newstyles.css" />
	
<title>cart</title>
</head>

<body>
	 <!--Header-->
    <header id="home" class="header">
        <!--navigation-->
        <?php include_once("nav.php");?>
        <!--cart section-->
        
        <div class="cart-page">
            <table class="cartdisplay">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
                ?>
                <form name="odersForm" action="cart.php" enctype="multipart/form-data" method="post">
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/<?php echo $values["product_image"]; ?>">
                            <input type="text" id="oname" value="<?php echo $id; ?>" name="user_id" placeholder="">
                            <div>
                            <p><?php echo $values["product_name"]; ?></p>
                            <input type="text" id="oname" value="<?php echo $values["product_id"]; ?>" name="pro_id" placeholder="">
                            <small>Price: LKR
                            <input type="text" id="oname" value="<?php echo $values["product_price"]; ?>" name="price" placeholder=""></small>
                            <br>
                            <a href="cart.php?action=delete&id=<?php echo $values["product_id"]; ?>">remove</a>
                            </div>

                        </div>
                    </td>
                    <td><input type="number" name="quantity" value="1"></td>
                    <td>$50.00</td>
                </tr>
            </table>
            
            <div class="cartdisplay" id="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td><?php
							$total = $total + ($values["product_quantity"] * $values["product_price"]);
						}
					?></td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>LKR. <?php echo number_format($total, 2); ?></td>
                    </tr>

                    <tr>
                        <td><select name="pay_method_id">
                            <option value="Visa">Visa</option>
                            <option value="Cash">Cash On dilivery</option>
                        </select></td>
                        <td><input style="width:200px" type="submit" value="submit" name="submit"></td>
                    </tr>

                    
                    <?php
					}
                    ?>
                </table>

            </div>
                </div>

	
        <br />
        <!---footer section---->
		
		  <footer id="footer" class="section footer">
            <div class="container">
                <div class="footer-container">
                    <div class="footer-center">
                        <h3>CONTACT US</h3>
                        <div>
                            <span>
                </span> Reid Avenue , Colombo
                        </div>
                        <div>
                            <span>
                </span> company@gmail.com
                        </div>
                        <div>
                            <span>
                </span> 011 8558551
                        </div>
                        <div>
                            <span>
                </span> CMB , SRI LANKA
                        </div>
                    </div>
                    
                    <div class="footer-center">

                    </div>
                    <div class="footer-center">

                    </div>
                </div>
            </div>
            </div>
        </footer>
</body>
</html>
