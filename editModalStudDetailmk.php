<?php
error_reporting(E_ERROR | E_PARSE);
   include("config.php");
   session_start();
   $smuid =  $_POST['smuid'];
   $ids = $_SESSION['login_user'];
  
  if($ids==3||$ids==2){
      
?>
<div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="editModalStudDetailmk1.php" method="post">
      <?php
                       $sql25 = "SELECT * FROM marks WHERE usn = '$smuid'";
                       $result25 = mysqli_query($db,$sql25);               
                        if(mysqli_num_rows($result25) > 0) {
                         while($row = mysqli_fetch_assoc($result25)) {
        ?>
        
        <input type="hidden" class="form-control" placeholder="Enter Student User Id" name="smuid" value="<?php echo $smuid; ?>">
        
        <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Student 10th School Name</label>
                      <input type="text" class="form-control" placeholder="Enter Student School Name" name="sname" value="<?php echo $row["sname"];?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Student 10th mark</label>
                      <input type="number" class="form-control" placeholder="Enter Student  10 th mark in persent"
                        name="sper" value="<?php echo $row["spac"];?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Student 12th School Name</label>
                      <input type="text" class="form-control" placeholder="Enter Student School Name" name="cname" value="<?php echo $row["cname"];?>">
                    </div>
                    <div class="form-group mt-3 mb-3">
                      <label for="exampleInputEmail1">Student 12th mark</label>
                      <input type="number" class="form-control" placeholder="Enter Student  12th mark in persent"
                        name="cper" value="<?php echo $row["cpuc"];?>">
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
