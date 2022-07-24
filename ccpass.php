
<?php
error_reporting(E_ERROR | E_PARSE);

   include("config.php");
   session_start();
  $ids = $_SESSION['login_user'];
  $cid = $_SESSION['CID'];
  if($ids==2){
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

<?php
    $sql = "SELECT * FROM coulogin WHERE couid = '$cid'";
    $result = mysqli_query($db,$sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
         ?>
                   
                   <div class="mt-5 mb-5 d-flex justify-content-center">

<div class="card" style="width: 45%;">
  <h5 class="card-header text-center ">Cousellor Login</h5>
  <div class="card-body">
    <form action="ccpass.php" method="post">
    <div class="form-group mt-3 mb-3">
        <label for="exampleInputPassword1">Old Password</label>
        <input type="password" class="form-control" placeholder="old Password" name="copassword" value="<?php echo $row["passcode"];?>">
      </div>
      <div class="form-group mt-3 mb-3">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" placeholder="Password" name="cpassword" value="<?php echo $row["passcode"];?>">
      </div>
      <button type="submit" name="slogin" class="btn btn-primary mt-3 mb-3">Submit</button>
    </form>
  </div>
</div>

</div>
                   
         
<?php
    }
         
      }else {
         $error = "Your Login  is invalid";
         echo $error;
          
      }
?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $srel =$_POST['cpassword'];
    $sql = "UPDATE coulogin SET passcode='$srel'  WHERE couid = '$cid'";

    if (mysqli_query($db, $sql)) {
        header("location: index.php");
    } else {
      echo "Error updating record: " . mysqli_error($db);
    }
}

?>
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
?>
