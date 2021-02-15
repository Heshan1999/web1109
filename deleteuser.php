<?php 
include "./db/db.php";
if(isset($_GET['id']) && is_numeric($_GET['id'])){

  $usersId=$_GET['id'];
  $sql = "DELETE FROM users WHERE id='$usersId';";
  $delete_user = mysqli_query($con,$sql);

  if($delete_user){

    header("location:logout.php");
    exit();
  }else{
    header("location:./login/login.php?error=cantdelete");
    exit();
  }
}

?>