
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
    $('#example').DataTable();
} );
    </script>
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
              <a class="nav-link" href="#">Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Counsellor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">HOD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="ccpass.php">Change Password</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link active" href="counsellorexport.php">Export</a>
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
  <div id="mod"></div>
  <div id="mod1"></div>
  <div id="mod2"></div>
  <div id="mod3"></div>
  <div id="mod4"></div>
<div class="container-fluid" id="student">
    

<div class="h3 mb-3 mt-3">
    Counsellor Details 
</div>
<table class="table  mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">cousid</th>
      <th scope="col">Couname</th>
      <th scope="col">Email</th>
      <th scope="col">DepartMent</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $array = array();

                       $sql = "SELECT * FROM counsillar WHERE cousid='$cid'";
                       $result = mysqli_query($db,$sql);               
                        if(mysqli_num_rows($result) > 0) {
                         while($row = mysqli_fetch_assoc($result)) {
                            $coul = $row["cousid"];
                          
?>
      <?php $fna = $row["cousid"];
      $snd = $row["Couname"];
      ?>
    <tr>
      <th scope="row"><?php echo $row["cousid"];?></th>
      <td><?php echo $row["Couname"];?></td>
      <td><?php echo $row["email"];?></td>
      <?php
      $dept = $row["Deptid"];
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
      
    </tr>
    <?php                              
}
}
?>
</tbody>
</table>
<div class="h3 mb-3 mt-3">
    Student Details</div>
<!-- <table class="table table-hover  mb-3 mt-3"> -->
<table id="example" class="table table-striped table-bordered table-hover  mb-3 mt-3" style="width:100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">usn</th>
      <th scope="col">Fname</th>
      <th scope="col">Mname</th>
      <th scope="col">Lname</th>
      <th scope="col">Email</th>
      <th scope="col">Dob</th>
      <th scope="col">Age</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Department</th>
     <th scope="col">Edit Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
                       $sql = "SELECT * FROM studentdetails WHERE cousid='$cid'";
                       $result = mysqli_query($db,$sql);               
                        if(mysqli_num_rows($result) > 0) {
                          $i = 0;
                         while($row = mysqli_fetch_assoc($result)) {
                          $i++;
                            $coul = $row["cousid"];
                          
?>
      <?php $fna = $row["Fname"];
      $snd = $row["usn"];
      $sduid = $row["usn"];
      $sdfn = $row["Fname"];
      $idu = $row["usn"];
      array_push($array,$idu);
      ?>
    <tr onmouseover="show('butE<?php echo $snd;?><?php echo $fna;?>')" onmouseout="hide('butE<?php echo $snd;?><?php echo $fna;?>')">
      <th scope="row"><?php echo $i;?></th>
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
                            $_SESSION['sdudep'] = $dept;
                            $_SESSION['sdudna'] = $row["dname"];
                          
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
                            $_SESSION['sduco'] = $coul;
                            $_SESSION['sducona'] = $row["Couname"];
                          
?>
     <!--  <td><?php //echo $row["Couname"];?></td> -->
      <?php
                         }
                        }
                        ?>
