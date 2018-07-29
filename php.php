<?php 
	// print_r($_POST);
	// if(isset($_POST))
	if (!empty($_POST)){
		$_POST['name'];
		$_POST['age'];
		$_POST['weight'];
		$_POST['height'];
		echo  "It worked"; 
	} else {
		echo "It didn't worked"; 
	}
	

	// $DB->Query("insert data");

