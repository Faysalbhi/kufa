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
            <h3 style="color:black;">Add Service</h3>
            </div>
            <div>
              <a class="text-white btn-sm"href="all_services.php">All Services</a>
            </div>
          </div>
        </div>
        <div class="card-body col-6 m-auto">
               
            <form action="create_service_post.php" method="post">
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Service Icon</label>
                    <input type="text" name="service_icon" placeholder="fab fa-free-code-camp" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">  
                    <label class="form-label input-info-text">Servicr Title</label>
                    <input type="text" name="service_title" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">
                      <label for="service_description" class="form-label input-info-text">Service Description</label>
                      <textarea name="service_description" id="service_description" class="form-control"  rows="6"></textarea>
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