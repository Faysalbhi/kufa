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
            <h3 style="color:black;">Add Achievement</h3>
            </div>
            <div>
              <a class="text-white btn-sm"href="all_achievement.php">All Achievement</a>
            </div>
          </div>
        </div>
        <div class="card-body col-6 m-auto">
               
            <form action="create_achievement_post.php" method="post">
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Icon</label>
                    <input type="text" name="icon" placeholder="flaticon-event" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">  
                    <label class="form-label input-info-text">Counting Number</label>
                    <input type="text" name="total_number" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">
                      <label class="form-label input-info-text">Title</label>
                      <input type="text" name="title" class="form-control auth-input">
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
require_once "../dashboard_parts/footer.php";
?>