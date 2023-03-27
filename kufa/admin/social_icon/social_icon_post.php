<?php
session_start();
require_once "../dashboard_parts/config.php";

$flag=false;
if(empty($_POST['url'])){
    $flag=true;
    $_SESSION['url_null']="Please Provide User First Name";
}
if(empty($_POST['icon'])){
    $flag=true;
    $_SESSION['social_icon_null']="Please Provide Users Laset Name";
}



if($flag){

  // if eny input fild is empty 
  header("location: add_social_icon.php");
}else{
      
      // if all input fild fillup properly 
      $url=$_POST['url'];
      $icon=$_POST['icon'];

      // check is servic all ready exist ot not 
      $selectq="SELECT * FROM social_icons WHERE icon='$icon' ";
      $db_result=mysqli_query($db_connect,$selectq);
      if(mysqli_num_rows($db_result)){
           $_SESSION['social_icon_exist']="This Social Icon All Rready Exist";
          header("location: add_social_icon.php");
      }

      // inser all post data 
      $insert= "INSERT INTO social_icons(url,icon)
       VALUES('$url','$icon')";
      $db_info=mysqli_query($db_connect,$insert);
      header("location: all_social_icon.php");
      mysqli_close($db_connect);
}







?>