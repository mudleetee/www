<script type="text/javascript" src="js/jquery.js"></script>
<script>
	$(document).ready(function(){
		$('.delete').click(function(){
			var item = $(this).parent(); //2 //3
			var id = $(this).attr('rel');
			// alert(id); //1
			$.post('ajaxDelete.php',{'id':id}, function(data){
				// alert(data); //1
				// alert(item); //2
				$(item).hide(); //3

			});

		});
	});
</script>

<?php 
	include('config.php');
	
	$DB->Query('SELECT * FROM messages');
	$result = $DB->get();

	// echo json_encode($result);
	// echo '<pre>'; 
	// print_r($result);

	foreach ($result as $key => $value){
		// echo  $value['id'] . '  ' . $value['message'] .'<br>';
		echo  '<div>'. $value['message'] . '<a href="#" class="delete" rel="' . $value['id'] .'"> Delete</a>' .'</div>';
	}

 ?>