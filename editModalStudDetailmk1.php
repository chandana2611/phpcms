<?php
error_reporting(E_ERROR | E_PARSE);
include("config.php");
session_start();
$smuid =  $_POST['smuid'];
$ids = $_SESSION['login_user'];

if($ids==3||$ids==2){
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $bt = $_POST['button'];
    
    $sname =$_POST['sname'];
    $sper =$_POST['sper'];
    $cname =$_POST['cname'];
    $cper =$_POST['cper']; 
        
    if($bt == "Edit"){
        $sql = "UPDATE marks SET sname='$sname',spac='$sper',cname='$cname',cpuc='$cper' WHERE usn = '$smuid'";

        if (mysqli_query($db, $sql)) {
            header("location: studenth.php");
        } else {
          echo "Error updating record: " . mysqli_error($db);
        }
    }
    if($bt == "Delete"){
        $sql = "DELETE FROM marks  WHERE usn = '$smuid'";
        if ($db->query($sql) === TRUE) {
            header("location: studenth.php");
          } else {
            echo "Error deleting record: " . $db->error;
          }
          
    }
}



} ?>