<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>JS+Bootstrap</title>
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <!-- jquery -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

	<!-- <script type="text/javascript" src="js/hello.js"></script> -->
	<!-- <script type="text/javascript" src="js/function2.js"></script> -->
	<!-- <script src="js/script2.js"></script> //ถ้าอยากให้ run โดยไม่ต้องเพิ่งปุ่มกด ให้เอาไปใสใน Body under id นั้ๆ -->

	<script>
		// alert('Hello, world');	//output1
		// console.log('Hello. world');	//output2
		// document.write('hello, world');	//output3

		//ประกาศตัวแปรต้องใช้ var ทุกครั้ง เพราะมี public, local
		// var firstName = 'akearin';	//variable คำแรกตัวเล็ก คำที่สองนำหน้าด้วยตัวใหญ่
		// var lastName = 'komkoon';
		// var myId = 1001;
		// var myGrade = 3.88;
		// var isGoing = false;	//variable boolean ให้มี is นำหน้า
		// var number1 = 10;
		// var number2 = 20;
		// var result;
		// result = number1+number2;
		// console.log('My name is '+ firstName + ' ' + lastName);
		// console.log(myId);
		// console.log(result);

		// var userName="user1";
		// var userName = prompt('คุณคือใคร: '); //รับค่า
		// if (userName === "admin"){
		// 	document.write('<p>คุณคือ admin</p>');
		// } else if (userName === "user") {
		// 	document.write('<p>คุณคือ user</p>');
		// } else {
		// 	document.write('<p>คุณคือ ' + userName + '</p>');
		// }


		// var randomNumber = Math.random();  //random() จะ random ตั้ง 0 ถึง 1 แบบมีทศนิยม
		// var randomNumber = Math.random()*5;  //ถ้าต้อการ andom ตั้ง 0 ถึง 5 ก็คุณด้วย 5
		// var randomNumber = Math.floor(Math.random()*5) + 1;  //ตัดทศนิยมปัดลงหมดเลย, +1 เพื่อไม่เอา 0 ยังงไงก็ไท้เกิน 5
		// console.log(randomNumber);
		// var input = prompt('ทายตัวเลขตั้งแต่ 1-5');
		// if (parseInt(input) === randomNumber){
		// 	document.write('คุณชนะ');
		// } else {
		// 	document.write('คุณแพ้ เลขสุ่มคือ ', randomNumber);
		// }

		// var input = prompt('กรอกข้อความ');
		// var count = prompt('จำนวนรอบ');

		// for(var i=1; i<=count; i++){
		// 	document.write('จำนวนรอบ ' + i + ' ข้อความ: ' + input + '<br>');
		// }

		// var i =1;
		// while(i <= parseInt(count)){
		// 	document.write('จำนวนรอบ ' + i + ' ข้อความ: ' + input + '<br>');
		// 	i++;
		// }	

		// function showData(){ //no return function1
		// 	document.write('JavaScript' + '<br>');
		// }
		// showData();
		// showData();
		
		// function addNumber(number1,number2){	//no return function2 แบบมี parameter
		// 	var result = number1+number2;
		// 	document.write('Result: ' + result + '<br>');
		// }
		// addNumber(2,3); //argument
		// addNumber(7,4);

		// function getMessage(msg){	//return function3
		// 	return 'Hello' + msg + '<br>';
		// }
		// document.write(getMessage('JavaScript'));
		// var msg = getMessage('Java');
		// document.write(msg);

		// var showName = function(){	//สร้าง function ชื่อ showName(เรียกว่า function expression4)
		// 	document.write('aaaaa' + '<br>');
		// };
		// showName();

		//Arrays
		// var myName = ['akenarin', 'john','marry','tom'];
		// var myAge=[20,30,40,50];
		// var myGrade=[];
		// myGrade.push(3.45);
		// document.write("ฉันชื่อ: " + myName[1] +" อายุ: " + myAge[3]);
		// console.log(myGrade.length);
		// for (var i = 0; i < myName.length; i++){
		// 	console.log(myName[i]);
		// }

		//object
		// var programmer = {
		// 	fullname:'akenarin komkoon',
		// 	age:18,
		// 	skills:['html','css'],
		// 	showSkills:function(){
		// 		return this.skills.length;
		// 	}
		// }
		// console.log(programmer.fullname);
		// console.log(programmer.skills);	//อยากวยลูป skills แต่ไม่รู้ทำอย่างไร
		// programmer.fullname='PhetDarin';
		// programmer.age=30;
		// programmer.skills.push('php');
		// console.log(programmer.fullname);
		// console.log(programmer.age);
		// console.log(programmer.skills);	
		// len = parseInt(programmer.showSkills());
		// console.log(len);
		// for (var i=0; i < len; i++){
		// 	console.log(programmer.skills[i])
		// }
		//อ้าง object
		// for (var prop in programmer){
		// 	console.log(prop);				//show variable
		// 	console.log(programmer[prop]);	//show value in variable 
		// }

		// object คล้าย json
		// var product=[
		// 	{
		// 		productName:'Coke',
		// 		productPrice:30
		// 	},
		// 	{
		// 		productName:'GreenTea',
		// 		productPrice:40
		// 	}

		// ]
		// console.log(product[0].productName);
		// console.log(product[0].productPrice);
		// console.log(product[1].productName);
		// console.log(product[1].productPrice);
		// for (var i=0; i < product.length; i++){
		// 	console.log(product[i].productName);
		// 	console.log(product[i].productPrice);
		// }
		//DOM
		// function myFunction(){
		// 	var p1 = document.getElementById('p1'); //result คือ <div id="p1" style="color:red;">New p1</div>
		// 	console.log(p1);
		// 	p1.innerHTML="Hello, Dom12356";
		// }
		

	</script>
