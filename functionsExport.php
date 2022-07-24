<?php 
 include("config.php");
 if(isset($_POST["Export"])){     
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=studentData.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'usn', 'Fname', 'Mname', 'Lname','Email','Dob', 'Age', 'deptid','cousid','password'));  
      $query = "SELECT * from studentdetails ORDER BY ID DESC";  
      $result = mysqli_query($db, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 

 ?>