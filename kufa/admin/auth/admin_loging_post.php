<?php
session_start();
require_once "../dashboard_parts/config.php";
$flag=false;
if(empty($_POST['email'])){
  $flag=true;
  $_SESSION['email_error']='Provide a Email Address😃';
}
if(empty($_POST['password'])){
  $flag=true;
  $_SESSION['pass_serror']='Provide Your Password😃';

}
if($flag){
  header("location: $hostName"."admin");

}else{
  if(isset($_POST['submit'])){
  $email=mysqli_real_escape_string($db_connect,$_POST['email']);
  $password=mysqli_real_escape_string($db_connect,$_POST['password']);
  $sqli="SELECT * FROM users WHERE email='{$email}'";
  $db_result=mysqli_query($db_connect,$sqli);
  echo $db_result->num_rows; 

 if($db_result->num_rows==1){
  $users=mysqli_fetch_assoc($db_result);
  if(password_verify($password,$users['password'])){
  $_SESSION['id']=$users['id'];
  $_SESSION['username']=$users['uname'];
  $_SESSION['email']=$users['email'];
  $_SESSION['user_role']=$users['user_role'];
  header("location:$hostName"."admin/dashboard.php");
  }else{
  $_SESSION['pass_serror']='invalid Password😃';
  header("location: $hostName"."admin");
    }
 }else{
  $_SESSION['email_error']='invalid Email Address😃';
  header("location: $hostName"."admin");
 }
}else{
  $block_ip=($_SERVER['REMOTE_ADDR']);
  header("location:ip_block.php?ip=".$block_ip);

}
}





?>