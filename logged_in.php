<?php
	require 'config.php';	//ถ้าไม่มีตรงนี้ จะไม่มี session ทั้ง2มา งงวะ  หน้า login ก็เรียกทีแล้ว ยังไม่ start อีกหรือไง

	if (isset($_GET['logout'])){
		unset($_SESSION['userLogin']);
		unset($_SESSION['isLogged']);
		session_destroy();
		header('location: pracert_php.php');
		exit;
	}
	
	if (isset($_SESSION['userLogin'])){
		echo "Main.php user= ". $_SESSION['userLogin'].'<br>';	
	} else {
		echo "not found seesion userLogin".'<br>';
	}

	if (isset($_SESSION['isLogged'])){
		echo "Main.php user= ". $_SESSION['isLogged'].'<br>';	
	} else {
		echo "not found seesion isLogged".'<br>';
	}
	
	if (!isset($_SESSION['userLogin']) && !isset($_SESSION['isLogged'])){ //สำคัญมากตรงนี้เช็ค seesion 2 ตัวว่ามีค่าหรือเปล่าค้าไม่มีค่า(คือ login ไม่ถูกต้องมันจะเด้งให้ไป กรอกใหม่ทันที)ถ้าไม่มีการเช็คตรงนี้มันจะเปิดเหน้านี้ได้โดยตรงไม่ต้องผ่านการ login ซึ่งเราไม่ต้องการ
		header('location: pracert_php.php');
		exit;	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>logged_in</title>
<!-- 	<link rel="stylesheet" href="css/defalut.css" />
	<script src="js/jquery.js"></script>
	<script src="js/custom.js"></script> -->
</head>
<body>

	<h1>Logged in</h1>
	Welcome!!!
	<a href="?logout">Logout</a>
</body>
</html>

