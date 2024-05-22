	<?php
	class Model
	{
		protected $db;

		public function __construct()
		{
			// kết nối cơ sở dữ liệu chỉ được thiết lập một lần
			if ($this->db === null) {
				$this->db = new mysqli('localhost', 'root', '', 'php_mvc_db');

				if ($this->db->connect_error) {
					die('Database connection error: ' . $this->db->connect_error);
				}
			}
		}
	}
