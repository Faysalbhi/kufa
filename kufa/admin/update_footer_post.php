<?php
session_start();
require_once "dashboard_parts/config.php";
if(!empty($_POST['footer'])){
$description=$_POST['footer'];
$updatef="UPDATE ffooter SET description='$description'";
mysqli_query($db_connect,$updatef);
header("location: dashboard.php");
}else{
$_SESSION['footer_null']="Please Enter your Footer Description";
header("location: update_footer.php");
}


?>