<?php
define("DBHOST","localhost");
define("DBTABLE","marcelo");
define("USER","root");
define("PASS","esqueci22");

	class db{
		public static $con;
		public function db(){}
		public function get_connection(){
			if(!self::$con)
				return self::$con = new mysqli(DBHOST,USER,PASS,DBTABLE);
		return self::$con;
		}
	}
  
?>

