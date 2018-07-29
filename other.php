<?php	
	session_start();
	// session_regenerate_id(true);
	if (isset($_SESSION['user'])){
		echo "other.php user= ".$_SESSION['user'].'<br>';	
	}
	if(isset($_REQUEST['destroy'])){
		session_destroy();
		echo "other.php=>Destroyed user= ".$_SESSION['user'].'<br>';	
	}

?>
<a href="pracert_php.php"> Main Page</a>
<br />
<a href="?destroy">Destroy_session ที่</a>
