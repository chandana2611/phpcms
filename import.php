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
<div class="container">
<form class="form-horizontal" action="importfunctions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Form Name</legend>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
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