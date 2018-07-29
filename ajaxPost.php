<?php 
	include('config.php');
	
	// print_r($_POST); //ดูข้อมูลที่ส่งมา($_POST)เป็น array , name ของ textbox เป็น key, ค่าที่เรากรอกดเป็น value, แล้วตรงนี้ก็คือค่าที่เราส่งไปที่ function(data) ใน index.php ช่วง $.post();  ในคราวเดียวดันด้วย
	// echo $_POST['messages']; //แสดงเฉพราะข้อมูลที่เรากรอกมา
	$message = $_POST['messages'];
	$DB->Query("INSERT INTO messages(message) VALUES('$message')"); //นำค่าที่เรากรอกใส่ database
	// echo $message;
 ?>