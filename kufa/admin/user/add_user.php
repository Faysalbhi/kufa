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
        <div class="card-header bg-secondary text-center" >
          <h3 style="color:black;">Create User</h3>
        </div>
        <div class="card-body col-6 m-auto">
               
            <form action="create_user_post.php" method="post">
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">First Name</label>
                    <input type="text" name="fname" value="<?=isset($_SESSION['fname'])?$_SESSION['fname']:''?>" class="form-control ">
                    <?php echo isset($_SESSION['fname_null'])?"<i style='color:red'>".$_SESSION['fname_null']."</i>":''?>
                  </div>
                  <div class="mb-3 form-group">  
                    <label class="form-label input-info-text">Last Name</label>
                    <input type="text" name="lname" value="<?=isset($_SESSION['lname'])?$_SESSION['lname']:''?>" class="form-control ">
                    <?php echo isset($_SESSION['lname_null'])?"<i style='color:red'>".$_SESSION['lname_null']."</i>":''?>
                  </div>
                <div class="mb-3 form-group">
                    <label class="form-label input-info-text">User Name</label>
                    <input type="text" name="uname" value="<?=isset($_SESSION['uname'])?$_SESSION['uname']:''?>" class="form-control ">
                    <?php echo isset($_SESSION['uname_null'])?"<i style='color:red'>".$_SESSION['uname_null']."</i>":''?>
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Email</label>
                    <input type="text" name="email" value="<?=isset($_SESSION['email'])?$_SESSION['email']:''?>" class="form-control ">
                    <?php echo isset($_SESSION['email_null'])?"<i style='color:red'>".$_SESSION['email_null']."</i>":''?>
                    <?php echo isset($_SESSION['email_exist'])?"<i style='color:red'>".$_SESSION['email_exist']."</i>":''?>
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Password</label>
                    <input type="text" name="password" value="<?=isset($_SESSION['password'])?$_SESSION['password']:''?>" class="form-control ">
                    <?php echo isset($_SESSION['pass_null'])?"<i style='color:red'>".$_SESSION['pass_null']."</i>":''?>
                  </div>
                    <!-- <label class="form-label">User Role</label> -->
                  <div class="mb-3 form-group">
                      <select class="form-select form-control " name="user_role" value="<?=isset($_SESSION['user_role'])?$_SESSION['user_role']:''?>" aria-label="Disabled select example" >
                        <option selected disabled>select User Role</option>
                        <option value="0">Edditor</option>
                        <option value="2">Moderator</option>
                        <option value="1">Admin</option>
                      </select>
                      <?php echo isset($_SESSION['user_role_null'])?"<i style='color:red'>".$_SESSION['user_role_null']."</i>":''?>
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
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['uname']);
unset($_SESSION['email']);
unset($_SESSION['email_exist']);
unset($_SESSION['password']);
unset($_SESSION['user_role']);
unset($_SESSION['fname_null']);
unset($_SESSION['lname_null']);
unset($_SESSION['uname_null']);
unset($_SESSION['email_null']);
unset($_SESSION['pass_null']);
unset($_SESSION['user_role_null']);

?>