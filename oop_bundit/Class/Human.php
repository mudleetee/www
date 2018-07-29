<?php 
	class Human{
		public $name;
		private $surname;
		public $age;
		protected $salary="100000";

		public function say(){
			return "Hi" . $this->salary.'<br>';
		}
		public function walk(){
			return "Human Walk".'<br>';
		}

	
	}
 ?>
