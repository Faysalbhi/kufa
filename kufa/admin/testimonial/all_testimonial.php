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
                    <h3 class="text-white">All Testimonial</h3>
                    </div>
                    <div>
                      <a class="text-white btn-sm"href="add_testimonial.php">Add New</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-success table-striped">
                        <thead>
                          <th>id</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>designation</th>
                          <th>Description</th>
                          <th>Action</th>
                        </thead>
                        <tbody>
                    <?php
                    $selectt="SELECT * FROM testimonials";//select Testimonials 
                    $db_result_t=mysqli_query($db_connect,$selectt);
                    foreach($db_result_t as $key=>$testimonials):
                    ?>
                        <tr>
                          <td><?=$key+1?></td>
                          <td><img src="<?=$hostName.'admin/uploads/testimonial/'.$testimonials['image']?>" style="width:60px;border-radius:50%;" alt="testimonial images"></td>
                          <td><?=$testimonials['name']?></td>
                          <td><?=$testimonials['designation']?></td>
                          <td><?=substr($testimonials['description'],0,20)."...."?></td>
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