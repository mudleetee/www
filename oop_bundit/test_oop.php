<?php
	//localhost/oop_bundit/test_oop.php
	// require_once "Class/FirstClass.php";
	// require_once "Class/Class_DB.php";
	session_start();
	include_once "lib/Class_DB.php";
	include_once "lib/config.inc.php";
	// include_once "../Class_DB.php";
	// include_once "../config.inc.php";
	// include_once "../blog/Class_DB.php";
	// include_once "../blog/config.inc.php";


	$db = new Class_DB(DB_HOST,DB_ROOT,DB_PW,DB_NAME);
	// $db->setQuary("SELECT* FROM tb_user");
	
	// echo "Thu number of tb_user is ".$db->getNum_rows();

	// foreach ($db->getFetch_assoc() as $r){
	// 	echo "<p> user = " .$r['user_id'].":".$r['username']."</p>";
	// }

	// while($r = $db->getFetch_assoc()){
	// 	echo "<p> user = " .$r['user_id'].":".$r['username']."</p>";
	// }

	// echo "<table border='1'>
	// 		<tr>
	// 			<th>id</th>
	// 			<th>username</th>
	// 			<th>password</th>
	// 			<th>nameuser</th>
	// 			<th>type_user_id</th>
	// 		</tr>";
	// $y=1;
	// while($row = $db->getFetch_assoc()){
	// 		echo "<tr>";
	// 			echo "<td>". $y 				. "</td>";
	// 			echo "<td>". $row['username'] 	. "</td>";
	// 			echo "<td>". $row['password'] 	. "</td>";
	// 			echo "<td>". $row['nameuser'] 	. "</td>";
	// 			echo "<td>". $row['type_user_id'] . "</td>";
	// 		echo "</tr>";
	// 	$y+=1;
	// }
	// echo "</table>";
?> 
<!DOCTYPE html>
<html>
<head>
<!-- <meta http-equiv="Content-Type" content="text/html;charset=utf-8"></meta> -->
<meta charset="UTF-8">
	<title>HTML5 PHP OOP</title>
</head>
<body>

</body>
</html>

