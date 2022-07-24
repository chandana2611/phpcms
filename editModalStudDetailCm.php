<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
      $scmuid =  $_POST['scmuid'];
      $scms =  $_POST['scms'];
   $ids = $_SESSION['login_user'];
   
  if($ids==3||$ids==2){
      
?>
<div class="modal fade" id="exampleModalLong7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="editModalStudDetailCm1.php" method="post">
      <?php
                       $sql25 = "SELECT * FROM engmarks WHERE usn = '$scmuid' AND sem='$scms'";
                       $result25 = mysqli_query($db,$sql25);               
                        if(mysqli_num_rows($result25) > 0) {
                         while($row = mysqli_fetch_assoc($result25)) {
        ?>
        
        <input type="hidden" class="form-control" placeholder="Enter Student User Id" name="scmuid" value="<?php echo $scmuid; ?>">
        <input type="hidden" class="form-control" placeholder="Enter Student User Id" name="scms" value="<?php echo $scms; ?>">
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Sem</label>
                      <input type="text" class="form-control" placeholder="Enter Sem" name="Sem" value="<?php echo $row["sem"];?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">CGPA</label>
                      <input type="text" class="form-control" placeholder="Enter CGPA" name="CGPA" value="<?php echo $row["cgpa"];?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">SGPA</label>
                      <input type="text" class="form-control" placeholder="Enter SGPA" name="SGPA" value="<?php echo $row["sgpa"];?>">
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
