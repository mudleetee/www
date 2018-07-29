<?php 
	// Report all PHP errors (see changelog)
	error_reporting(E_ALL);
	
	class StaticClass{
		public static $age=10;
		public static $name="Somchai";

		public static function Main(){
			echo '<br>'."Main ". StaticClass::$age.
							" self = ". self::$name;
		}
		public static function setValue($name=""){
			echo '<br>'.$name;
		}
	}
 ?>