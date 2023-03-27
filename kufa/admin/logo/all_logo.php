<?php
require_once "../dashboard_parts/header.php";

?>
#hello...
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
        <!-- row -->
      <div class="container-fluid">
        <div class="row">
             <div class="card col-8">
                <div class="card-header bg-secondary" >
                    <h3>All Logo</h3>
                 
                </div>
                <div class="card-body">
                    <table class="table table-success table-striped">
                        <thead>
                          <th>id</th>
                          <th>Logo Name</th>
                          <th>Logo</th>
                          <th>Status</th>
                          <th>Action</th>
                        </thead>
                        <tbody>
                    <?php
                    $selectl="SELECT * FROM flogos ORDER BY id DESC";//select froknt end logos table 
                    $db_result_l=mysqli_query($db_connect,$selectl);
                    foreach($db_result_l as $key=>$flogos):
                    ?> 
                        <tr>
                          <td><?=$key+1?></td>
                          <td><?=$flogos['logo_name']?></td>
                          <td><img src="<?=$hostName.'admin/uploads/logo/'.$flogos['logo_pic']?>" alt="logo_image" style="width:60px;border-radius:50%;"></td>
                          <td><a href="logo_status_toggle.php?id=<?=$flogos['id']?>&status=<?=$flogos['status']?>"><?=$flogos['status']==1?'<i style="font-size:40px;color:purple;" class="flaticon-381-switch-4"></i>':
                          '<i style="font-size:40px;color:red;" class="flaticon-381-switch-5"></i>'?></a></td>
                          <td><a href="logo_delete.php?logo_pic=<?=$flogos['logo_pic']?>" class="btn-sm btn-danger"><i class="fa-regular fa-trash-can"></i></a></td>
                             
                        </tr> 
                    <?php endforeach;?>    
                        </tbody>
                    </table>
                  </div>
              </div>
        <div class="col-4">
          <div class="card">
            <div class="card-header bg-success text-center" >
              <h3 style="color:black;">Add Logo</h3>
            </div>
            <form class="col-12 m-auto" action="logo_post.php" method="post" enctype="multipart/form-data">
              <div class="mt-3 upload">
                <img src="<?=$hostName.'admin/uploads/logo/default_logo.png'?>" for="fileImg" alt="" id="image" >
                <div class="rightRound" id="upload">
                  <input type="file" name="fileImg" id="fileImg" accept=".jpeg, .jpg, .png, .webp">
                  <i class="fa fa-camera"></i>
                </div> 
              </div>
              <div class="form-group mt-5">
                <input class="form-control form-control-lg" type="text" name="logo_name" placeholder="Logo Name" aria-label=".form-control-lg example">
                <div id="emailHelp" class="form-text input-info-text text-danger"><?=isset($_SESSION['logo_name_null'])?$_SESSION['logo_name_null']:'';unset($_SESSION['logo_name_null'])?></div>
              </div>
             
              <button type="submit" class="btn-secondary"style="width:100%;height:40px;border-radius:4px;">Update</button>
           </form>
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