<?php
require_once "../dashboard_parts/header.php";
$id=$_GET['id'];
$updatem="UPDATE visitor_contucts SET status=1 WHERE id= $id";//update message staus 1 as ared message
$db_result_up=mysqli_query($db_connect,$updatem);

$selectvm="SELECT * FROM visitor_contucts WHERE id=$id";//select visitor message
$db_result_vm=mysqli_query($db_connect,$selectvm);
$visitor=mysqli_fetch_assoc($db_result_vm);
?>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
        <!-- row -->
      <div class="container-fluid">
        <div class="row">
             <div class="card m-auto col-12">
                <div class="card-header bg-secondary" >
                  <h3 class="text-white">Messages Body</h3>
                </div>
                <div class="card-body row">
                    <div class="col-6">
                    <h5>Name: <?=$visitor['name']?></h5>
                    <h5>Email: <?=$visitor['email']?></h5>
                    </div>
                    <div class="col-6">
                      <h5>Time: <?=$visitor['time']?></h5>
                    </div>
                 </div>
                 <div class="col-12">
                    <h5>Body: </h5>
                    <p><?=$visitor['description']?></p>
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