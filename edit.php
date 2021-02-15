<?php
    include_once("db/db.php");

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];

        $proname =  $_POST['pname'];
        $provalue =  $_POST['pro_value'];
        $cat =  $_POST['cat'];
        $des =  $_POST['description'];
        $pro_img =  $_FILES['pro_img']['name'];
        $tempname = $_FILES["pro_img"]["tmp_name"];
        $target = "images/".$image;
        

        $result = mysqli_query($con, "UPDATE product SET cat ='$cat', pro_value = '$provalue', pro_img ='$pro_img', description='$des', pname='$proname' WHERE pro_id = $id");
       
        if (move_uploaded_file($tempname, $target))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      }

        header("Location: productedit.php");
        

    }


?>

<?php 
    $id=$_GET['id'];

    $result = mysqli_query($con,"SELECT * FROM product WHERE pro_id=$id");

    while($product_data = mysqli_fetch_array($result))
    {
       $proname =  $product_data['pname'];
       $provalue = $product_data['pro_value'];
       $cat = $product_data['cat'];
       $des = $product_data['description'];
       $img = $product_data['pro_img'];
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
        <?php include_once("nav.php");?>
        
		
		
		<center><h1>UPDATE PRODUCT</h1> <br />

	<div class="productcontainer">
  		<form name="update_pro_Form" action="edit.php" enctype="multipart/form-data" method="post">
    			<div class="row">
     			 	<div class="col-25">
       				 <label for="pname">Product Name</label>
     			 	</div>

      				<div class="col-75">
        			<input type="text" id="pname" name="pname" value=<?php echo $proname;?>>
      				</div>
    			</div>


    			<div class="row">
      				<div class="col-25">
        			<label for="category">Product Category</label>
      				</div>

      				<div class="col-75">
        			<select id="category" name="cat">
                
   
                    
          				
          				<option value="1"><?php
                        
                        

                        if ($cat = 1) {
                            
                        echo "WOMEN'S";
                        
                        } else {
                        
                        }
                    ?></option>
          				<option value="2"><?php
                        
                        

                        if ($cat = 2) {
                            
                        echo "MEN'S";
                        
                        } else {
                        
                        }
                    ?></option>
                    <option value="3"><?php
                        
                        

                        if ($cat = 3) {
                            
                        echo "KID's";
                        
                        } else {
                        
                        }
                    ?></option>
        			</select>
      				</div>
    			</div>

			<div class="row">
			
				<div class="col-25">
        			<label for="price">Price</label>
      				</div>
				
				<div class="col-75">
        			<input type="text" id="price" name="pro_value" value=<?php echo $provalue;?>>
      				</div>
				
			</div>
   

			<div class="row">
				<div class="col-25">
        			<label for="description">Description</label>
      				</div>
      
				<div class="col-75">
        			<textarea id="description" name="description" value="" style="height:150px"><?php echo $des;?></textarea>
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
      			<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
    			</div>    
 
			<div class="row">
      			<input type="submit" value="update" name="update">
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
