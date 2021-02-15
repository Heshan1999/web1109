<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="newstyles.css" />

    <title>Envy Online Store</title>
</head>

<body>
    <!--Header-->
    <header id="home" class="header">
        <!--navigation-->
            <?php include_once("nav.php");?>
        <!--Hero-->
        <div class="fade-in">
            <div>
                <img src="./images/banner1.png" class="hero-img" alt="" />
            </div>
            <div class="hero-content">

                <!--  <h2>
                    <span class="discount">70%</span>SALE OFF</h2> -->
                <h1>
                    <span>VISIT OUR</span>
                    <span>ONLINE STORE</span>
                </h1>
                <a href="products.php" class="btn">Shop Now</a>
            </div>
        </div>

    </header>
    
    <!-- Main-->
    <main>
        <section class="section advert">
            <div class="advert-center container">
                <div class="advert-box">
                    <div class="dotted">
                        <div class="content">
                            <h2>
                            <a href="products.php#a" >
                                Women's<br /> Clothing
                            </h2>
                            
                        </div>
                    </div>
                    <img src="./images/advert1.png " alt="" /></a>
                </div>
                <div class="advert-box">
                    <div class="dotted">
                        <div class="content">
                            <h2>
                            <a href="products.php#b" >
                                Men's<br /> Clothing
                            </h2>
                        </div>
                    </div>
                    <img src="./images/advert2.png " alt="" /></a>
                </div>
                <div class="advert-box">
                    <div class="dotted">
                        <div class="content">
                            <h2>
                            <a href="products.php#c">
                                Kids<br /> Clothing
                            </h2>
                            
                        </div>
                    </div>
                    <img src="./images/advert3.png " alt="" /></a>
                </div>

            </div>
        </section>

        <!-- Product Banner-->
        <section class="section">
            <div class="product-banner">
                <div class="left">
                 <img src="./images/test1.jpg" alt="" /> 
                </div>
                <div class="right">
                    <div class="content">
                        <h2><span class="discount">70%</span>SALE OFF</h2>
                        <h1>
                            <span> Collect Your</span>
                            <span> Collection</span>
                        </h1>
                        <a href="products.php" class="btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </section>

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
        <!-- End Footer -->