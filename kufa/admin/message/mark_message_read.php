<?php
require_once "../dashboard_parts/config.php";
$id=$_GET['id'];
$updatem="UPDATE visitor_contucts SET status=1 WHERE id= $id";//update message staus 1 as read message
$db_result_up=mysqli_query($db_connect,$updatem);
header("location: all_messages.php");
?>