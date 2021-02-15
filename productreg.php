<?php


	if(isset($_POST['submit'])) {
        
        
        $category = $_POST['cat'];
		$price = $_POST['pro_value'];
        $des   = $_POST['description'];
        $image =$_FILES['pro_img']['name'];
        $tempname = $_FILES["pro_img"]["tmp_name"];
        $target = "images/".$image;
        $pname = $_POST['pname'];


  	// image file directory
  	


      $mysqli = mysqli_connect("localhost", "root", "", "ecomweb");

        $msg = "";

	
		$result = mysqli_query($mysqli, "INSERT INTO product(cat,pro_value,pro_img,description,pname) VALUES ('$category','$price','$image','$des','$pname')");

        if (move_uploaded_file($tempname, $target))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      }

        
  
		
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="newstyles.css" />
	
<title>addproduct</title>
</head>

<body>
	 <!--Header-->
    <header id="home" class="header">
        <!--navigation-->
        <?php include_once("adminnav.php");?>
		
		
		<center><h1>ADD PRODUCT</h1> <br />

	<div class="productcontainer">
  		<form name="productForm" action="productreg.php" enctype="multipart/form-data" method="post">
    			<div class="row">
     			 	<div class="col-25">
       				 <label for="pname">Product Name</label>
     			 	</div>

      				<div class="col-75">
        			<input type="text" id="pname" name="pname" placeholder="Enter product name">
      				</div>
    			</div>


    			<div class="row">
      				<div class="col-25">
        			<label for="category">Product Category</label>
      				</div>

      				<div class="col-75">
        			<select id="category" name="cat">
          				<option value="1">WOMEN'S</option>
          				<option value="2">MEN'S</option>
          				<option value="3">KIDS</option>
        			</select>
      				</div>
    			</div>

			<div class="row">
			
				<div class="col-25">
        			<label for="price">Price</label>
      				</div>
				
				<div class="col-75">
        			<input type="text" id="price" name="pro_value" placeholder="Enter price">
      				</div>
				
			</div>
   

			<div class="row">
				<div class="col-25">
        			<label for="description">Description</label>
      				</div>
      
				<div class="col-75">
        			<textarea id="description" name="description" placeholder="Enter description" style="height:150px"></textarea>
      				</div>
    			</div>
			
			<div class="row">
				<div class="col-25">
					
        			<label for="pro_img">Image</label>
					
      				</div>
      
				<div class="col-75">
					<input type="file" name="pro_img">
      				</div>
    			</div>
 
			<div class="row">
      			<input type="submit" value="submit" name="submit">
    			</div>
			</div>
		</center>
  	</form>
		
		<br />
		
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
