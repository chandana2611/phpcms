<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
  $ids = $_SESSION['login_user'];
  if($ids==3){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $usn = $_POST['USN'];
        $Fname =$_POST['Fname']; 
        $Mname =$_POST['Mname']; 
        $Lname =$_POST['Lname'];
        $email =$_POST['email'];
        $dob =$_POST['dob'];
        $age =$_POST['age'];
        $deptid =$_POST['deptid'];
        $couid =$_POST['couid'];
        $sname =$_POST['sname'];
        $sper =$_POST['sper'];
        $cname =$_POST['cname'];
        $cper =$_POST['cper'];
        $phno =$_POST['phno'];
        $srel =$_POST['srel'];
        $sranme =$_POST['sranme'];
        $Gender =$_POST['Gender'];
        $rphno =$_POST['rphno'];
        $passcode =$_POST['passcode'];
        $dateOfBirth = $dob;
        $usn = strtoupper($usn);
        $today = date("d-m-Y");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        $age=$diff->format('%y');

        if(empty($usn)||empty($Fname)||empty($Lname)||empty($email)||empty($phno)||empty($passcode)||empty($dob)||empty($Gender)||empty($deptid)||empty($sname)||empty($sper)||empty($cname)||empty($cper)){
            echo "<script>alert('Please enter All required details');window.location.href='hod.php'</script>";
        }
        elseif(!ctype_alpha(str_replace(' ', '', $Fname))||!ctype_alpha(str_replace(' ', '', $Lname))||!ctype_alpha(str_replace(' ', '', $sname))||!ctype_alpha(str_replace(' ', '', $cname))){
            echo "<script>alert('Name can contain only alphabets');window.location.href='hod.php'</script>";
        }
        elseif($sper<0||$sper>100||$cper<0||$cper>100){
            echo "<script>alert('Check Marks');window.location.href='hod.php'</script>";

        }
        elseif(!ctype_alnum($usn)){
            echo "<script>alert('USN Must Contain Only alphabets and Numerics');window.location.href='hod.php'</script>";
        }
        elseif($age<18)
        {
            echo "<script>alert('Please check your date');window.location.href='hod.php'</script>";

        }
        // elseif(strlen(ltrim($phno,0))!= 10){  
        //     $mobilenoErr = "Mobile no must contain 10 digits.";
        //     echo "<script>alert('$mobilenoErr');window.location.href='hod.php'</script>";
        // }
        // elseif(!empty($rphno)&&strlen(ltrim($rphno,0))!= 10){
        //     $mobilenoErr = "Check Relation's Phone Number";
        //     echo "<script>alert('$mobilenoErr');window.location.href='hod.php'</script>";
        // }
        else{
            try{
            $sql = "INSERT INTO studentdetails (usn, Fname, Mname, Lname, Email, Dob, Age, deptid, cousid,phno)
            VALUES ('$usn', '$Fname', '$Mname','$Lname', '$email', '$dob','$age', '$deptid', '$couid','$phno')";
            
        
            if (mysqli_query($db, $sql)) {
            $sql1 = "INSERT INTO marks (usn, sname, spac, cname, cpuc)
            VALUES ('$usn', '$sname', '$sper','$cname', '$cper')";

                if (mysqli_query($db, $sql1)) {
                    $sql3 = "INSERT INTO dependents (usn, dname, relation, rname, gender, phno)
                    VALUES ('$usn', '$Fname','$srel', '$sranme','$Gender', '$rphno')";
                    if (mysqli_query($db, $sql3)) {
                        $sql4 = "INSERT INTO studentlogin (usn, passcode)
                    VALUES ('$usn', '$passcode')";
                    if (mysqli_query($db, $sql4)) {
                        header("location: studenth.php"); 
                    } 
                    }

                    }  
                
            }
            
            else 
            {
            

            echo "Error: " . $sql . "<br>" . mysqli_error($db);

            }
        }
            catch(Exception $e) {
                // $e->getMessage();
                echo '<script language="javascript">';
                echo 'alert("'.$e->getMessage().'");';  
                echo '</script>';
            }
            
        }


        
        }    

    }   
?>