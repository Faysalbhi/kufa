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
          <h3 style="color:black;">Update About Section</h3>
        </div>
        <div class="card-body col-6 m-auto">
               
            <form action="create_user_post.php" method="post">
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">First Name</label>
                    <input type="text" name="fname" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">  
                    <label class="form-label input-info-text">Last Name</label>
                    <input type="text" name="lname" class="form-control auth-input">
                  </div>
                <div class="mb-3 form-group">
                    <label class="form-label input-info-text">USer Name</label>
                    <input type="text" name="uname" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Email</label>
                    <input type="text" name="email" class="form-control auth-input">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Password</label>
                    <input type="text" name="password" class="form-control auth-input">
                  </div>
                    <!-- <label class="form-label">User Role</label> -->
                  <div class="mb-3 form-group">
                      <select class="form-select form-control auth-input" name="user_role" aria-label="Disabled select example" >
                        <option selected disabled>select User Role</option>
                        <option value="0">Edditor</option>
                        <option value="2">Moderator</option>
                        <option value="1">Admin</option>
                      </select>
                  </div>
                 
              
                  <button type="submit" name="submit" class="btn btn-primary mb-5 form-control profile-btn">Submit</button>
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