<?php 

	// mysql_* functions have been removed in PHP 7.
	class Class_DB{
		private $con;
		private $rs;
		private $_fetch_assoc=array();

		public function __construct($host,$root,$pw,$db_name){
			// $this->con = mysqli_connect($host,$root,$pw,$db_name);
			// if (mysqli_connect_errno()){
  	// 			echo "Failed to connect to MySQL: " .
  	// 				mysqli_connect_error();
  	// 		}
			// mysqli_set_charset($this->con,"utf8");
			// mysqli_select_db($this->con,$db_name);
			// echo "MySQLi (procedural) connected OK".'<br>';

			
			// $this->con = new mysqli($host,$root,$pw,$db_name);
			// if ($this->con->connect_error) {
   //  				die("Connection failed: " . $this->con->connect_error);
			// } 
			// echo "MySQLi (object-oriented) Connected OK";

			// // $host = '127.0.0.1';
			// // $db   = 'test'; 
			// // $user = 'root';
			// // $pass = '';

			$charset = "utf8mb4";
			$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
			$opt = [
    			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    			PDO::ATTR_EMULATE_PREPARES   => false,
    		];
    		$this->con = new PDO($dsn, $root, $pw, $opt);
			// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

			echo "PDO connected OK".'<br>';
		}

		public function setQuary($sql){
			// $this->rs = mysqli_query($this->con,$sql);

			//use exec() because no results are returned
			// $this->rs = $this->con->exec($sql);	//for insert

			// $this->rs = $this->con->query($sql);

			$this->rs = $this->con->prepare($sql);	//prepare
			$this->rs->execute();

		}

		public function getNum_rows(){
		// 	return mysqli_num_rows($this->rs);

			// return $this->rs->num_rows;

			return $this->rs->rowCount();
		}

		public function getFetch_assoc(){
			if (count($this->_fetch_assoc) > 0){
				return $this->_fetch_assoc;
			} else {
				// while($row = mysqli_fetch_assoc($this->rs)){
				
				// while($row = $this->rs->fetch_assoc()){

				while($row = $this->rs->fetch()){
					$this->_fetch_assoc[] = $row;
				}
				return $this->_fetch_assoc;
			}
			
		}
		
	}
?>

