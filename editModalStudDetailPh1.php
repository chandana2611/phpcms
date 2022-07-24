<?php
error_reporting(E_ERROR | E_PARSE);
include("config.php");
session_start();
$spuid =  $_POST['spuid'];
$spph =  $_POST['spph'];
$ids = $_SESSION['login_user'];

if($ids==3||$ids==2){
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $bt = $_POST['button'];
    
        $phno =$_POST['phno']; 
        
    if($bt == "Edit"){
        $sql = "UPDATE studentphno SET 	phno='$phno' WHERE 	usn = '$spuid' AND phno = '$spph'";

        if (mysqli_query($db, $sql)) {
            header("location: studenth.php");
        } else {
          echo "Error updating record: " . mysqli_error($db);
        }
    }
    if($bt == "Delete"){
        $sql = "DELETE FROM studentphno  WHERE usn = '$spuid' AND phno = '$spph'";
        if ($db->query($sql) === TRUE) {
            header("location: studenth.php");
          } else {
            echo "Error deleting record: " . $db->error;
          }
          
    }
}



} ?>