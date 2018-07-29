<?php 
	require_once "FirstClass.php";
	class TwoClass extends FirstClass{
		public function show(){
			echo $this->showId1();
			echo $this->id1;
		}

	}
?>