</head>		

<body style="background-image:url(/img/bg.png)">
	<div class="container">
		<div class="row">
			<div class="col-md-3 bg-success">
				<form id="form1" action="insert_user.php">
					<!-- <div class="form-check">
						<label class="form-check-label" for="check1">
							<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Option 1	
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label" for="check2">
			        		<input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Option 2
			      		</label>
			    	</div>
			    	<div class="form-check">
			      		<label class="form-check-label">
			        		<input type="checkbox" class="form-check-input" disabled>Option 3
			      		</label>
			    	</div> -->;
			    	<div class="form-group">
						<label for="usr">Name:</label>
			  			<input type="text" class="form-control" id="fullname">
					</div>
					<div class="form-group">
						<label for="usr">Email:</label>
			  			<input type="email" class="form-control" id="email" >
					</div>
					<!-- <button type="submit" class="btn btn-primary">Submit</button>
					<button type="reset" class="btn btn-default">Reset</button> -->
					<input type="submit" class="btn btn-primary" value="Submit">
					<input type="button" id="btn_reset" class="btn btn-danger" value="Reset">
		
					<hr>
					
				</form>
			</div>
		</div>
	</div>	
	<p class="text-primary" id="product_name"><strong>Product: </strong> </p>

	<button id="btn1" onclick="alert(this.innerHTML)" type="button" class="btn btn-primary">Click btn1</button>

	<button id="btn1" onclick="myFunction()" type="button" class="btn btn-primary">Click btn1</button>
	
	<button id="btn2" type="button" class="btn btn-success">Click btn2</button>



	<h1>Hello jquery</h1>
	<p>JQuery</p>
	
	<h1>Hello jquery 2</h1>
	<p>JQuery</p>

	<h1>Hello jquery 3</h1>
	<p class="new3">JQuery</p>

	<h2>jquery Selector</h2>
	<div class="news">New 1</div>

	<h2>jquery Selector</h2>
	<div class="news">New 1</div>

	<h2>jquery Selector</h2>
	<div id="p1" style="color:blue">New p1</div>

	<h2>jquery Selector</h2>
	<div id="p2">New p2</div>

	<script src="js/script2.js"></script> <!--อยากให้ run โดยไม่ต้องเพิ่งปุ่มกด ให้เอาไปใสใน Body under id นั้ๆ-->

	<div class="container">
		<div class="row">
			<div class="col-md-6 bg-success">
				<h3>Row1 :: Col-md-6 bg-success</h3>
			</div> 
			<div class="col-md-6 bg-warning">
				<h3>Row1 :: Col-md-6 bg-warning</h3>
			</div> 
		</div>	<!--end row1 -->

		<div class="row">
			<div class="col-md-3 bg-info">
				<h3>Row2 :: Col-md-3 bg-info</h3>
			</div> 
			<div class="col-md-6 bg-danger">
				<h3>Row2 :: Col-md-6 bg-danger</h3>
			</div>
			<div class="col-md-3 bg-primary">
				<h3>Row2 :: Col-md-3 bg-primary</h3>
			</div> 
		</div>	<!--end row2 -->
	</div>

	
	<div class="container">
	  <h2>Contextual Colors</h2>
	  <p>Use the contextual classes to provide "meaning through colors":</p>
	  <p class="text-muted">This text is muted.</p>
	  <p class="text-primary">This text is important.</p>
	  <p class="text-success">This text indicates success.</p>
	  <p class="text-info">This text represents some information.</p>
	  <p class="text-warning">This text represents a warning.</p>
	  <p class="text-danger">This text represents danger.</p>
	  <p class="text-secondary">Secondary text.</p>
	  <p class="text-dark">This text is dark grey.</p>
	  <p class="text-body">Default body color (often black).</p>
	  <p class="text-light">This text is light grey (on white background).</p>
	  <p class="text-white">This text is white (on white background).</p>
	</div>

	<div class="container">
		<h2>Button Elements</h2>
		<a href="#" class="btn btn-info" role="button">Link Button</a>
		<button type="button" class="btn btn-info">Button</button>
		<input type="button" class="btn btn-info" value="Input Button">
		<input type="submit" class="btn btn-info" value="Submit Button">
	</div>

	<div class="container">
	  <h2>Button Styles</h2>
	  <button type="button" class="btn">Basic</button>
	  <button type="button" class="btn btn-primary">Primary</button>
	  <button type="button" class="btn btn-secondary">Secondary</button>
	  <button type="button" class="btn btn-success">Success</button>
	  <button type="button" class="btn btn-info">Info</button>
	  <button type="button" class="btn btn-warning">Warning</button>
	  <button type="button" class="btn btn-danger">Danger</button>
	  <button type="button" class="btn btn-dark">Dark</button>
	  <button type="button" class="btn btn-light">Light</button>
	  <button type="button" class="btn btn-link">Link</button>      
	</div>

</body>
</html>

