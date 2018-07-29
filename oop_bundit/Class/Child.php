<?php 
	// Report all PHP errors (see changelog)
	error_reporting(E_ALL);
	require_once "Mom.php";
	// require_once "Dad.php";
	require_once "Human.php";

	class Child extends Human implements Mom{

		public function name(){
			$name="Somchai";
			echo $name.'<br>';
		}
		public function surname(){
			$this->surename="Noieam";
			echo "$this->surename".'<br>';
		}
		public function age(){

		}
		public function extendHuman(){
			return $this->say().$this->walk();

		}
		// public function say(){
		// 	echo "Say".'<br>';
		// }
		// public function walk(){
		// 	echo "Walk".'<br>';
		// }
	
	}

?>