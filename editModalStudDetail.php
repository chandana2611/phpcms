<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
   $sduid =  $_POST['sduid'];
   $sdfn =  $_POST['sdfn'];
   $ids = $_SESSION['login_user'];
  
  if($ids==3||$ids==2){
      
?>
<div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="editModalStudDetail1.php" method="post">
      <?php
                       $sql25 = "SELECT * FROM student WHERE usn = '$sduid' AND Fname = '$sdfn'";
                       $result25 = mysqli_query($db,$sql25);               
                        if(mysqli_num_rows($result25) > 0) {
                         while($row = mysqli_fetch_assoc($result25)) {
        ?>
        <div class="form-group mt-3 mb-3">
        <input type="hidden" class="form-control" placeholder="Enter Student User Id" name="sduid" value="<?php echo $sduid; ?>">
        <input type="hidden" class="form-control" placeholder="Enter Student User Id" name="sdfn" value="<?php echo $sdfn; ?>">
                      <label for="exampleInputEmail1">USN</label>
                      <input type="text" class="form-control" placeholder="Enter Student User Id" name="USN" value="<?php echo $row["usn"]; ?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" placeholder="Enter First Name" name="Fname" value="<?php echo $row["Fname"]; ?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Middle Name</label>
                      <input type="text" class="form-control" placeholder="Enter Middle Name" name="Mname"  value="<?php echo $row["Mname"]; ?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control" placeholder="Enter Last Name" name="Lname" value="<?php echo $row["Lname"]; ?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $row["Email"]; ?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">DOB</label>
                      <input type="date" class="form-control" placeholder="Enter Date Of Birth" name="dob" value="<?php echo $row["Dob"]; ?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Age</label>
                      <input type="number" class="form-control" placeholder="Enter Age" name="age" value="<?php echo $row["Age"]; ?>">
                    </div>
                    <div class="text-center h4 mt-3 mb-3">Department Details</div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Department</label>
                      <select id="inputState" class="form-control" name="deptid">
                        <option selected>Choose Department</option>
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
                      <label for="exampleInputEmail1">Counsellor</label>
                      <select id="inputState" class="form-control" name="couid">
                        
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
                    <?php
                         }
                        }
                        ?>
                    <input type="submit" name="button" class="btn btn-warning mt-3 mb-3" value="Edit">
          <input type="submit" name="button" class="btn btn-danger mt-3 mb-3" value="Delete">
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>
