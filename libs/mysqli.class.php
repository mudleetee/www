<?php
	class DB{
		private $fetchMode = MYSQLI_BOTH;

		public function setFetchMode($type){
			switch($type){
				case 1:
					$this->fetchMode = MYSQLI_NUM;
					break;
				case 2:
					$this->fetchMode = MYSQLI_ASSOC;
					break;
				case 3:
					$this->fetchMode = MYSQLI_BOTH;
					break;
			}
		}

		public function __construct($db){
			$this->mysqli = new mysqli($db['host'],$db['user'],$db['pass'],
										$db['table']);
			if (mysqli_connect_errno()){
				die("Connection failed: " . $this->mysqli->connect_error);
			}
			// echo "MySQLi (object-oriented) Connected OK".'<br>';
		}

		public function query($SQL){
			$this->SQL = $this->mysqli->real_escape_string($SQL);
			$this->result = $this->mysqli->query($SQL);

			if ($this->result==true){
				return true;
			} else {
				printf("<b>Problem with SQL:</b> %s\n",$this->SQL);
			}
		}



		public function get($field = NULL){
			if ($field == NULL){
				$data = array();
				while($row = $this->result->fetch_assoc()){
					$data[] = $row;		//คืนเป๋น array()	
				}
			} else {
				$row = $this->result->fetch_assoc();
				$data = $row[$field];	//คืนเป๋น string เอาไว้เช็คค่าที่ field ชั่วคราว total ถ้า password ถูก จะคืน 1,ผิดคืน 0
			}
			$this->result->close();
			return $data;
		}

		public function id(){
			return $thid->mysqli->inset_id;
		}

		public function __destruct(){
			
		}

	}
?>