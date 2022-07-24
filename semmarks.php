<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
  $ids = $_SESSION['login_user'];
  if($ids==3){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $usn = $_POST['usn'];
        $Sem =$_POST['Sem']; 
        $CGPA =$_POST['CGPA']; 
        $SGPA =$_POST['SGPA'];

        $sql = "INSERT INTO engmarks (usn, sem, cgpa, sgpa)
    VALUES ('$usn', '$Sem', '$CGPA','$SGPA')";
    
    if (mysqli_query($db, $sql)) {
        header("location: student.php");
        }
     else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
      header("location: hod.php");
    }

        
    }    

  }
?>