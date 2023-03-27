<?php
require_once "../dashboard_parts/header.php";

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
          <div>
            <h3 style="color:black;">Add Testimonial</h3>
            </div>
            <div>
              <a class="text-white btn-sm"href="all_testimonial.php">All Testimonial</a>
            </div>
          </div>
        </div>
        <div class="card-body col-6 m-auto">
               
            <form action="create_user_post.php" method="post">
                  <div class="upload">
                    <img src="<?=$hostName."admin/uploads/portfolio/default.png"?>" id="image" for="fileImage" alt="">
                    <div class="mb-3 rightRound" id="upload">
                      <input type="file" name="fileImage" class="form-control auth-input">
                      <i class="fa fa-camera"></i>
                    </div>
                  </div>
                  
                  <div class="mb-3 form-group">  
                    <label class="form-label input-info-text">Description</label>
                    <input type="text" name="description" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Name</label>
                    <input type="text" name="name" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Designation</label>
                    <input type="text" name="designation" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">
                  
                    <button type="submit" name="submit" class="btn btn-primary mb-5 form-control auth-btn">Submit</button>
                  </div>
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
require_once "../dashboard_parts/footer.php";
?>