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
             <div class="card m-auto col-12">
                <div class="card-header bg-secondary" >
                  <div>
                    <h3 class="text-white">All Achievement</h3>
                    </div>
                    <div>
                      <a class="text-white btn-sm"href="add_achievement.php">Add New</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-success table-striped">
                        <thead>
                          <th>id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>User Role</th>
                          <th>Action</th>
                        </thead>
                        <tbody>
                     <?php
                    $selecta="SELECT * FROM achievements";//select achievement 
                    $db_result_a=mysqli_query($db_connect,$selecta);
                    foreach($db_result_a as $key=>$achivements):
                    ?>
                        <tr>
                          <td><?=$key+1?></td>
                          <td> <i style="font-size:50px" class="<?=$achivements['icon']?>"></i> </td>
                          <td><?=$achivements['total_number']?></td>
                          <td><?=$achivements['title']?></td>
                          <td><a href="" class="btn-sm btn-success"><i class="fa-solid fa-pen"></i></a><a href="" class="btn-sm btn-danger"><i class="fa-regular fa-trash-can"></i></a></td>
                             
                        </tr> 
                    <?php endforeach;?>     
                        </tbody>
                    </table>
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