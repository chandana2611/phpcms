<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
  $ids = $_SESSION['login_user'];
  if($ids==3){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $couid = $_POST['couid'];
        $counname =$_POST['counname'];         
        $YOJ =$_POST['YOJ'];
        $deptid =$_POST['deptid']; 
        $passcode =$_POST['passcode'];

        $sql = "INSERT INTO counsillar (cousid, Couname, YOJ, Deptid)
    VALUES ('$couid', '$counname', '$YOJ','$deptid')";
    
    if (mysqli_query($db, $sql)) {
        $sql1 = "INSERT INTO coulogin (couid, passcode)
    VALUES ('$couid', '$passcode')";
    if (mysqli_query($db, $sql1)) {
        header("location: Counsellorh.php");
    }
        }
     else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
      header("location: hod.php");
    }

        
    }    

  }
?>