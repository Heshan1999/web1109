<?php


	if(isset($_POST['submit'])) {
        
        
        $name = $_POST['hname'];
		$email = $_POST['email'];
        $msg   = $_POST['msg'];



        $mysqli = mysqli_connect("localhost", "root", "", "ecomweb");

        
	
		$result = mysqli_query($mysqli, "INSERT INTO help(hname,email,msg) VALUES ('$name','$email','$msg')");
        
  
		
	}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="newstyles.css" />

    <title>Help</title>
</head>

<body>
    <header id="home" class="header">
    <?php include_once("nav.php");?>

               <div class="help-header">
                <h1>How can we help?</h1>
                
            
                </div>

    <br /> <br />
        <!-- Main-->
    <div class="center">
    <main>
       <center>
        <div class="help1"> <br />
            <table class="center">

                <tr>
                    <td style="padding: 30px;"> 
                        <a href="help.html#A"><div class="item1" id="A1"> <center>
                            <img src="./images/account.png"/>
                             <h2>Account</h2>
                            </center>
                        </div></a> 
                    </td>
                    <td style="padding: 30px;">  
                        <a href="help.html#P"><div class="item1">
                            <center>
                            <img src="./images/product.png"/>
                             <h2>Products</h2>
                            </center>
                            
                            </div></a>
                    </td>
                    <td style="padding: 30px;"> 
                        <a href="help.html#D"><div class="item1">
                            <center>
                            <img src="./images/delivery.png"/>
                             <h2>Delivery</h2>
                            </center> 
                        </div></a>
                    </td>
                </tr>

            </table>
        </div>
    </center>
               <br /><br />
            <!--Contact us form-->
            
            <center><h1 id="CU">Contact Us</h1> <br />

            <div class="productcontainer">
                  <form name="helpForm" action="help.php" onsubmit="return validateForm()" method="post">
                        <div class="row">
                              <div class="col-25">
                                <label for="hname">Name</label>
                              </div>
        
                              <div class="col-75">
                            <input type="text" id="hname" name="hname">
                              </div>
                        </div>
        
        
        
                    <div class="row">
                    
                        <div class="col-25">
                            <label for="email">E-mail</label>
                              </div>
                        
                        <div class="col-75">
                            <input type="text" id="email" name="email">
                              </div>
                        
                    </div>
           
        
                    <div class="row">
                        <div class="col-25">
                            <label for="message">Message</label>
                              </div>
              
                        <div class="col-75">
                            <textarea id="msg" name="msg" style="height:150px"></textarea>
                              </div>
                        </div>
         
                    <div class="row">
                          <input type="submit" value="submit" name="submit">
                        </div>
                    </div>
                
              </form>

              <br /><br /><br />


              <div class="help2"> <br />
                <h1 style="color: white;">FREQUENTLY ASKED QUESTIONS</h1>
                    </div>
               
                <br /><br /><br />

                        <img src="./images/account1.png" id="A"/>
                             
                        <h1>Account</h1> 
