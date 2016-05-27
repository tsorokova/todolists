<?php
	class DB {
		private $username = 'root';
		private $password = '';

		protected $conn;

		public function __construct() {
			$this->conn = new PDO('mysql:host=localhost;dbname=tasks', 
				$this->username, $this->password);
		}

		protected function get_array($query_result) {
			$result = array();
			
			foreach($query_result as $row) {
		        $result[] = $row;
		    }

		    return $result;
		}
	}