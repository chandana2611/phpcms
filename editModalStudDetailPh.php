<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
   $spuid =  $_POST['spuid'];
   $spph =  $_POST['spph'];
   $ids = $_SESSION['login_user'];
  
  if($ids==3||$ids==2){
      
?>
<div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="editModalStudDetailPh1.php" method="post">
      <?php
                       $sql25 = "SELECT * FROM studentphno WHERE usn = '$spuid' AND phno = '$spph'";
                       $result25 = mysqli_query($db,$sql25);               
                        if(mysqli_num_rows($result25) > 0) {
                         while($row = mysqli_fetch_assoc($result25)) {
        ?>
        
        <input type="hidden" class="form-control" placeholder="Enter Student User Id" name="spuid" value="<?php echo $spuid; ?>">
        <input type="hidden" class="form-control" placeholder="Enter Student User Id" name="spph" value="<?php echo $spph; ?>">
        <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Student Ph.No</label>
                      <input type="number" class="form-control" placeholder="Enter Student Phone Number" name="phno" value="<?php echo $row["phno"];?>">
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
