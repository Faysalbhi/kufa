<?php
$hostName="http://localhost:8080/kufa/";

$db_connect=mysqli_connect("localhost","root","","kufa");

function d($dvalue){
  echo "<pre>";
  var_dump($dvalue);
  echo "</pre>";

}function dd($dvalue){
  echo "<pre>";
  var_dump($dvalue);
  echo "</pre>";
  die("This function from: Config.php");

}


?>