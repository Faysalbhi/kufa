<?php
require_once "../dashboard_parts/config.php";


$id=$_POST['service_id'];

$delete_service="DELETE FROM fservices WHERE id=$id";
$db_info = mysqli_query($db_connect,$delete_service);





?>