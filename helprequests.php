<?php
 
include_once("db/db.php");    //connect to the database

$result= mysqli_query($con,"SELECT * FROM help");


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
	
<center><h1>Help Requests</h1></center>
<br>
<br>
<table class="tabledisplayuser">
  <tr>
    <th>No,</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th></th>
  </tr>

  <?php while($help_data = mysqli_fetch_array($result) ) : ?>
        <tr>
            <td><?php echo($help_data['id']);?></td>
            <td><?php echo($help_data['hname']);?></td>
            <td><?php echo($help_data['email']);?></td>
            <td><?php echo($help_data['msg']);?></td>
            <td><a href='deleteH.php?id=<?php echo($help_data['id']);?>'>Delete</a> </td>
            
        </tr>
        
    <?php endwhile; ?>
</table>

</div>

</header>
</body>

</html>