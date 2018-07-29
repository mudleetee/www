$(function(){
	var player ='<div id="player"></div>';
	$("#map").append(player); //เอา div player มาทับซ้อน div map ด้วยการappend

	$(document).keydown(function(e){
		// alert(e.keyCode);	//กด keyboard แล้วแสดงเลข keycode เชน ลูกศรขึ้นเท่ากับ 38
		var position = $('#player').position();
		// alert(position.top);	//เข็คดูว่าตอนเริ่มต้น ตำแหน่ง position.top มีค่าเท่ากับ
		switch(e.keyCode){
			case 37:		//Left
				$('#player').css('left',position.left-20 + 'px');
				break;
			case 38:        //Up
				$('#player').css('top',position.top-20 + 'px');
				break;
			case 39:        //Right
				$('#player').css('left',position.left+20 + 'px');
				break;
			case 40:        //Down
				$('#player').css('top',position.top+20 + 'px');
				break;
		}
	});


});