<?php 

include_once("db/db.php");  

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "product_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'product_id'			=>	$_GET["id"],
				'product_name'			=>	$_POST["hidden_name"],
                'product_price'		    =>	$_POST["hidden_price"],
                'product_image'		    =>	$_POST["hidden_image"],
				'product_quantity'		=>	$_POST["hidden_quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'product_id'			=>	$_GET["id"],
			'product_name'			=>	$_POST["hidden_name"],
            'product_price'		=>	$_POST["hidden_price"],
            'product_image'		    =>	$_POST["hidden_image"],
			'product_quantity'		=>	$_POST["hidden_quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

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
				echo '<script>window.location="products.php"</script>';
			}
		}
	}
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="newstyles.css" />

    <title>Online Store</title>
</head>

<body>
    <!--Header-->
    <header id="home" class="product-hdr">
        <!--navigation-->
        <?php include_once("nav.php");?>
    </header>

        <!--Hero
        <div class="fade-in">
            <div><img src="./images/banner.png" class="hero-img" alt="" /></div>
            <div class="hero-content">

                <h2>
                    <span class="discount">70%</span>SALE OFF</h2>
                <h1>
                    <span>Summer Vibes</span>
                    <span>Mode on</span>
                </h1>
                <a href="#" class="btn">Shop Now</a>
            </div>
        </div>-->

        <div class="Container">
        <div class="cat-box">
                <ul>
                    <li><a href=#a>Women's Clothing</a></li>
                    <li><a href=#b>Men's Clothing</a></li>
                    <li><a href=#c>Kids Clothing</a></li>           
                </ul>
            
            </div>
            
        
        </div>
        <br> <br>
        <!-- WOMEN'PRODUCT -->
        <section class="product-list">
        <center>
         
            <div class="title">
                
                <h1><a id=a><b>WOMEN'S PRODUCTS</b></a></h1><br><br><br><br>
                <img src="images/b1.png" width="100%" height="30%">

            </div>
        <br> <br>
            
        </center>
        <button class="buy-btn"><a href=#top> Click here to go to the top </a></button>
        <br><br>
        <div class="product-container"> 

        <!--  Product -->
        <?php
            include_once("db/db.php");
            $result = mysqli_query($con, "SELECT * FROM product WHERE cat = 1 ORDER BY pro_id DESC");
        ?>

        <?php  while($user_data = mysqli_fetch_array($result)): ?>
            <form method="post" action="products.php?action=add&id=<?php echo($user_data['pro_id']);?>">
            <div class="card">
                <div class="title">
                    <?php echo($user_data['pname']);?>
                    <input type="hidden" name="hidden_name" value="<?php echo($user_data['pname']);?>" />
                </div>
                <div class="image">
                    <img src="images/<?php echo($user_data['pro_img']);?>">
                    <input type="hidden" name="hidden_image" value="<?php echo($user_data['pro_img']);?>" />
                </div>
                <div class="text">
                    Rs.<?php echo($user_data['pro_value']);?>
                    <input type="hidden" name="hidden_price" value="<?php echo($user_data['pro_value']);?>" />
                    <input type="hidden" name="hidden_quantity" value="1"/>
                </div>
                <div class="text">
                    <?php echo($user_data['description']);?>
                </div>
                <input type="submit" name="add_to_cart"  class="buy-btn" value="Buy Now" />
                
            </div>
</form>
        <?php endwhile; ?>

        
    </section>



    <!-- MEN'S PRODUCTS -->

    <section class="product-list">
        <center>
         
            <div class="title">
            
                <h1><a id=b><b>MEN'S PRODUCTS</b></a></h1><br><br><br><br>
                <img src="images/b2.png" width="100%" height="30%">

            </div>
        <br> <br>
            
        </center>
        <br />
        <button class="buy-btn"><a href=#top> Click here to go to the top </a></button>
        <br><br>

        <div class="product-container"> 

        <!--  Product -->
        <?php
            include_once("db/db.php");
            $result = mysqli_query($con, "SELECT * FROM product WHERE cat = 2 ORDER BY pro_id DESC");
        ?>

        <?php  while($user_data = mysqli_fetch_array($result)): ?>

            <div class="card">
                <div class="title">
                  <?php echo($user_data['pname']);?>
                </div>
                <div class="image">
                    <img src="images/<?php echo($user_data['pro_img']);?>">
                </div>
                <div class="text">
                    Rs.<?php echo($user_data['pro_value']);?>
                </div>
                <div class="text">
                    <?php echo($user_data['description']);?>
                </div>
                <button class="buy-btn">
                    Buy Now
                </button>
            </div>

        <?php endwhile; ?>

       
    </section>

    <!-- KIDS CLOTHING -->

    
    <section class="product-list">
        <center>
         
            <div class="title">
                <h1><a id=c><b>KIDS STORE</b></a></h1><br><br><br><br>
                <img src="images/b3.png" width="100%" height="30%">

            </div>
        <br> <br>
            
        </center>
        <button class="buy-btn"><a href=#top> Click here to go to the top </a></button>
        <br><br>

        <br />
        <div class="product-container"> 

        <!-- Product -->
        <?php
            include_once("db/db.php");
            $result = mysqli_query($con, "SELECT * FROM product WHERE cat = 3 ORDER BY pro_id DESC");
        ?>

        <?php  while($user_data = mysqli_fetch_array($result)): ?>

            <div class="card">
                <div class="title">
                     <?php echo($user_data['pname']);?>
                </div>
                <div class="image">
                    <img src="images/<?php echo($user_data['pro_img']);?>">
                </div>
                <div class="text">
                    Rs.<?php echo($user_data['pro_value']);?>
                </div>
                <div class="text">
                    <?php echo($user_data['description']);?>
                </div>
                <button class="buy-btn">
                    Buy Now
                </button>
            </div>

<?php endwhile; ?>

        
    </section>

</div>

</body>
    <footer id="footer" class="section footer">
            <div class="footer-container">
                <div class="footer-center">
                    <h3>CONTACT US</h3>
                    <div>
                        <span>
            </span> 42 Dream House, Dreammy street, 7131 Dreamville, USA
                    </div>
                    <div>
                        <span>
            </span> company@gmail.com
                    </div>
                    <div>
                        <span>
            </span> 456-456-4512
                    </div>
                    <div>
                        <span>
            </span> Dream City, USA
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
    <!-- End Footer -->
