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
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Add Service</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              <form action="create_service_post.php" method="post">
                <div class="modal-body">
                      <div class="mb-3 form-group">
                        <label class="form-label input-info-text">Service Icon</label>
                        <input type="text" name="service_icon" placeholder="fab fa-free-code-camp" class="form-control ">
                      </div>
                      <div class="mb-3 form-group">  
                        <label class="form-label input-info-text">Servicr Title</label>
                        <input type="text" name="service_title" class="form-control ">
                      </div>
                      <div class="mb-3 form-group">
                          <label for="service_description" class="form-label input-info-text">Service Description</label>
                          <textarea name="service_description" id="service_description" class="form-control"  rows="6"></textarea>
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
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Add Service</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              <form action="eddit_service.php" method="post">
                <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">
                      <div class="mb-3 form-group">
                        <label class="form-label input-info-text">Service Icon</label>
                        <input type="text" name="service_icon" id="service_icon" class="form-control ">
                      </div>
                      <div class="mb-3 form-group">  
                        <label class="form-label input-info-text">Servicr Title</label>
                        <input type="text" name="service_title"  id="service_title" class="form-control ">
                      </div>
                      <div class="mb-3 form-group">
                          <textarea style="color:red"name="service_description" id="service_description" class="form-control"  rows="6">
                            
                          </textarea>
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
                    $selects="SELECT * FROM fservices ORDER BY id DESC";//select forentend services 
                    $db_result_s=mysqli_query($db_connect,$selects);
                    foreach($db_result_s as $key=>$services):
                    ?>
                        <tr id=tr_<?=$services['id']?>>
                          <td><?=$key+1?></td>
                          <td style="display:none"><?=$services['id']?></td>
                          <td ><i style="font-size:50px"class="<?=$services['service_icon']?>"></i></td>
                          <td style="display:none"><?=$services['service_icon']?></td>
                          <td><?=$services['service_title']?></td>
                          <td><?=substr($services['service_description'],0,20)."....more"?></td>
                          <td>
                          <button class="btn-sm btn-info serviceupdate"><i style=" color:blue; font-size:18px; box-shadow:none;" class="fa-solid fa-pen"></i></button>
                          <button class="btn-sm btn-warning service-delete" value="<?=$services['id']?>"><i style=" color:red; font-size:18px" class="fa-solid fa-trash"></i></button>
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
      $('#service_icon').val(data[3]);
      $('#service_title').val(data[4]);
      $('#service_description').val(data[5]);
    
    });
  });

</script>

<script>

$('.service-delete').click(function(e){
    e.preventDefault();

    var service_id = $(this).val();
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            type: 'post',
            url:'service_delete.php',
            data: {
              'service_id': true,
              'service_id': service_id,
            },
            success: function(response){
            }
            
          
          });
          
          $('#tr_'+service_id).hide(2000);
        }
      })



});
</script>
