<?php
	require_once(dirname(__FILE__)."/routeros.class.php");
	$host = "192.168.77.1";
  	$login = "admin";
 	$password = "totwinet";

	$conn = RouterOS::connect($host, $login, $password) or die("couldn't connect to $login@$host\n");
	echo "connected";
	$conn->setTimeout(60);
	$conn->getall("/system/package");

?>