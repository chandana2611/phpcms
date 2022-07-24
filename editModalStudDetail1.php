<?php
error_reporting(E_ERROR | E_PARSE);
include("config.php");
session_start();
$sduid =  $_POST['sduid'];
$sdfn =  $_POST['sdfn'];
$ids = $_SESSION['login_user'];

if($ids==3||$ids==2){
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $bt = $_POST['button'];
    $usn = $_POST['USN'];
        $Fname =$_POST['Fname']; 
        $Mname =$_POST['Mname']; 
        $Lname =$_POST['Lname'];
        $email =$_POST['email'];
        $dob =$_POST['dob'];
        $age =$_POST['age'];
        $deptid =$_POST['deptid'];
        $couid =$_POST['couid'];
    if($bt == "Edit"){
        $sql = "UPDATE student SET 	usn='$usn',Fname='$Fname',Mname='$Mname',Lname='$Lname',Email='$email',Dob='$dob',Age='$age',deptid='$deptid',cousid='$couid' WHERE usn = '$sduid' AND Fname = '$sdfn'";

        if (mysqli_query($db, $sql)) {
            header("location: studenth.php");
        } else {
          echo "Error updating record: " . mysqli_error($db);
        }
    }
    if($bt == "Delete"){
        $sql = "DELETE FROM student  WHERE usn = '$sduid' AND Fname = '$sdfn'";
        if ($db->query($sql) === TRUE) {
            header("location: studenth.php");
          } else {
            echo "Error deleting record: " . $db->error;
          }
          
    }
}



} ?>