<?php 
   include("config.php");
if(isset($_POST["Import"])){



    
$filename=$_FILES["file"]["tmp_name"];   

     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");

          while (($getData = fgetcsv($file, ",")) !== TRUE)
           {
           	if(!empty($getData)){

             $sql = "INSERT into studentdetails (usn,Fname,Mname,Lname,Email,Dob,Age,deptid,cousid,password) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."')";
                   $result = mysqli_query($db, $sql);
               }

// echo "<pre>";
// print_r($sql);
// echo "</pre>";
// exit('dfdf');
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"import.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"import.php\"
          </script>";
        }
           }
      
           fclose($file);  
     }
  }   

  ?>