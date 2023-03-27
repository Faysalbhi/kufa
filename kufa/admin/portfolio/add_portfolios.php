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
            <h3 class="text-black">Add Portfolio</h3>
            </div>
            <div>
              <a class="text-white btn-sm"href="all_portfolios.php">All Portfolio</a>
            </div>
          </div>
        <div class="card-body col-6 m-auto">
               
            <form action="create_user_post.php" method="post">
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Title</label>
                    <input type="text" name="portfolio_title" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">  
                    <label class="form-label input-info-text">Category</label>
                    <input type="text" name="portfolio_category" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Image</label>
                    <input type="text" name="portfolio_image" class="form-control auth-input">
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