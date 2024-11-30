<?php  
    include_once "const.php";
	include_once "compiler.php";

	class Database extends Compiler {
		protected $hostname = DB_HOSTNAME;
		protected $username = DB_USERNAME;
		protected $password = DB_PASSWORD;
		protected $dbname   = DB_NAME;
		protected $conn;

		public function __construct() {
			$this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
		}
		
		public function status() {
			if(!$this->conn ) return mysqli_error($this->conn);
			else  return 'Success';
		}

		public function connect() {
			return $this->conn;
		}

		public function closed() {
			return mysqli_close($this->conn);
		}

	}
?>