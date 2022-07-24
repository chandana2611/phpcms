<?php if(isset($_POST['sendEmail'])){

// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
?>
<!doctype html>
<html>
   
   <head>
      <title>Sending Email</title>
   </head>
   
   <body>
      
      <?php
         $to = "ashish@rewathi.com";
         $subject = $_POST['Subject'];
         
         $message = $_POST['Message'];
        
         
         $header = "From:info@somedomain.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
             echo "<script type=\"text/javascript\">
              alert(\"Message sent successfully...\");
              window.location = \"student.php\"
              </script>";    
         }else {
            echo "<script type=\"text/javascript\">
              alert(\"Message could not be sent...\");
              window.location = \"student.php\"
              </script>";  
         }
      ?>
      
   </body>
</html>

<?php } ?>