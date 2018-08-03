<html>
<head>
<!-- <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ /> -->
	<!-- <meta charset="UTF-8"> -->
	<?php 
		require '../config.php';
		// $db->query();
	?>
	<form enctype = "multipart/form-data" action = "import_wi_service.php" method = "post"> 
		<input type = "hidden" name = "MAX_FILE_SIZE" value = "2000000" /> 
		 <!--<input name="file" type="file" /> --> 
		<input type = "file" name = "file" /> 
		<input type = "submit" value = "Upload" /> 
	</form> 

</body>
</html>


