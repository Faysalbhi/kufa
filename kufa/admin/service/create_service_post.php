<?php
session_start();
require_once "../dashboard_parts/config.php";
// $checkpassword="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{5,}$/";//regex for password 

// $flag=false;
// if(empty($_POST['service_icon'])){
//     $flag=true;
//     $_SESSION['service_icon_null']="Please Provide User First Name";
// }
// if(empty($_POST['service_title'])){
//     $flag=true;
//     $_SESSION['service_title_null']="Please Provide Users Laset Name";
// }
// if(empty($_POST['service_description'])){
//     $flag=true;
//     $_SESSION['service_description_null']="Please Provide Users Name";
// }



// if($flag){

//   // if eny input fild is empty 
//   $_SESSION['service_icon']=$_POST['service_icon'];
//   $_SESSION['service_title']=$_POST['service_title'];
//   $_SESSION['service_description']=$_POST['service_description'];
//   header("location: add_services.php");
// }else{
      
      // if all input fild fillup properly 
      
      // check is servic all ready exist ot not 
    //   $selectq="SELECT * FROM fservices WHERE service_icon='$service_icon' ";
    //   $db_result=mysqli_query($db_connect,$selectq);
    //   if(mysqli_num_rows($db_result)){
    //        $_SESSION['service_exist']="This Service All Rready Exist";
    //       header("location: add_services.php");
    //   }

      // inser all post data 
      if(isset($_POST['insert_data'])){
      $service_icon=$_POST['service_icon'];
      $service_title=$_POST['service_title'];
      $service_description=$_POST['service_description'];

      $insert= "INSERT INTO fservices(service_icon,service_title,service_description)
       VALUES('$service_icon','$service_title','$service_description')";
      $db_info=mysqli_query($db_connect,$insert);
      header("location: all_services.php");
      mysqli_close($db_connect);
      }
// }







?>