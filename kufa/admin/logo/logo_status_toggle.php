<?php
require_once "../dashboard_parts/config.php";
$id=$_GET['id'];
$status=$_GET['status'];
if($status==0){
  //logo status update query
  $updatels="UPDATE flogos SET status= 1 WHERE id=$id;";
  $updatels.="UPDATE flogos SET status= 0 WHERE id!=$id";
  mysqli_multi_query($db_connect,$updatels);
  header("location: all_logo.php");

}else{
  $updatels="UPDATE flogos SET status= 0 WHERE id=$id";
  mysqli_query($db_connect,$updatels);
  header("location: all_logo.php");


}
?>