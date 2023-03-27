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
          <h3 style="color:black;">Update Contuct Info</h3>
        </div> 
        <div class="card-body col-6 m-auto">
               
            <form action="create_user_post.php" method="post">
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Address Title</label>
                    <input type="text" name="fname" class="form-control ">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Office In</label>
                    <input type="text" name="fname" class="form-control ">
                  </div>
                  <div class="mb-3 form-group">  
                    <label class="form-label input-info-text">Address</label>
                    <input type="text" name="lname" class="form-control ">
                  </div>
                <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Phone</label>
                    <input type="text" name="uname" class="form-control ">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Email</label>
                    <input type="text" name="email" class="form-control ">
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary mb-5 form-control ">Submit</button>
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
?>