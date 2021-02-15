<?php 
include "./db/db.php";

  if (isset($_POST['email']) && isset($_POST['uid']) && isset($_POST['psw']) && isset($_POST['uname']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['repsw'])) {
    function validate($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
     
     $uid = validate($_POST['uid']);
     $fname = validate($_POST['fname']);
     $lname = validate($_POST['lname']);
     $uname = validate($_POST['uname']);
     $pass = validate($_POST['psw']); 
     $re_pass = validate($_POST['repsw']);
     $email= validate($_POST['email']);

     
     if($pass !== $re_pass){
        header("Location: index.php?error=pwddontmatch");
	    exit();
    }

      $sql = "UPDATE users SET id='$uid',fname='$fname',lname='$lname', username='$uname', email='$email',pwd='$pass'  WHERE id='$uid';";
      $update_query = mysqli_query($con, $sql);
           if ($update_query) {
                header("Location: ./index.php");
                echo("User details changed");
                
	         exit();
           }else {
	           	header("Location: index.php?error=unknownerror");
		        exit();
           }


    }else{
        header("Location: index.php");
        exit();
    }


?>  