<?php
require_once "../dashboard_parts/header.php";

?>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
        <!-- row -->
      <div class="container-fluid">

          
          <!-- Insert service data pop up Modal with bootstrap -->
          <div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Create New user</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              <form action="create_service_post.php" method="post">
                <div class="modal-body">
                            <form action="create_user_post.php" method="post">
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">First Name</label>
                    <input type="text" name="fname" class="form-control ">
                  </div>
                  <div class="mb-3 form-group">  
                    <label class="form-label input-info-text">Last Name</label>
                    <input type="text" name="lname" class="form-control ">
                  </div>
                <div class="mb-3 form-group">
                    <label class="form-label input-info-text">USer Name</label>
                    <input type="text" name="uname" class="form-control ">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Email</label>
                    <input type="text" name="email" class="form-control ">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Password</label>
                    <input type="text" name="password" class="form-control ">
                  </div>
                    <!-- <label class="form-label">User Role</label> -->
                  <div class="mb-3 form-group">
                      <select class="form-select form-control " name="user_role" aria-label="Disabled select example" >
                        <option selected disabled>select User Role</option>
                        <option value="0">Edditor</option>
                        <option value="2">Moderator</option>
                        <option value="1">Admin</option>
                      </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="insert_data" class="btn btn-primary">Save</button>
                </div>
            </form>
              </div>
            </div>
          </div>

          <!------------------------------------------- Update service data pop up modal with bootstrap ------------------------------------------->
          <div class="modal fade" id="updateservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Create New user</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                      <form action="create_user_post.php" method="post">
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">First Name</label>
                    <input type="text" name="fname" class="form-control ">
                  </div>
                  <div class="mb-3 form-group">  
                    <label class="form-label input-info-text">Last Name</label>
                    <input type="text" name="lname" class="form-control ">
                  </div>
                <div class="mb-3 form-group">
                    <label class="form-label input-info-text">USer Name</label>
                    <input type="text" name="uname" class="form-control ">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Email</label>
                    <input type="text" name="email" class="form-control ">
                  </div>
                  <div class="mb-3 form-group">
                    <label class="form-label input-info-text">Password</label>
                    <input type="text" name="password" class="form-control ">
                  </div>
                    <!-- <label class="form-label">User Role</label> -->
                  <div class="mb-3 form-group">
                      <select class="form-select form-control " name="user_role" aria-label="Disabled select example" >
                        <option selected disabled>select User Role</option>
                        <option value="0">Edditor</option>
                        <option value="2">Moderator</option>
                        <option value="1">Admin</option>
                      </select>
                  </div>
                 
              
                      
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="insert_data" class="btn btn-primary">Save</button>
                </div>
            </form>
              </div>
            </div>
          </div>  





        <div class="row">
             <div class="card m-auto col-12">
                <div class="card-header bg-secondary" >
                  <div>
                  <p class="text-white">All Servies</p>
                  </div>
                  <div>
                    <!-- <a class="text-white btn-sm"href="add_servies.php">Add New</a> -->
                    <!-- Button trigger modal  -->
                    <button type="button" class="text-white btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#addservice"> Add New</button>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-success table-striped">
                        <thead>
                          <th>id</th>
                          <th>Service Icone</th>
                          <th>Service Name</th>
                          <th>Description</th>
                          <th>Action</th>
                        </thead>
                        <tbody>
                     <?php
                    $selects="SELECT * FROM users ORDER BY id DESC";//select forentend services 
                    $db_result_s=mysqli_query($db_connect,$selects);
                    foreach($db_result_s as $key=>$users):
                    ?>
                        <tr>
                          <td><?=$key+1?></td>
                          <td><?=$users['uname']?></td>
                          <td><?=$users['email']?></td>
                          <td><?=$users['user_role']==1?"Admin":"Moderator"?></td>
                          <td>
                          <button class="btn-sm btn-info serviceupdate"><i style=" color:blue; font-size:18px; box-shadow:none;" class="fa-solid fa-pen"></i></button>
                          <button class="btn-sm btn-warning "><i style=" color:red; font-size:18px" class="fa-solid fa-trash"></i></button>
                          </td>   
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

<!-- script for service update popup modal  -->
<script>
  $(document).ready(function(){
    $('.serviceupdate').on('click',function(){
      $('#updateservice').modal('show');

      $tr = $(this).closest('tr');

		  var data= $tr.children("td").map(function(){
			return $(this).text();
      }).get();
      console.log(data);
      $('#update_id').val(data[1]);
      $('#service_icon').val(data[2]);
      $('#service_title').val(data[4]);
      $('#description').val(data[5]);
    
    });
  });
</script>
