<?php
session_start();
require_once "../dashboard_parts/config.php";
$id=$_GET['id'];
$status=$_GET['status'];
$select_social_icon="SELECT COUNT(*) AS total_active FROM social_icons WHERE status=1";
$db_result=mysqli_query($db_connect,$select_social_icon);
$iocns=mysqli_fetch_assoc($db_result);

if($status==0){
  //social icon status Active query
  if($iocns['total_active']<4){
    $updatels="UPDATE social_icons SET status= 1 WHERE id=$id;";
    mysqli_query($db_connect,$updatels);
    header("location: all_social_icon.php");
  }else{
    $_SESSION["max_error"]="Maximum Active Limite over";
    header("location: all_social_icon.php");
  
  }
  

}else{
    //social icon status deActive query 
    if($iocns['total_active']>2){
      $updatels="UPDATE social_icons SET status= 0 WHERE id=$id";
      mysqli_query($db_connect,$updatels);
      header("location: all_social_icon.php");
    }else{
    $_SESSION["min_error"]="Minimum 2 Active icons needed";
    header("location: all_social_icon.php");

    }
  
}
?>