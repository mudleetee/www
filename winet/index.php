<html>
<head>
	<!-- Required meta tags Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>WiNet</title>
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  
    <!-- jquery -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

<body style="background-image:url(/img/bg.png)">
	<?php 
		require '../config.php';
		// $db->query();
	?>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-5 bg-success">
				<form id="form1" enctype = "multipart/form-data" action = "import_wi_service.php" method = "post">
					<input type = "hidden" name = "MAX_FILE_SIZE" value = "2000000" /> 
					<input type = "file" name = "file" /> 
					<input type="submit" class="btn btn-danger" value="Upload">
					
				</form>
			</div>
		</div>
	</div>	
	<hr>
</body>
</html>


