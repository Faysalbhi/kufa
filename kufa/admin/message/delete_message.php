<?php
require_once "../dashboard_parts/config.php";


$id=$_POST['message_id'];

$delete_service="DELETE FROM visitor_contucts WHERE id=$id";
$db_info = mysqli_query($db_connect,$delete_service);





?>