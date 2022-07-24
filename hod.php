<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
  $ids = $_SESSION['login_user'];
  if($ids==3){
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

    <title>Counsellor Management</title>
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
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="studenth.php">Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Counsellorh.php">Counsellor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" href="hod.php">HOD</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" id ="123" href="import.php">Import</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="logout.php">Logout</a>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
    
  </header>
  

  <div class="mt-5 mb-5">
    <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
          aria-controls="pills-home" aria-selected="true">Student Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
          aria-controls="pills-profile" aria-selected="false">Counsellor Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-course-tab" data-toggle="pill" href="#pills-course" role="tab"
          aria-controls="pills-course" aria-selected="false">Course Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-marks-tab" data-toggle="pill" href="#pills-marks" role="tab"
          aria-controls="pills-marks" aria-selected="false">Marks Register</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent" onclick = "do_change();">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"  >
        <div id="student">
        
          <div class="mt-5 mb-5 d-flex justify-content-center">
            <div class="container">

              <div class="card">
                <h5 class="card-header text-center ">Student Register</h5>
                <div class="card-body">
                  <form action="studentRegister.php" method="post">
                    <div class="text-center h4 mt-3 mb-3">Student Details</div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">USN</label>
                      <input type="text" class="form-control" placeholder="Enter USN" name="USN">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" placeholder="Enter First Name" name="Fname">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Middle Name</label>
                      <input type="text" class="form-control" placeholder="Enter Middle Name" name="Mname">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control" placeholder="Enter Last Name" name="Lname">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">DOB</label>
                      <input type="date" class="form-control" placeholder="Enter Date Of Birth" name="dob" onblur="getAge();" >
                    </div>
                    <!-- <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Age</label>
                      <input type="number" class="form-control" placeholder="Enter Age" name="age">
                    </div> -->
                    <div class="text-center h4 mt-3 mb-3">Department Details</div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">Department</label>
                      <select id="inputState" class="form-control" name="deptid">
                      <option value="" disabled selected hidden>Choose Department</option>
                        <!-- for select option of department -->
                        <?php
                       $sql5 = "SELECT * FROM department ";
                       $result5 = mysqli_query($db,$sql5);               
                        if(mysqli_num_rows($result5) > 0) {
                         while($row3 = mysqli_fetch_assoc($result5)) {
                           echo "<option value='". $row3["Deptid"]."'>". $row3["dname"]."</option>";
                              
                         }
                     }
                      ?>
                      </select>

                    </div>
                    <div class="text-center h4 mt-3 mb-3">Counsellor Details</div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">Counsellor</label>
                      <select id="inputState" class="form-control" name="couid" >
                        <!-- <option selected></option> -->
                        <option value="" disabled selected hidden>Choose a Counsellor</option>
                        <!-- for select option of department -->
                        <?php
                       $sql1 = "SELECT * FROM counsillar";
                       $result1 = mysqli_query($db,$sql1);               
                        if(mysqli_num_rows($result1) > 0) {
                         while($row = mysqli_fetch_assoc($result1)) {
                           echo "<option value='". $row["cousid"]."'>". $row["Couname"]."</option>";
                              
                         }
                     }
                      ?>
                      </select>

                    </div>
                    <div class="text-center h4 mt-3 mb-3">School Details</div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">Student 10th School Name</label>
                      <input type="text" class="form-control" placeholder="Enter Student School Name" name="sname">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">Student 10th mark</label>
                      <input type="number" class="form-control" placeholder="Enter Student  10 th mark in persent"
                        name="sper">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">Student 12th School Name</label>
                      <input type="text" class="form-control" placeholder="Enter Student School Name" name="cname">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">Student 12th mark</label>
                      <input type="number" class="form-control" placeholder="Enter Student  12th mark in persent"
                        name="cper">
                    </div>
                    <div class="text-center h4 mt-3 mb-3">Personal Details</div>
                    <div class="form-group mt-3 mb-3">
                      <label class='required' for="exampleInputEmail1">Student Ph.No</label>
                      <input type="number" class="form-control" placeholder="Enter Student Phone Number" name="phno">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">student Relationship</label>
                      <select id="inputState" class="form-control" name="srel">
                        <option selected>Choose Relationship</option>
                        <option value="Father">Father</option>
                        <option value="Mother">Mother</option>
                        <option value="Mother">Gaurdian</option>
                      </select>

                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Name Of the Relation</label>
                      <input type="text" class="form-control" placeholder="Enter Relation Name" name="sranme">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Student Gender</label>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" value="Male" name="Gender">Male
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" value="Female" name="Gender">Female
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="Gender" value="Others">Others
                        </label>
                      </div>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="exampleInputEmail1">Relation Ph.No</label>
                        <input type="number" class="form-control" placeholder="Enter Student Phone Number" name="rphno">
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label class='required' for="exampleInputEmail1">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Student Password" name="passcode">
                    </div>
                    
                    <button type="submit" name="slogin" class="btn btn-primary mt-3 mb-3">Submit</button>
                    <div>
                    <label class='Req'>  Required </label>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div id="Counsellor">

          <div class="mt-5 mb-5 d-flex justify-content-center">
            <div class="container">
              <div class="card">
                <h5 class="card-header text-center ">Counsellor Register</h5>
                <div class="card-body">
                  <form action="CounsellorReg.php" method="post">
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Counsellor ID</label>
                      <input type="text" class="form-control" placeholder="Enter Counsellor ID" name="couid">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Counsellor Name</label>
                      <input type="text" class="form-control" placeholder="Enter Counsellor Name" name="counname">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" placeholder="Enter Counsellor Email" name="email" required>
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Department</label>
                      <select id="inputState" class="form-control" name="deptid">
                        <option selected>Choose Department</option>
                        <!-- for select option of department -->
                        <?php
                       $sql8 = "SELECT * FROM department ";
                       $result8 = mysqli_query($db,$sql8);               
                        if(mysqli_num_rows($result8) > 0) {
                         while($row = mysqli_fetch_assoc($result8)) {
                           echo "<option value='". $row["Deptid"]."'>". $row["dname"]."</option>";
                              
                         }
                     }
                      ?>
                      </select>
                    </div>

                    

                    <div class="form-group mt-3 mb-3">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Counsellor Password" name="passcode">
                    </div>


                    <button type="submit" name="clogin" class="btn btn-primary mt-3 mb-3">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-course" role="tabpanel" aria-labelledby="pills-course-tab">
        <div id="Counsellor">

          <div class="mt-5 mb-5 d-flex justify-content-center">
            <div class="container">
              <div class="card">
                <h5 class="card-header text-center ">Course Register</h5>
                <div class="card-body">
                  <form action="course.php" method="post">
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Sem</label>
                      <input type="text" class="form-control" placeholder="Enter Sem" name="Sem">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Course Title</label>
                      <input type="text" class="form-control" placeholder="Enter Course" name="Course">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">REG</label>
                      <input type="text" class="form-control" placeholder="Enter REG" name="REG">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Credits</label>
                      <input type="text" class="form-control" placeholder="Enter Credits" name="Credits">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Department</label>
                      <select id="inputState" class="form-control" name="deptid">
                        <option selected>Choose Department</option>
                        <!-- for select option of department -->
                        <?php
                       $sql7 = "SELECT * FROM department";
                       $result7 = mysqli_query($db,$sql7);               
                        if(mysqli_num_rows($result7) > 0) {
                         while($row = mysqli_fetch_assoc($result7)) {
                           echo "<option value='". $row["Deptid"]."'>". $row["dname"]."</option>";
                              
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
      </div>
      <div class="tab-pane fade" id="pills-marks" role="tabpanel" aria-labelledby="pills-marks-tab">
        <div id="Counsellor">

          <div class="mt-5 mb-5 d-flex justify-content-center">
            <div class="container">
              <div class="card">
                <h5 class="card-header text-center ">Marks Register</h5>
                <div class="card-body">
                  <form action="semmarks.php" method="post">
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">USN</label>
                      <input type="text" class="form-control" placeholder="Enter User id" name="usn">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Sem</label>
                      <input type="text" class="form-control" placeholder="Enter Sem" name="Sem">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">CGPA</label>
                      <input type="text" class="form-control" placeholder="Enter CGPA" name="CGPA">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">SGPA</label>
                      <input type="text" class="form-control" placeholder="Enter SGPA" name="SGPA">
                    </div>
                    <button type="submit" name="clogin" class="btn btn-primary mt-3 mb-3">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>





  <style>
  .required:after {
    content:" *";
    color: red;
  }
</style>
<style>
  .Req:before {
    content:" *";
    color: red;
  }
</style>


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

</body>

</html>





<?php
  }
 else if($ids==2){
    header("location: index.php"); 
 }
 else if($ids==1){
    header("location: index.php"); 
}
?>