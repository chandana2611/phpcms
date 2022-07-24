<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
    $sdduid =  $_POST['sdduid'];
   $ids = $_SESSION['login_user'];
  if($ids==3||$ids==2){
      
?>
<div class="modal fade" id="exampleModalLong6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="editModalStudDetailRel1.php" method="post">
      <?php
                       $sql25 = "SELECT * FROM dependents WHERE usn = '$sdduid'";
                       $result25 = mysqli_query($db,$sql25);               
                        if(mysqli_num_rows($result25) > 0) {
                         while($row = mysqli_fetch_assoc($result25)) {
        ?>
        
        <input type="hidden" class="form-control" placeholder="Enter Student User Id" name="sdduid" value="<?php echo $sdduid; ?>">
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
                      <input type="text" class="form-control" placeholder="Enter Relation Name" name="sranme" value="<?php echo $row["rname"];?>">
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
                        <input type="number" class="form-control" placeholder="Enter Student Phone Number" name="rphno" value="<?php echo $row["phno"];?>">
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
