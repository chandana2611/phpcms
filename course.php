<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
  $ids = $_SESSION['login_user'];
  if($ids==3){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $Course = $_POST['Course'];
        $Sem =$_POST['Sem']; 
        // $REG =$_POST['REG']; 
        $Credits =$_POST['Credits'];
        $deptid =$_POST['deptid'];

        $sql = "INSERT INTO subjects (sem, courseTitle, credits, dept)
    VALUES ('$Sem', '$Course','$Credits','$deptid')";
    
    if (mysqli_query($db, $sql)) {
        header("location: studcourse.php");
        }
     else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
      header("location: hod.php");
    }

        
    }    

  }
?>