<td>
      <button type="submit" id="butE<?php echo $snd;?><?php echo $fna;?>" onclick="save('<?php echo $sduid;?>','<?php echo $sdfn;?>')" class="btn btn-success ml-2 " data-toggle="modal" data-target="#exampleModalLong3">View<i class='fas fa-eye ml-1'></i></button>
      </td> 
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
<table class="table table-hover mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
    <th scope="col">USN</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Edit Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $usn = $_SESSION['couSUID'];
  
  for($i=0;$i<=count($array);$i++){
             $SERD = $array[$i];
                       $sql3 = "SELECT * FROM studentphno WHERE usn='$SERD'";
                       $result3 = mysqli_query($db,$sql3);               
                        if(mysqli_num_rows($result3) > 0) {
                         while($row = mysqli_fetch_assoc($result3)) {
                          
?>
      <?php $snd1 = $row["usn"];
      $fna1 = $row["phno"];
      $spuid = $row["usn"];
      $spph = $row["phno"];
      ?>
    <tr onmouseover="show('butE<?php echo $snd1;?><?php echo $fna1;?>')" onmouseout="hide('butE<?php echo $snd1;?><?php echo $fna1;?>')">
    <th scope="row"><?php echo $row["usn"];?></th> 
      <th><?php echo $row["phno"];?></th> 
      <td><button type="submit" onclick="save1('<?php echo $spuid;?>','<?php echo $spph;?>')" id="butE<?php echo $snd1;?><?php echo $fna1;?>" class="btn btn-success ml-2 " data-toggle="modal" data-target="#exampleModalLong4">View<i class='fas fa-eye ml-1'></i></button></td>    
    </tr>
    <?php                              
}
}
  }
?>
  </tbody>
</table> -->





<div class="h3 mb-3 mt-3">
    Student School Marks 
</div>
<table class="table table-hover mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
    <th scope="col">USN</th>
      <th scope="col">10th School</th>
      <th scope="col">10th Mark</th>
      <th scope="col">12th School</th>
      <th scope="col">12th Mark</th>
      <th scope="col">Edit Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  for($i=0;$i<=count($array);$i++){
    $SERD1 = $array[$i];
                       $sql4 = "SELECT * FROM marks WHERE usn='$SERD1'";
                       $result4 = mysqli_query($db,$sql4);               
                        if(mysqli_num_rows($result4) > 0) {
                         while($row = mysqli_fetch_assoc($result4)) {
                          
?>
  <?php $snd2 = $row["usn"];
      $fna2 = $row["sname"];
      $smuid = $row["usn"];
      ?>
    <tr onmouseover="show('butE<?php echo $snd2;?><?php echo $fna2;?>')" onmouseout="hide('butE<?php echo $snd2;?><?php echo $fna2;?>')">
      <th scope="row"><?php echo $row["usn"];?></th>
      <th><?php echo $row["sname"];?></th>
      <td><?php echo $row["spac"];?></td>
      <td><?php echo $row["cname"];?></td>
      <td><?php echo $row["cpuc"];?></td>
      <td><button type="submit" id="butE<?php echo $snd2;?><?php echo $fna2;?>" onclick="save2('<?php echo $smuid;?>')" class="btn btn-success ml-2 " data-toggle="modal" data-target="#exampleModalLong5">View<i class='fas fa-eye ml-1'></i></button></td>    
     
    </tr>
    <?php                              
}
}
  }
?>
  </tbody>
</table>


<div class="h3 mb-3 mt-3">
    Student Personal Details 
</div>
<table class="table table-hover mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
    <th scope="col">USN</th>
      <th scope="col">Relationship</th>
      <th scope="col">Relation Name</th>
      <th scope="col">Student Gender</th>
      <th scope="col">Relation Phone Number</th>
      <th scope="col">Edit Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  for($i=0;$i<=count($array);$i++){
    $SERD2 = $array[$i];
                       $sql5 = "SELECT * FROM dependents WHERE usn='$SERD2'";
                       $result5 = mysqli_query($db,$sql5);               
                        if(mysqli_num_rows($result5) > 0) {
                         while($row = mysqli_fetch_assoc($result5)) {
                          
?>
  <?php $snd3 = $row["usn"];
      $fna3 = $row["relation"];
      $sdduid = $row["usn"];
      $sddr = $row["rname"];
      ?>
    <tr onmouseover="show('butE<?php echo $snd3;?><?php echo $fna3;?>')" onmouseout="hide('butE<?php echo $snd3;?><?php echo $fna3;?>')">
    <th scope="row"><?php echo $row["usn"];?></th>
      <th><?php echo $row["relation"];?></th>
      <td><?php echo $row["rname"];?></td>
      <td><?php echo $row["gender"];?></td>
      <td><?php echo $row["phno"];?></td>
      <td><button type="submit" id="butE<?php echo $snd3;?><?php echo $fna3;?>"  onclick="save3('<?php echo $sdduid;?>')" class="btn btn-success ml-2 " data-toggle="modal" data-target="#exampleModalLong6">View<i class='fas fa-eye ml-1'></i></button></td>    
    </tr>
    <?php                              
}
}
  }
