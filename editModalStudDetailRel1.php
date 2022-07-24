<?php
error_reporting(E_ERROR | E_PARSE);
include("config.php");
session_start();
$sdduid =  $_POST['sdduid'];
$ids = $_SESSION['login_user'];

if($ids==3||$ids==2){
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $bt = $_POST['button'];
    
    $srel =$_POST['srel'];
    $sranme =$_POST['sranme'];
    $Gender =$_POST['Gender'];
    $rphno =$_POST['rphno'];

        
    if($bt == "Edit"){
        $sql = "UPDATE dependents SET 	relation='$srel',rname='$sranme',gender='$Gender',phno='$rphno'  WHERE usn = '$sdduid'";

        if (mysqli_query($db, $sql)) {
            header("location: studenth.php");
        } else {
          echo "Error updating record: " . mysqli_error($db);
        }
    }
    if($bt == "Delete"){
        $sql = "DELETE FROM dependents  WHERE usn = '$sdduid'";
        if ($db->query($sql) === TRUE) {
            header("location: studenth.php");
          } else {
            echo "Error deleting record: " . $db->error;
          }
          
    }
}



} ?>