<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
    $cousid =  $_POST['cousid'];
   $ids = $_SESSION['login_user'];
  if($ids==3){
      
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
      <form action="editModalCouDetail1.php" method="post">
      <?php
                       $sql25 = "SELECT * FROM counsillar WHERE cousid = '$cousid'";
                       $result25 = mysqli_query($db,$sql25);               
                        if(mysqli_num_rows($result25) > 0) {
                         while($row = mysqli_fetch_assoc($result25)) {
        ?>
        
        <input type="hidden" class="form-control" placeholder="Enter Student User Id" name="cousid" value="<?php echo $cousid; ?>">
        
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Counsellor Name</label>
                      <input type="text" class="form-control" placeholder="Enter Counsellor Name" name="counname" value="<?php echo $row["Couname"]; ?>">
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
                      <label for="exampleInputEmail1">YOJ</label>
                      <input type="text" class="form-control" placeholder="Enter Counsellor YOJ" name="YOJ" value="<?php echo $row["YOJ"]; ?>">
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
