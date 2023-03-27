<?php
require_once "dashboard_parts/header.php";
$bquery= "SELECT * FROM fbanners";
$db_bresult=mysqli_query($db_connect,$bquery);
$fbanners=mysqli_fetch_assoc($db_bresult);
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
          <h3 style="color:black;">Update Banner Info</h3>
        </div>
        <div class="card-body col-6 m-auto">
               
            <form action="update_banner_post.php" method="post" enctype="multipart/form-data">
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text ">Heading</label>
                    <input type="text" class="form-control " name="heding" value="<?=$fbanners['heading']?>">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Title</label>
                    <input type="text" class="form-control" name="name" value="<?=$fbanners['name']?>">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Description</label>
                    <input type="text" class="form-control" name="description" value="<?=$fbanners['description']?>">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Banner Image</label>
                    <img src="<?=$hostName?>" alt="">
                    <input type="file" class="form-control" name="banner_image" >
                  </div>
                  <button type="submit" name="submit" class="btn-secondary" style="width:100%;height:40px;border-radius:4px;">Submit</button>
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
require_once "dashboard_parts/footer.php";
unset($_SESSION['footer_null']);
?>