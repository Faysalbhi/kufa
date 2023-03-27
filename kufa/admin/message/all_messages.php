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
                  <h3 class="text-white">All Messages</h3>
                </div>
                <div class="card-body">
                    <table class="table table-success table-striped">
                        <thead>
                          <th>SL.No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Date & Time</th>
                          <th>Action</th>
                        </thead>
                        <tbody>
                    <?php
                    $selectvm="SELECT * FROM visitor_contucts";//select visitor message
                    $db_result_vm=mysqli_query($db_connect,$selectvm);
                    foreach($db_result_vm as $key=>$visitor):
                    ?>
                       
                          <?php if($visitor['status']==0){
                            $bold="font-weight:700;color:green";
                          }else{
                            $bold="";
                          }
                          
                          ?>
                        <tr style="<?=$bold?>" id=tr_<?=$visitor['id']?>>
                          <td><?=$key+1?></td>
                          <td><?=$visitor['name']?></td>
                          <td><?=$visitor['email']?></td>
                          <td><?=$visitor['time']?></td>
                          <td>
                          <a href="mark_message_read.php?id=<?=$visitor['id']?>"class="btn-sm btn-success">Mark as Read</a>
                          <a href="message_read.php?id=<?=$visitor['id']?>"class="btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
                          <button class="btn-sm btn-warning delete-message" value="<?=$visitor['id']?>"><i style=" color:red; font-size:18px" class="fa-solid fa-trash"></i></button></td>
                             
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
<script>

$('.delete-message').click(function(e){
    e.preventDefault();

    var message_id = $(this).val();
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
            url:'delete_message.php',
            data: {
              'message_id': true,
              'message_id': message_id,
            },
            success: function(response){
            }
            
          
          });
          
          $('#tr_'+message_id).hide(2000);
        }
      })



});
</script>