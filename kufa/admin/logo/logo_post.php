<?php
session_start();
require_once "../dashboard_parts/config.php";
$flag=false;
if(empty($_POST['logo_name'])){
  $flag=true;
  $_SESSION['logo_name_null']="Enter your logo name";

}if(empty($_FILES['fileImg']['name'])){
  $flag=true;
  $_SESSION['logo_file_null']="Enter your logo";

}
if($flag){
header("location: all_logo.php");
}else{

$file_name=explode('.',$_FILES['fileImg']['name']);
$ext=end($file_name);
$logo_name=$_POST['logo_name'];
$excepted_ext=['jpg','png','jpeg','webp'];
if(in_array($ext,$excepted_ext)){
  if($_FILES['fileImg']['size']<1000000){
      $logo_name=str_replace("'","\'",$logo_name);
      $finsert="INSERT INTO flogos(logo_name)VALUES('$logo_name')";
      mysqli_query($db_connect,$finsert);
      $id=mysqli_insert_id($db_connect);
      $nfile_name=$id.'.'.$ext;
      $uploade_location="../uploads/logo/".$nfile_name;
      move_uploaded_file($_FILES['fileImg']['tmp_name'],$uploade_location);
      $updatel="UPDATE flogos SET logo_pic='$nfile_name' WHERE id=$id";
      mysqli_query($db_connect,$updatel);
      header("location: all_logo.php");
    }else{
      $_SESSION['logo_file_null'] ="large file";
      header("location: all_logo.php");
    }
  }else{
      $_SESSION['logo_file_null'] ="large file";"invalid extention";
      header("location: all_logo.php");
  }
}
?>