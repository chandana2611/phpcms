<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $usn = $_POST['usn'];
        $Club =$_POST['Club']; 
        $Points =$_POST['Points']; 

        $sql = "INSERT INTO studentcocuri (usn, cluborg, points)
    VALUES ('$usn', '$Club', '$Points')";
    
    if (mysqli_query($db, $sql)) {
        header("location: student.php");
        }
     else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

        
    }    

  
?>