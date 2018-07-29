<?php 
	require_once "Human.php";
	class Male extends Human{
		
		public function show_text(){
			$this->name="Bundit";
			$this->salary="10";
			echo $this->say()." ".$this->name. " Salary= ".$this->salary;
		}
	}
?>
