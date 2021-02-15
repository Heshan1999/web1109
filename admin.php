<?php


$_SESSION["role"]=1;
if($_SESSION["role"]==1){
    
  } else {
    echo "you need the admin role to view this page!";
  }
?>


<!doctype html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="newstyles.css" />

	
<title>admin page</title>
	
	
	
</head>

<body>
    <!--Header-->
    <header id="home" class="headeradmin">
        <!--navigation-->
        <?php include_once("adminnav.php");?>
	
	<main>
            <div class="advert-center container">
                <div class="advert-box-admin"> 
                    <div class="dotted">
                        <div class="content">
                            <h2>Orders</h2>
                            <span>
                                

                            <?php 

	include_once("db/db.php");
	
	
	// Fetch Query
	$query = "SELECT id FROM cart"; 
	
	// Execute the query and store the result set 
	$result = mysqli_query($con, $query); 
	
	if ($result) { 
		// it return number of rows in the table. 
		$row = mysqli_num_rows($result); 
		if ($row) { 
			 	printf("Total Orders : " . $row); 
			} 
		// close the result. 
		mysqli_free_result($result); 
	} 

// Output : Number of row in the table : 5
?> 



                            </span>
							
                        </div>
						<img src="./images/adicon1.png " alt=""/>
                    </div>
                </div>
                <div class="advert-box-admin">
                    <div class="dotted">
                        <div class="content">
                            <h2> 

                                Sales <br /> Revenue </h2>

                                <span>
                                <?php 

include_once("db/db.php");


$sql="SELECT sum(price) as total FROM cart";

$result2 = mysqli_query($con,$sql);

while ($row2 = mysqli_fetch_assoc($result2))
{ 
   echo "LKR.", $row2['total'];
}



?>


</span>
                        </div>
                    </div>
                    <img src="./images/person.png " alt=""/>
                </div>
                <a href="helprequests.php" ><div class="advert-box-admin">
                    <div class="dotted">
                        <div class="content">
                            <h2> 
                                Help<br /> Requests
                            </h2>
                            <span>
                            <?php 

include_once("db/db.php");


// Fetch Query
$query3 = "SELECT id FROM help"; 

// Execute the query and store the result set 
$result3 = mysqli_query($con, $query3); 

if ($result3) { 
    // it return number of rows in the table. 
    $row3 = mysqli_num_rows($result3); 
    if ($row3) { 
             printf("Total Help  : " . $row3); 
        } 
    // close the result. 
    mysqli_free_result($result3); 
} 

// Output : Number of row in the table : 5
?> 

</span>
                            
                        </div>
                    </div>
                    <img src="./images/chart.png " alt=""/>
                </div></a>
                
            </div>
  
	
	
		<center>
			<div class="card">
				
				 	<h1>User Management functions</h1>
				<table>
                    <tr>
                        <td style="padding: 40px; text-align: center;">
               <a href="register/register.php" ><div class="userbox">
                    <div class="userdotted">
                       
				<div class="content">
                            <h2> 
                                Add Users
							</h2>
                        </div>
                    </div>
                </div></a>
            </td >

            <td style="padding: 40px; text-align: center;">
                <a href="DispalyuserDetails.php" ><div class="userbox">
                    <div class="userdotted">
                        <div class="content">
                            <h2> 
                            View User
                            </h2>
                            
                        </div>
					</div>
                </div></a>
            </td>
            
            <td style="padding: 40px; text-align: center;">
                <a href="useredit.php" ><div class="userbox">
                    <div class="userdotted">
                        <div class="content">
                            <h2> 
                            Edit User
                            </h2>
                            
                        </div>
					</div>
                </div></a>
            </td>
            </tr>
            </table>	    
            </div>
    
				  
             
			
		
			<div class="card">
				
				 	<h1>Content Management functions</h1>
                     <table>
                     <tr>
                         <td style="padding: 40px; text-align: center;">	 
                <a href="productreg.php"><div class="userbox">
                    <div class="userdotted">
                       
				<div class="content">
                            <h2> 
                                Add products
							</h2>
                        </div>
                    </div>
                </div></a>
            </td>

            <td style="padding: 40px; text-align: center;">
                <a href="productdetails.php" ><div class="userbox">
                    <div class="userdotted">
                        <div class="content">
                            <h2> 
                                View Products 
                            </h2>
                            
                        </div>
					</div>
                </div></a>
                </td>
            
            <td style="padding: 40px; text-align: center;">
                <a href="productedit.php" ><div class="userbox">
                    <div class="userdotted">
                        <div class="content">
                            <h2> 
                                Edit product content
                            </h2>
                            
                        </div>
					</div>
                </div></a>
                </td>
                     </tr>
                    </table>
                
            </div>
  
				  
             
	
	<div class="card"> 

			</center>
	  
			 
			
	</main>
		
	
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

    <!--GSAP-->
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js
    "></script>
    <!--Google Fonts-->
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"/>

    <!--Custom Script-->
    <script src="./js/index.js"></script>
							   
	
</body>
</html>
