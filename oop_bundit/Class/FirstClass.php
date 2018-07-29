<?php
	class FirstClass{
		protected $id1="Protected";
		private $id2="Private";
		protected function showId1(){
			return $this->id1." and ". $this->id2.'<br/>';
		}
}

?>