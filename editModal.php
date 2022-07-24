<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
  $uid = $_SESSION['uid'];
  $club = $_SESSION['club'];
  $ids = $_SESSION['login_user'];
  if($ids==1){
      
?>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" method="post" action="editModal.php">
        <?php
                       $sql13 = "SELECT * FROM studentcocuri WHERE usn = '$uid' AND cluborg = '$club'";
                       $result13 = mysqli_query($db,$sql13);               
                        if(mysqli_num_rows($result13) > 0) {
                         while($row = mysqli_fetch_assoc($result13)) {
        ?>
        <input type="hidden" class="form-control" placeholder="Enter Student id" name="usn" value="<?php echo $row["usn"]; ?>">
          
          <div class="form-group mt-3 mb-3">
            <label for="exampleInputEmail1">Club/Origin</label>
            <input type="text" class="form-control"  name="Club" value="<?php echo $row["cluborg"];?>">
          </div>
          <div class="form-group mt-3 mb-3">
            <label for="exampleInputEmail1">Number Of Hours</label>
            <input type="text" class="form-control" value="<?php echo $row["points"];?>" name="Points">
          </div>
          <input type="submit" name="button" class="btn btn-warning mt-3 mb-3" value="Edit">
          <input type="submit" name="button" class="btn btn-danger mt-3 mb-3" value="Delete">
          <?php
                         }
                        }
                        ?>
        </form>
      </div>
    </div>
  </div>
</div>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $bt = $_POST['button'];
    $usn = $_POST['usn'];
    $Club =$_POST['Club']; 
    $Points =$_POST['Points']; 
    if($bt == "Edit"){
        $sql = "UPDATE studentcocuri SET cluborg='$Club', points='$Points' WHERE usn='$usn' AND cluborg='$club'";

        if (mysqli_query($db, $sql)) {
            header("location: student.php");
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }
    }
    if($bt == "Delete"){
        $sql = "DELETE FROM studentcocuri WHERE usn='$usn' AND cluborg='$club'";
        if ($db->query($sql) === TRUE) {
            header("location: student.php");
          } else {
            echo "Error deleting record: " . $conn->error;
          }
          
    }
}



} ?>