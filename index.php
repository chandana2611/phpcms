<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Counsellor Management </title>
</head>

<body>
  <header>
    <div class="d-flex justify-content-center mt-4 mb-2 text-center">
      <div class="d-block">
        <div class="logo">
          <img style="height: 7rem;width: 7rem;"
            src="https://rvce.edu.in/sites/default/files/logo_0.png"
            alt="Home"/>
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Counsellor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">HOD</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Login</a>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
  </header>



  <ul class="nav nav-pills mt-5 mb-5 d-flex justify-content-center" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
        aria-controls="pills-home" aria-selected="true">Student Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
        aria-controls="pills-profile" aria-selected="false">Counsellor Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
        aria-controls="pills-contact" aria-selected="false">HOD Login</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

      <div id="student">

        <div class="mt-5 mb-5 d-flex justify-content-center">

          <div class="card" style="width: 45%;">
            <h5 class="card-header text-center ">Student Login</h5>
            <div class="card-body">
              <form action="loginS.php" method="post">
                <div class="form-group mt-3 mb-3">
                  <label for="exampleInputEmail1">USN</label>
                  <input type="text" class="form-control" placeholder="Enter USN" name="USN">
                </div>
                <div class="form-group mt-3 mb-3">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="spassword">
                </div>
                <button type="submit" name="slogin" class="btn btn-primary mt-3 mb-3">Login</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

          <div id="student">

            <div class="mt-5 mb-5 d-flex justify-content-center">

              <div class="card" style="width: 45%;">
                <h5 class="card-header text-center ">Login Counsellor</h5>
                <div class="card-body">
                  <form action="loginC.php" method="post">
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Counsellor ID</label>
                      <input type="text" class="form-control" placeholder="Enter your Counsellor id" name="CID">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" placeholder="Password" name="spassword">
                    </div>
                    <button type="submit" name="slogin" class="btn btn-primary mt-3 mb-3">Login</button>
                  </form>
                </div>
              </div>

            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div id="student">

            <div class="mt-5 mb-5 d-flex justify-content-center">

              <div class="card" style="width: 45%;">
                <h5 class="card-header text-center ">HOD Login</h5>
                <div class="card-body">
                  <form action="login.php" method="post">
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="semail">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                        name="spassword">
                    </div>
                    <button type="submit" name="slogin" class="btn btn-primary mt-3 mb-3">Login</button>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
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

</body>

</html>