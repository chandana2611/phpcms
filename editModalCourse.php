<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
  $uid = $_SESSION['uid'];
  $ids = $_SESSION['login_user'];
  $coC = $_SESSION['courseCode'];
  $coT = $_SESSION['courseTitle'];
  if($ids==1){
      
?>
<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="editModalCourse.php" method="post">
        <input type="hidden" class="form-control" placeholder="Enter Student id" name="usn" value="<?php echo $uid; ?>">
          <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Course</label>
                      <select id="inputState" class="form-control" name="coid">
                        
                        <!-- for select option of department -->
                        <?php
                         echo "<option  value='".$coC."' selected>".$coT."</option>"; 
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
                    <input type="submit" name="button" class="btn btn-warning mt-3 mb-3" value="Edit">
          <input type="submit" name="button" class="btn btn-danger mt-3 mb-3" value="Delete">
        </form>
      </div>
    </div>
  </div>
</div>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $bt = $_POST['button'];
    $usn = $_POST['usn'];
    $coid =$_POST['coid'];
    if($bt == "Edit"){
        $sql = "UPDATE courses SET 	couid='$coid' WHERE usn='$usn'";

        if (mysqli_query($db, $sql)) {
            header("location: student.php");
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }
    }
    if($bt == "Delete"){
        $sql = "DELETE FROM courses WHERE usn='$usn'";
        if ($db->query($sql) === TRUE) {
            header("location: student.php");
          } else {
            echo "Error deleting record: " . $conn->error;
          }
          
    }
}



} ?>