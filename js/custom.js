// $(); //beginning
$(function(){
	var obj = {
		name:'John Smith',	//เรียกว่า properties
		age: 55,
		init:function(){	//เรียกว่า method
			// $('#lowercase').click(function(){	//function นี้ไม่ใช่ส่วนหนึ่งของ object ทำให้แสดง this.name ไม่ได้ต้องการ bind function นี้กับ object ก่อน ด้วย function(){}.bind(this)
			// 	alert(this.name);
			// }
			// }.bind(this));
			this.observeLowerCase();
			this.observeUpperCase();
		},

		observeLowerCase: function(){
			$('#lowercase').click(function(){
				// alert('u');
				// alert(this.getText());
				$('#output').html(this.getText().toLowerCase());
			}.bind(this));	//bind function กับ object เสียก่อนถึงจะแสดงค่าได้
		},
		observeUpperCase: function(){
			$('#uppercase').click(function(){
				// alert('u');
				// $('#output').html(this.getText());
				$('#output').html(this.getText().toUpperCase());
			}.bind(this));	///bind function กับ object เสียก่อนถึงจะแสดงค่าได้
		},
		getText: function(){
			return $('#text').val();
		}
	};

	obj.init();
});
