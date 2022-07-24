<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();

  
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $usn = $_POST['usn'];
        $coid =$_POST['coid']; 

        $sql = "INSERT INTO courses (usn, couid)
    VALUES ('$usn', '$coid')";
    
    if (mysqli_query($db, $sql)) {
        header("location: student.php");
        }
     else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

        
    }    

?>