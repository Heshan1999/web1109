


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Sample App</title>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      
    </div>
    
    <!-- Start Here -->
   
    <table width='80%' border=1>

    <tr>
    <th> ID </th>
        <th>User Nick Name </th>
        <th>User Email</th>
        <th>user Login Name</th>
        <th>Action</th>
    </tr>
    
    
    
    <?php
    include_once("db/db.php");
    $result1 = mysqli_query($mysqli, "SELECT * FROM wp_users");	
    ?>
    <?php while($user_data = mysqli_fetch_array($result1) ) : ?>
        <tr>
            <td><?php echo($user_data['ID']);?></td>
            <td><?php echo($user_data['user_nicename']);?></td>
            <td><?php echo($user_data['user_email']);?></td>
            <td><?php echo($user_data['user_login']);?></td>
            <td><a href='edit.php?id=<?php echo($user_data['ID']);?>'>Edit</a> | <a href='delete.php?id=<?php echo($user_data['ID']);?>'>Delete</a></td>
            
        </tr>
        
    <?php endwhile; ?>
    

    
    </table>

  </div>
</div>
    
</body>
</html>