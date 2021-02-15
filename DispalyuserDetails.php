
<?php
 
include_once("db/db.php");    //connect to the database

$result= mysqli_query($con,"SELECT * FROM users");



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
        <?php include_once("nav.php");?>
        
        <br><br>
<center><h2>User Details Display</h2></center>
<br>
<br>
<table class="tabledisplayuser">
  <tr>
  <th>User ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>User role</th>

    
  </tr>
  <?php while($user_data = mysqli_fetch_array($result) ) : ?>
        <tr>
            <td><?php echo($user_data['id']);?></td>
            <td><?php echo($user_data['fname']);?></td>
            <td><?php echo($user_data['lname']);?></td>
            <td><?php echo($user_data['email']);?></td>
            <td><?php echo($user_data['username']);?></td>
            <td>
            <?php
                        
                        

                        if ($user_data['role'] == 1)  {
                            
                        echo "Admin";
                        
                        } else {
                        echo "General";
                        }
                    ?>
           
            
            
        </tr>
        
    <?php endwhile; ?>
</table>

</div>

</header>
</body>

</html>