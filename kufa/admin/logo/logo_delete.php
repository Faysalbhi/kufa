<?php
require_once "../dashboard_parts/config.php";
$logo_pic=$_GET['logo_pic'];
unlink("../uploads/logo/$logo_pic");
$deletem="DELETE FROM flogos WHERE logo_pic='$logo_pic'";
mysqli_query($db_connect,$deletem);
header("location: all_logo.php");
?>