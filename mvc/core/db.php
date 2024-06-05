<?php
class Database
{
	protected $host = 'localhost';
	protected $username = 'root';
	protected $password = '';
	protected $database = 'mvc3';
	public $conn;

	function __construct()
	{

		// Create connection
		$this->conn =  mysqli_connect($this->host, $this->username, $this->password, $this->database);

		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
		echo "";
	}
}