<br /><br />
                <table class="center">
                    <tr>
                        <td style="padding: 20px;">
                            <div class="help3">
                                
                                <h1>
                                    How do I create an account?
                                </h1><br />
                                <p>
                                    
                                    Please go to the Register page and complete the form there.

                                </p>
                                
                            </div>

                        </td>

                        <td style="padding: 20px;">
                            <div class="help3">
                                <h1>
                                    How do I delete my account?
                                </h1><br />
                                <p>
                                    In order to delete your account, simply contact us, via the online platform and the contact form on our site.
                                    Important: When we delete your account, we will no longer hold any information about your account
                                </p>
                                
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px;">
                            <div class="help3">
                                <h1>
                                    Why can't i access my account?
                                </h1><br />
                                <p>
                                    
                                    We kindly ask you to verify these few steps:<br />
                                    – Username and password are correctly filled in.<br />
                                    – There are no internet problems<br />
                                    If not please contact us.

                                </p>
                                
                            </div>

                        </td>

                        <td style="padding: 20px;">
                            <div class="help3">
                                <h1>
                                    How many devices can be simultaneously connected to the account?
                                </h1><br />
                                <p>
                                    
                                    It is actually not possible to be connected with several devices simultaneously, if you need an additional account, don’t hesitate to contact us.

                                </p>
                                
                            </div>

                        </td>
                    </tr>

                </table> 
                <a href="help.html#CU"><div class="help4">
                                <h2>Got a question? <br />
                                If you can't see it, Please Drop us a message! </h2>

                                </div></a>
                          
                                <!--Product FAQ-->
                                <br /><br /><br />

                                <img src="./images/product1.png" id="P"/>
                                     
                                <h1>Products</h1> 
        <br /><br />
                        <table class="center">
                            <tr>
                                <td style="padding: 20px;">
                                    <div class="help3">
                                        
                                        <h1>
                                            Where are your products shipped from?
                                        </h1><br />
                                        <p>
                                            
                                            We ship from 6 warehouses around Sri lanka . With so many shipping centers across the country, we provide some of the fastest, most affordable delivery options in the industry.
        
                                        </p>
                                        
                                    </div>
        
                                </td>
        
                                <td style="padding: 20px;">
                                    <div class="help3">
                                        <h1>
                                            Can I exchange my order?
                                        </h1><br />
                                        <p>
                                            We do not offer exchanges at this time. If you’d like to make an exchange, simply contact us.
                                        </p>
                                        
                                    </div>
        
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px;">
                                    <div class="help3">
                                        <h1>
                                            What do I do if my order is damaged?
                                        </h1><br />
                                        <p>
                                            
                                            We are so sorry to hear that your order arrived in less than pristine condition! Please let
                                             us make it right. Our customer service team will be more than happy to assist with processing a 
                                            replacement order or issuing a refund.
                                        </p>
                                        
                                    </div>
        
                                </td>
        
                                <td style="padding: 20px;">
                                    <div class="help3">
                                        <h1>
                                            How do I return my order?
                                        </h1><br />
                                        <p>
                                            Returns are accepted for all items only within 30 days of purchase.
        
                                        </p>
                                        
                                    </div>
        
                                </td>
                            </tr>
        
                        </table> 
                        <a href="help.html#CU"><div class="help4">
                                        <h2>Got a question? <br />
                                        If you can't see it, Please Drop us a message! </h2>
        
                                        </div></a>

                                        <!--DeliveryFAQ-->
                                  
                                        <br /><br /><br />

                                        <img src="./images/delivery1.png" id="D"/>
                                             
                                        <h1>Delivery</h1> 
                <br /><br />
                                <table class="center">
                                    <tr>
                                        <td style="padding: 20px;">
                                            <div class="help3">
                                                
                                                <h1>
                                                    Can you ship internationally or process international credit cards?
                                                </h1><br />
                                                <p>
                                                    At this time we do not offer international shipping and cannot accept credit cards from outside of Sri lanka.
                
                                                </p>
                                                
                                            </div>
                
                                        </td>
                
                                        <td style="padding: 20px;">
                                            <div class="help3">
                                                <h1>
                                                    How long will it take me to get my order?
                                                </h1><br />
                                                <p>
                                                    For standard shipping, you should receive your order within 4-5 business days
                                                </p>
                                                
                                            </div>
                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 20px;">
                                            <div class="help3">
                                                <h1>
                                                    Why did I only receive part of my order?
                                                </h1><br />
                                                <p>
                                                    
                                                    Don't worry, it's on its way! While we do our best to ship all orders in one package, 
                                                    there are times when orders will ship from multiple warehouses. 
                                                </p>
                                                
                                            </div>
                
                                        </td>
                
                                        <td style="padding: 20px;">
                                            <div class="help3">
                                                <h1>
                                                    Can I expedite my shipping?
                                                </h1><br />
                                                <p>
                                                    Yes! We offer expedited shipping options within checkout.
                
                                                </p>
                                                
                                            </div>
                
                                        </td>
                                    </tr>
                
                                </table> 
                                <a href="help.html#CU"><div class="help4">
                                                <h2>Got a question? <br />
                                                If you can't see it, Please Drop us a message! </h2>
                
                                                </div></a>
                                          
            </center>

</div>
                        </main>
                    
    <br /><br />
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