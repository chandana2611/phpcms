<?php
error_reporting(E_ERROR | E_PARSE);
include("config.php");
session_start();
$scmuid =  $_POST['scmuid'];
$scms =  $_POST['scms'];
$ids = $_SESSION['login_user'];

if($ids==3||$ids==2){
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $bt = $_POST['button'];
    
    $Sem =$_POST['Sem']; 
        $CGPA =$_POST['CGPA']; 
        $SGPA =$_POST['SGPA'];
        
    if($bt == "Edit"){
        $sql = "UPDATE engmarks SET sem='$Sem',cgpa='$CGPA',sgpa='$SGPA'  WHERE usn = '$scmuid' AND sem='$scms'";

        if (mysqli_query($db, $sql)) {
            header("location: studenth.php");
        } else {
          echo "Error updating record: " . mysqli_error($db);
        }
    }
    if($bt == "Delete"){
        $sql = "DELETE FROM engmarks  WHERE usn = '$scmuid' AND sem='$scms'";
        if ($db->query($sql) === TRUE) {
            header("location: studenth.php");
          } else {
            echo "Error deleting record: " . $db->error;
          }
          
    }
}



} ?>