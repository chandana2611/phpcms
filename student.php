<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
  $ids = $_SESSION['login_user'];
  $sns = $_SESSION['USN'];
  if($ids==3||$ids==1){
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>Counsellor Management System</title>
</head>

<body>
  <header>
    <div class="d-flex justify-content-center mt-4 mb-2 text-center">
      <div class="d-block">
        <div class="logo">
          <img style="height: 7rem;width: 7rem;"
            src="https://rvce.edu.in/sites/default/files/logo_0.png"
            alt="Home" />
        </div>
        <div>
          <h3><span style="font-size:16px">Rashtreeya Sikshana Samithi
              Trust</span></h3>
          <h1><span style="font-size:26px">R V College
              of Engineering</span></h1>
          <h6><span style="font-size:12px">Autonomous Institution affiliated to
              Visvesvaraya Technological University, Belagavi</span></h6>
        </div>

      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img style="height: 40px;width: 40px;"
            src="https://rvce.edu.in/sites/default/files/logo_0.png"
            alt="Home" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" href="#">Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Counsellor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">HOD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="scpass.php">Change Password</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link active" href="logout.php">Logout</a>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <?php include("editModal.php"); ?>
  <?php include("editModalCourse.php"); ?>
<div class="container-fluid" id="student">
    <div class="row">
        <div class="col-md-6">
        <div id="stdreg">

<div class="mt-5 mb-5 d-flex justify-content-center">
  <div class="container">
    <div class="card">
      <h5 class="card-header text-center ">Activity Points</h5>
      <div class="card-body">
        <form action="coca.php" method="post">
        
            <input type="hidden" class="form-control" placeholder="Enter USN" name="usn" value="<?php echo $sns; ?>">
          
          <div class="form-group mt-3 mb-3">
            <label for="exampleInputEmail1">Club/Origin</label>
            <input type="text" class="form-control" placeholder="Enter Club" name="Club">
          </div>
          <div class="form-group mt-3 mb-3">
            <label for="exampleInputEmail1">Number Of Hours</label>
            <input type="text" class="form-control" placeholder="Enter Number Of Hours" name="Points">
          </div>
          <button type="submit" name="clogin" class="btn btn-primary mt-3 mb-3">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
        </div>
        <div class="col-md-6">
        
        <div id="stdreg">

<div class="mt-5 mb-5 d-flex justify-content-center">
  <div class="container">
    <div class="card">
      <h5 class="card-header text-center ">Course Register</h5>
      <div class="card-body">
        <form action="coursereg.php" method="post">
        <input type="hidden" class="form-control" placeholder="Enter Student id" name="usn" value="<?php echo $sns; ?>">
          <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Course</label>
                      <select id="inputState" class="form-control" name="coid">
                        <option selected>Choose Course</option>
                        <!-- for select option of department -->
                        <?php
                       $sql7 = "SELECT * FROM subjects ";
                       $result7 = mysqli_query($db,$sql7);               
                        if(mysqli_num_rows($result7) > 0) {
                         while($row = mysqli_fetch_assoc($result7)) {
                           echo "<option value='". $row["courseCode"]."'>". $row["courseTitle"]."</option>";
                              
                         }
                     }
                      ?>
                      </select>
                    </div>
          <button type="submit" name="clogin" class="btn btn-primary mt-3 mb-3">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Composs Email</button>        

        </div>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wirte An Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form method="post" action="writeEmail.php">
  <div class="form-group">
    <label for="formGroupExampleInput">Enter Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="EmailAddress" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Subject</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Subject" placeholder="Enter Subject">
  </div>  
  <div class="form-group">
    <label for="formGroupExampleInput2">Message</label>
    <textarea name="Message" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="sendEmail">Send Now</button>
</form>
      </div>
      <div class="modal-footer">
<!--         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<div class="h3 mb-3 mt-3">
    Student Details 
</div>
<table class="table mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">usn</th>
      <th scope="col">Fname</th>
      <th scope="col">Mname</th>
      <th scope="col">Lname</th>
      <th scope="col">Email</th>
      <th scope="col">Dob</th>
      <th scope="col">Age</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Department</th>
      <th scope="col">Counsellor</th>
    </tr>
  </thead>
  <tbody>
  <?php
                       $sql = "SELECT * FROM studentdetails WHERE usn = '$sns'";
                       $result = mysqli_query($db,$sql);               
                        if(mysqli_num_rows($result) > 0) {
                         while($row = mysqli_fetch_assoc($result)) {
                            $coul = $row["cousid"];
                          
?>
    <tr>
      <th scope="row"><?php echo $row["usn"];?></th>
      <td><?php echo $row["Fname"];?></td>
      <td><?php echo $row["Mname"];?></td>
      <td><?php echo $row["Lname"];?></td>
      <td><?php echo $row["Email"];?></td>
      <td><?php echo $row["Dob"];?></td>
      <td><?php echo $row["Age"];?></td>
      <td><?php echo $row["phno"];?></td>
      <?php
      $dept = $row["deptid"];
                       $sql1 = "SELECT * FROM department WHERE Deptid = '$dept'";
                       $result1 = mysqli_query($db,$sql1);               
                        if(mysqli_num_rows($result1) > 0) {
                         while($row = mysqli_fetch_assoc($result1)) {
                          
?>
      <td><?php echo $row["dname"];?></td>
      <?php
                         }
                        }
                        ?>
        <?php
      
                       $sql2 = "SELECT * FROM counsillar WHERE cousid = '$coul'";
                       $result2 = mysqli_query($db,$sql2);               
                        if(mysqli_num_rows($result2) > 0) {
                         while($row = mysqli_fetch_assoc($result2)) {
                          
?>
      <td><?php echo $row["Couname"];?></td>
      <?php
                         }
                        }
                        ?>
    </tr>
    <?php                              
}
}
?>
  </tbody>
</table>




<!-- <div class="h3 mb-3 mt-3">
    Student phno 
</div>
<table class="table mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
  <?php
                       $sql3 = "SELECT * FROM studentphno WHERE usn = '$sns'";
                       $result3 = mysqli_query($db,$sql3);               
                        if(mysqli_num_rows($result3) > 0) {
                         while($row = mysqli_fetch_assoc($result3)) {
                          
?>
    <tr>
      <th scope="row"><?php echo $row["phno"];?></th>     
    </tr>
    <?php                              
}
}
?>
  </tbody>
</table> -->





<div class="h3 mb-3 mt-3">
    Student School Marks 
</div>
<table class="table mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">10th School</th>
      <th scope="col">10th Mark</th>
      <th scope="col">12th School</th>
      <th scope="col">12th Mark</th>
    </tr>
  </thead>
  <tbody>
  <?php
                       $sql4 = "SELECT * FROM marks WHERE usn = '$sns'";
                       $result4 = mysqli_query($db,$sql4);               
                        if(mysqli_num_rows($result4) > 0) {
                         while($row = mysqli_fetch_assoc($result4)) {
                          
?>
    <tr>
      <th scope="row"><?php echo $row["sname"];?></th>
      <td><?php echo $row["spac"];?></td>
      <td><?php echo $row["cname"];?></td>
      <td><?php echo $row["cpuc"];?></td>
     
    </tr>
    <?php                              
}
}
?>
  </tbody>
</table>


<div class="h3 mb-3 mt-3">
    Student Personal Details 
</div>
<table class="table mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Relationship</th>
      <th scope="col">Relation Name</th>
      <th scope="col">Student Gender</th>
      <th scope="col">Relation Phone Number</th>
    </tr>
  </thead>
  <tbody>
  <?php
                       $sql5 = "SELECT * FROM dependents WHERE usn = '$sns'";
                       $result5 = mysqli_query($db,$sql5);               
                        if(mysqli_num_rows($result5) > 0) {
                         while($row = mysqli_fetch_assoc($result5)) {
                          
?>
    <tr>
      <th scope="row"><?php echo $row["relation"];?></th>
      <td><?php echo $row["rname"];?></td>
      <td><?php echo $row["gender"];?></td>
      <td><?php echo $row["phno"];?></td>
     
    </tr>
    <?php                              
}
}
?>
  </tbody>
</table>



<div class="h3 mb-3 mt-3">
    Student Mark Details 
</div>
<table class="table mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SEM</th>
      <th scope="col">CGPA</th>
      <th scope="col">SGPA</th>
    </tr>
  </thead>
  <tbody>
  <?php
                       $sql21 = "SELECT * FROM engmarks WHERE usn = '$sns'";
                       $result21 = mysqli_query($db,$sql21);               
                        if(mysqli_num_rows($result21) > 0) {
                         while($row = mysqli_fetch_assoc($result21)) {
                          
?>
    <tr>
      <th scope="row"><?php echo $row["sem"];?></th>
      <td><?php echo $row["cgpa"];?></td>
      <td><?php echo $row["sgpa"];?></td>
     
    </tr>
    <?php                              
}
}
?>
  </tbody>
</table>






<div class="h3 mb-3 mt-3">
    Student Course Details 
</div>
<table class="table mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">EDIT||DELETE</th>
    </tr>
  </thead>
  <tbody>
  <?php
 $sql8 = "SELECT * FROM courses WHERE 	usn = '$sns'";
 $result8 = mysqli_query($db,$sql8);               
  if(mysqli_num_rows($result8) > 0) {
   while($row = mysqli_fetch_assoc($result8)) {

                      
                          
?>
      <?php $de = $row["couid"]; 
      $_SESSION['uid'] = $sns;
      ?>
    <tr onmouseover="show('butE<?php echo $sns;?><?php echo $de;?>')" onmouseout="hide('butE<?php echo $sns;?><?php echo $de;?>')">
      <?php
      $couid = $row["couid"];
      $sql6 = "SELECT * FROM subjects WHERE courseCode = '$couid'" ;
      
      $result6 = mysqli_query($db,$sql6);               
       if(mysqli_num_rows($result6) > 0) {
        while($row = mysqli_fetch_assoc($result6)) {  
            $_SESSION['courseCode'] = $couid;
            $_SESSION['courseTitle'] = $row["courseTitle"];             
                          
?>
      <td><?php echo $row["courseTitle"];?></td>
      <td>
      <button type="submit" id="butE<?php echo $sns;?><?php echo $de;?>" class="btn btn-success ml-2 d-none" data-toggle="modal" data-target="#exampleModalLong1">View<i class='fas fa-eye ml-1'></i></button>
          </td>
      <?php
                         }
                        }
                        ?>
                       
     
    </tr>
    <?php                              
}
}
?>
  </tbody>
</table>



<div class="h3 mb-3 mt-3">
    Student Activity Points 
</div>
<table class="table table-hover mb-5 mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Club</th>
      <th scope="col">time</th>
      <th scope="col">EDIT  DELETE</th>
    </tr>
  </thead>
  <tbody>
  <?php
                       $sql9 = "SELECT * FROM studentcocuri WHERE usn = '$sns'";
                       $result9 = mysqli_query($db,$sql9);               
                        if(mysqli_num_rows($result9) > 0) {
                         while($row = mysqli_fetch_assoc($result9)) {
                          
?>
      <?php $na = $row["cluborg"]; ?>
    <tr onmouseover="show('butE<?php echo $sns;?><?php echo $na;?>')" onmouseout="hide('butE<?php echo $sns;?><?php echo $na;?>')">
      <th scope="row"><?php echo $row["cluborg"];?></th>
      <td ><?php echo $row["points"];?></td>
      <td>
      <?php 
      $_SESSION['uid'] = $sns; 
      $_SESSION['club'] = $na;
      ?>
      <button type="submit" id="butE<?php echo $sns;?><?php echo $na;?>" class="btn btn-success ml-2 d-none" data-toggle="modal" data-target="#exampleModalLong">View<i class='fas fa-eye ml-1'></i></button>
       
          </td>
     
    </tr>
    <?php                              
}
}
?>
  </tbody>
</table>



</div>
<!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<script>
    function show(a){
        var id= document.getElementById(a);
        id.classList.remove("d-none");
    }
    function hide(a){
        var id= document.getElementById(a);
        id.classList.add("d-none");
    }
</script>
</body>

</html>
<?php
  }
 else if($ids==2){
    header("location: index.php"); 
 }
?>