?>
  </tbody>
</table>

<div class="h3 mb-3 mt-3">
    Student Mark Details 
</div>
<table class="table table-hover mb-3 mt-3">
  <thead class="thead-dark">
    <tr>
    <th scope="col">USN</th> 
      <th scope="col">SEM</th>
      <th scope="col">CGPA</th>
      <th scope="col">SGPA</th>
      <th scope="col">Edit Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  for($i=0;$i<=count($array);$i++){
    $SERD3 = $array[$i];
                       $sql21 = "SELECT * FROM engmarks WHERE usn='$SERD3'";
                       $result21 = mysqli_query($db,$sql21);               
                        if(mysqli_num_rows($result21) > 0) {
                         while($row = mysqli_fetch_assoc($result21)) {
                          
?>
<?php $snd4 = $row["usn"];
      $fna4 = $row["sem"];
      $scmuid = $row["usn"];
      $scms = $row["sem"];
      ?>
    <tr onmouseover="show('butE<?php echo $snd4;?><?php echo $fna4;?>')" onmouseout="hide('butE<?php echo $snd4;?><?php echo $fna4;?>')">
      <th scope="row"><?php echo $row["usn"];?></th>
      <th><?php echo $row["sem"];?></th>
      <td><?php echo $row["cgpa"];?></td>
      <td><?php echo $row["sgpa"];?></td>
      <td><button type="submit" id="butE<?php echo $snd4;?><?php echo $fna4;?>" class="btn btn-success ml-2 d-none" onclick="save5('<?php echo $scmuid;?>','<?php echo $scms;?>')" data-toggle="modal" data-target="#exampleModalLong7">View<i class='fas fa-eye ml-1'></i></button></td>
    </tr>
    <?php                              
}
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
    function save(a,b){

        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
            {
                document.getElementById("mod").innerHTML = xmlHttp.responseText;
            }
        }
        xmlHttp.open("post", "editModalStudDetail.php",true); 
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttp.send("sduid="+a+"&sdfn="+b+""); 
       
    }
    function save1(a,b){

var xmlHttp = new XMLHttpRequest();
xmlHttp.onreadystatechange = function()
{
    if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
    {
        document.getElementById("mod1").innerHTML = xmlHttp.responseText;
    }
}
xmlHttp.open("post", "editModalStudDetailPh.php",true); 
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.send("spuid="+a+"&spph="+b+""); 

}
function save2(a){


var xmlHttp = new XMLHttpRequest();
xmlHttp.onreadystatechange = function()
{
    if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
    {
        document.getElementById("mod2").innerHTML = xmlHttp.responseText;
    }
}
xmlHttp.open("post", "editModalStudDetailmk.php",true); 
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.send("smuid="+a+""); 

}
function save3(a){

var xmlHttp = new XMLHttpRequest();
xmlHttp.onreadystatechange = function()
{
if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
{
document.getElementById("mod3").innerHTML = xmlHttp.responseText;
}
}
xmlHttp.open("post", "editModalStudDetailRel.php",true); 
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.send("sdduid="+a+""); 
}
function save5(a,b){

var xmlHttp = new XMLHttpRequest();
xmlHttp.onreadystatechange = function()
{
if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
{
document.getElementById("mod4").innerHTML = xmlHttp.responseText;
}
}
xmlHttp.open("post", "editModalStudDetailCm.php",true); 
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.send("scmuid="+a+"&scms="+b+""); 

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


