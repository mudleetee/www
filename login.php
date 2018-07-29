<?php 
	require 'config.php';

	$login = $_POST['login'];
	// echo $password = $_POST['password'];
	// echo $password = sha1($_POST['password']);
	$password = sha1($_POST['password']);

	$db->query("SELECT COUNT(id) AS total,login
				FROM   users
				WHERE  login = '$login'
				AND    password = '$password'
			");
	//how คือวิธีการนำค่าที่ได้จากการ assoc มาแสดง
	// echo $db->get('total');//how1.เอาไว้เช็คค่าที่ field ชั่วคราว total ถ้า password ถูกจะคืน 1,ถูกคืน 0
	// $result = $db->get('total');  //how2
	// echo $result;
	// $result = $db->get('');	//how3 เอาค่าที่ได้จาก assoc มาใส่ตัวแปรไว่ก่อน เพราะ assoc ครั้งที่2 จะไมได้ข้อมูลแล้ว
	// echo $result[0]['total'].'<br>';
	// echo $result[0]['login'];'<br>';


	$result = $db->get();
	echo '<pre>';
	print_r($result);	//how4
	echo $result[0]['total'].'<br>';
	echo $result[0]['login'];'<br>';
	if ($result[0]['total'] == 1){
		$_SESSION['userLogin'] = $result[0]['login'];
		$_SESSION['isLogged'] = 1;
		header('location: logged_in.php');
		exit;
	} else {
		header('location: pracert_php.php'); //pracert_php คือ index.php
		exit;

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1>Login.php</h1>
</body>
</html>