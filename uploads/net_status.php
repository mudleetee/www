<?php

/**
 * @author bent ole fosse
 * 
 */
#include "databaseconfig.php";

$con = mysqli_connect('localhost','root','123456','netwatch');
mysqli_set_charset($con,"utf8");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"netwatch");

//get data from header
$router=$_GET['router'];
$status=$_GET['status'];
$time=$_GET['time'];

$query="UPDATE netwatch SET status='".$status."', time='".$time."' WHERE id='".$router."'";

#$result=mysql_query($query)or die(mysql_error());

$result = mysqli_query($con,$query);

echo "done";
?>