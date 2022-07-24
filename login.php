<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = $_POST['semail'];
      $mypassword =$_POST['spassword']; 
      
      $sql = "SELECT id FROM login WHERE email = '$myemail' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      
    
		
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $active = $row["id"];
          
         $_SESSION['login_user'] = 3;
         $_SESSION['semail'] = $active;

         if($active!=""){
            header("location: hod.php");   
        }else{
            header("location: index.php"); 
        }

    }
         
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
        
      }
   }
?>