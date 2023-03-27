<?php
require_once "dashboard_parts/header.php";

?>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
        <!-- row -->
      <div class="container-fluid">
        <div class="row">
            <div class="col-12 m-auto">
            <div class="card">
        <div class="card-header bg-success text-center" >
          <h3 style="color:black;">Update Footer Info</h3>
        </div>
        <div class="card-body col-6 m-auto">
               
            <form action="update_footer_post.php" method="post">
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">First Name</label>
                    <textarea name="footer" id="" class="form-control" rows="4" placeholder="Copyright© <span>Kufa</span> | All Rights Reserved"></textarea>
                    <?=isset($_SESSION['footer_null'])?'<i style="color:red">'.$_SESSION['footer_null'].'</i>':''?>
                  </div>
                 
              
                  <button type="submit" name="submit" class="btn btn-primary mb-5 form-control auth-btn">Submit</button>
            </form>


        </div>
      </div>
          </div>
        
        </div>
      </div>
</div>
<!--**********************************
    Content body end
***********************************-->


<?php
require_once "dashboard_parts/footer.php";
unset($_SESSION['footer_null']);
?>