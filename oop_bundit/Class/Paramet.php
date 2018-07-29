<?php 
	class Paramet{
		private $name;
		private $surname;
		private $age;

		public function getValue(){
			return $this->name." ".$this->surname." age= ".$this->age;
		}
		public function setValue($name="",$surname="",$age=10){
			$this->name=$name;
			$this->surname=$surname;
			$this->age=$age;
		}

		public function getName(){
			return $this->name;
		}
		public function setName($name=""){
			$this->name=$name;
		}
		
		public function getSurname(){
			return $this->surname;
		}
		public function setSurname($surname=""){
			$this->surname=$surname;
		}
		
		public function getAge(){
			return $this->age;
		}
		public function setAge($age=10){
			$this->age=$age;
		}
	}
?>