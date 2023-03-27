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
            <div class="card col-8 ">
              <div class="card-header bg-secondary" >
                  <h3>All Logo</h3>
                
              </div>
              <div class="card-body">
                  <table class="table table-success table-striped">
                      <thead>
                        <th>id</th>
                        <th>Url </th>
                        <th>Icon</th>
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
                        <td><i class= "<?=$icons['icon']?>"></i></td>
                        <td><a href="logo_status_toggle.php?id=<?=$icons['id']?>&status=<?=$icons['status']?>"><?=$icons['status']==1?'<i style="font-size:40px;color:purple;" class="flaticon-381-switch-4"></i>':
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
<script>
  $('.fab').click(function(){
    var icon_class=$(this).attr('class');
    $('#icon_name').attr('value',icon_class);

  
  })

</script>