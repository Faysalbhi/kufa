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
              <form action="create_service_post.php" method="post">
                <div class="modal-body">
                      <input type="text" id="update_id">
                      <div class="mb-3 form-group">
                        <label class="form-label input-info-text">Service Icon</label>
                        <input type="text" name="service_icon" id="service_icon" class="form-control ">
                      </div>
                      <div class="mb-3 form-group">  
                        <label class="form-label input-info-text">Servicr Title</label>
                        <input type="text" name="service_title"  id="service_title" class="form-control ">
                      </div>
                      <div class="mb-3 form-group">
                          <label for="service_description" class="form-label input-info-text">Service Description</label>
                          <textarea name="description" id="description" class="form-control"  rows="6"></textarea>
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




            <div class="card col-12 ">
              <div class="card-header bg-secondary" >
                  <div>
                  <h3>All Social Icon</h3>
                  
                  </div>
                  <div>
                    
                    <button type="button" class="text-white btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#addservice"> + Add New</button>
                  </div>
                
              </div>
              <div class="card-body">
                  <table class="table table-success table-striped">
                      <thead>
                        <th>id</th>
                        <th>Url </th>
                        <th>Icon</th>
                        <th>Status</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                      <?php
                      $selectsi="SELECT * FROM social_icons ORDER BY id DESC";//select Social Icons table 
                      $db_result_si=mysqli_query($db_connect,$selectsi);
                      foreach($db_result_si as $key=>$icons):
                      ?> 
                      <tr>
                        <td><?=$key+1?></td>
                        <td><?=$icons['url']?></td>
                        <td><i style="font-size:30px" class= "<?=$icons['icon']?>"></i></td>
                        <td><a href="icon_status_toggle.php?id=<?=$icons['id']?>&status=<?=$icons['status']?>"><?=$icons['status']==1?'<i style="font-size:40px;color:purple;" class="flaticon-381-switch-4"></i>':
                        '<i style="font-size:40px;color:red;" class="flaticon-381-switch-5"></i>'?></a></td>
                        <td><a href="logo_delete.php?logo_pic=<?=$icons['id']?>" class="btn-sm btn-danger"><i class="fa-regular fa-trash-can"></i></a></td>
                            
                      </tr> 
                  <?php endforeach;?>    
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-8 ">
            <div class="card">
              <div class="card-header bg-success text-center" >
                <h3 style="color:black;">Add Social Icon</h3>
                <?php
                  $social_icon_list=[
                  'fa-facebook',
                    'fa-facebook-f',
                    'fa-facebook-official',
                    'fa-facebook-square',
                    'fa-twitter',
                    'fa-twitter-square',
                    'fa-instagram',
                    'fa-telegram',
                    'fa-linkedin',
                    'fa-linkedin-square',
                    'fa-youtube',
                    'fa-youtube-play',
                    'fa-youtube-square',
                    'fa-yahoo',
                    'fa-pinterest',
                    'fa-pinterest-p',
                    'fa-pinterest-square',
                    'fa-snapchat',
                    'fa-snapchat-ghost',
                    'fa-snapchat-square',
                  ];
                ?>
              </div>
              <div class="card-body">
                <form class="col-12 m-auto" action="social_icon_post.php" method="post" enctype="multipart/form-data">
                  <div>
                    <?php foreach($social_icon_list as $value):?>
                    <i style="font-size:20px; padding: 5px" class="fab <?=$value?>"></i>
                    <?php endforeach?>

                  </div>
                  <div class="form-group mt-5">
                    <input class="form-control form-control-lg" type="text"  name="url" value="" placeholder="https" aria-label=".form-control-lg example">
                  </div>
                  <div class="form-group mt-5">
                    <input class="form-control form-control-lg" type="text" id="icon_name" name="icon"  placeholder="Icon Name" aria-label=".form-control-lg example">
                  </div>
                
                  <button type="submit" class="btn-secondary"style="width:100%;height:40px;border-radius:4px;">Update</button>
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
<?php
if(isset($_SESSION['min_error'])):?>
<script>
  Swal.fire({
  icon: 'error',
  title: 'Sorry...',
  text: '<?=$_SESSION['min_error']?>',
  
})
</script>
<? endif; unset($_SESSION['min_error']);?>
<?php
if(isset($_SESSION['max_error'])):?>
<script>
  Swal.fire({
  icon: 'error',
  title: 'Sorry...',
  text: '<?=$_SESSION['max_error']?>',
  
})
</script>
<? endif; unset($_SESSION['max_error']);?>
<script>
  $('.fab').click(function(){
    var icon_class=$(this).attr('class');
    $('#icon_name').attr('value',icon_class);

  
  })

</script>
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