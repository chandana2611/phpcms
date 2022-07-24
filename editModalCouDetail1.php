<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
   $cousid =  $_POST['cousid'];
   $ids = $_SESSION['login_user'];
  
  if($ids==3){
    if($ids==3){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $bt = $_POST['button'];
            
            $counname =$_POST['counname']; 
            $deptid =$_POST['deptid']; 
            $YOJ =$_POST['YOJ'];
                
            if($bt == "Edit"){
                $sql = "UPDATE counsillar SET 	Couname='$counname',YOJ='$YOJ',Deptid='$deptid' WHERE cousid = '$cousid'";
        
                if (mysqli_query($db, $sql)) {
                    header("location: Counsellorh.php");
                } else {
                  echo "Error updating record: " . mysqli_error($db);
                }
            }
            if($bt == "Delete"){
                $sql = "DELETE FROM counsillar  WHERE cousid = '$cousid'";
                if ($db->query($sql) === TRUE) {
                    header("location: Counsellorh.php");
                  } else {
                    echo "Error deleting record: " . $db->error;
                  }
                } 
            }     
            }
             } ?>
