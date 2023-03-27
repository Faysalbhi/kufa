<?php
session_start();
require_once "../dashboard_parts/config.php";
$checkpassword="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{5,}$/";//regex for password 

$flag=false;
if(empty($_POST['icon'])){
    $flag=true;
    $_SESSION['icon_null']="Please Provide User First Name";
}
if(empty($_POST['total_number'])){
    $flag=true;
    $_SESSION['total_number_null']="Please Provide Users Laset Name";
}
if(empty($_POST['title'])){
    $flag=true;
    $_SESSION['title_null']="Please Provide A achievement title";
}

if($flag){

  // if eny input fild is empty 
  $_SESSION['icon']=$_POST['icon'];
  $_SESSION['total_number']=$_POST['total_number'];
  $_SESSION['title']=$_POST['title'];
  header("location: add_achievement.php");
}else{
      
      // if all input fild fillup properly 
      $icon=$_POST['icon'];
      $total_number=$_POST['total_number'];
      $title=$_POST['title'];
      // check is servic all ready exist ot not 
      $selectq="SELECT * FROM achievements WHERE icon='$icon' ";
      $db_result=mysqli_query($db_connect,$selectq);
      if(mysqli_num_rows($db_result)){
           $_SESSION['achievement_exist']="This achievement All Rready Exist";
          header("location: add_achievement.php");
      }else{

      // inser all post data 
      $insert= "INSERT INTO achievements(icon,total_number,title)
       VALUES('$icon',$total_number,'$title')";
      $db_info=mysqli_query($db_connect,$insert);
      header("location: all_achievement.php");
      mysqli_close($db_connect);      
      }

}







?>