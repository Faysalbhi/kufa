<?php
require_once "../dashboard_parts/config.php";


    $id=$_POST['update_id'];
    $service_icon=$_POST['service_icon'];
    $service_title=$_POST['service_title'];
    $description=$_POST['service_description'];



    $update="UPDATE fservices SET service_icon='$service_icon',service_title='$service_title',service_description='$description' WHERE id=$id";
    echo $update;
    mysqli_query($db_connect,$update);
    header("location: all_services.php");

?>