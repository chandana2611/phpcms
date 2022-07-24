<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = $_POST['USN'];
      $mypassword =$_POST['spassword']; 
      
      $sql = "SELECT usn FROM studentlogin WHERE usn = '$myemail' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      
    
		
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $active = $row["usn"];
          
         $_SESSION['login_user'] = 1;
         $_SESSION['USN'] = $active;
         if($active!=""){
            header("location: student.php");

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