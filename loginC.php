<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = $_POST['CID'];
      $mypassword =$_POST['spassword']; 
      
      $sql = "SELECT couid FROM coulogin WHERE couid = '$myemail' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      
    
		
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $active = $row["couid"];
          
         $_SESSION['login_user'] = 2;
         $_SESSION['CID'] = $active;
         if($active!=""){
            header("location: Counsellor.php");   
        }else{
         $error = "Your Login Name or Password is invalid";
         echo $error;
          
            
        }

    }
         
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
        
      }
   }
?>