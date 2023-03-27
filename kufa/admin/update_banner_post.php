<?php
session_start();
require_once "dashboard_parts/config.php";
$flag=false;
if(empty($_POST['heding'])){
  $flag=true;
  $_SESSION['heding_null']="Enter your Banner Headin";

}
if(empty($_POST['name'])){
  $flag=true;
  $_SESSION['name_null']="Enter your Banner Title";

}
if(empty($_POST['description'])){
  $flag=true;
  $_SESSION['description_null']="Enter your Description";

}
if(empty($_FILES['banner_image']['name'])){
  $flag=true;
  $_SESSION['banner_image_null']="Enter your Banner Image";

}
if($flag){
$_SESSION['heading']=$_POST['heding'];
$_SESSION['name']=$_POST['name'];
$_SESSION['description']=$_POST['description'];
$_SESSION['banner_image']=$_FILES['banner_image']['name'];
header("location: banner.php");
}else{

$file_name=explode('.',$_FILES['banner_image']['name']);
$ext=end($file_name);
$excepted_ext=['jpg','png','jpeg','webp'];
if(in_array($ext,$excepted_ext)){
  if($_FILES['banner_image']['size']<1000000){
      $heading=$_POST['heding'];
      $name=$_POST['name'];
      $description=$_POST['description'];
      $name=str_replace("'","\'",$name);
      $description=str_replace("'","\'",$description);
      $nfile_name='1'.'.'.$ext;
      $uploade_location="uploads/banner/".$nfile_name;
      move_uploaded_file($_FILES['banner_image']['tmp_name'],$uploade_location);
      $updateb="UPDATE fbanners SET heading='$heading', name='$name', description='$description', banner_image='$nfile_name' WHERE id=1";
      mysqli_query($db_connect,$updateb) or die("Query Faild");
      header("location: banner.php");
    }else{
      $_SESSION['banner_file_long'] ="large file";
      header("location: banner.php");
    }
  }else{
      $_SESSION['banner_file_null'] ="invalid extention";
      header("location: banner.php");
  }
}
?>