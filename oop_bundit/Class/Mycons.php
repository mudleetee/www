<?php 
	// Report all PHP errors (see changelog)
	error_reporting(E_ALL);

	// Same as error_reporting(E_ALL);
	ini_set('error_reporting', E_ALL);

	class Mycons{
		// Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; Myconstruc has a deprecated constructor in C:\wamp\www\oop_bundit\Class\Myconstruc.php on line 2
		// public function Myconstruc(){
		// 	echo "Constructor On";
		// }
		private $name;
		private $surname;
		public function __construct($name="",$surname=""){
			echo "Constructor On".'<br>';
			$this->name=$name;
			$this->surname=$surname;
		}

		public function getValue(){
			return "<table border=1><tr><td>".$this->name."</td>
										<td>".$this->surname."</td></tr>";
		}

		public function __destruct(){
			echo "</table>";
		}

		
	}
?>