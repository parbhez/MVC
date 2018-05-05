<?php

	class Teacher {

		// public $con;

		// public function __construct() {
		// 	$this->con = new PDO('mysql:dbname=college;host=localhost','root','');
		// }

		// public function allTeachers() {
		// 	$statement = $this->con->prepare("select * from teachers");
		// 	$statement->execute();
		// 	return $statement->fetchAll(PDO::FETCH_OBJ);
		// }

		public static $con;

		public function __construct(){
			self::$con = new PDO('mysql:dbname=college;host=localhost','root','');
		}

		public  function allTeachers() {
			$statement = self::$con->prepare("select * from teachers");
			$statement->execute();
			return $statement->fetchAll(PDO::FETCH_OBJ);
		}
	}