<?php


	require 'models/Data.php';
	require 'models/Teacher.php';
	require 'models/Student.php';

		$obj = new Teacher();
		$teacher = $obj->allTeachers();
		// print_r($teacher);

	// $teacher = Teacher::allTeachers();
	//  print_r($teacher);

	// $student = Student::all();
	// print_r($student);
		//die;

	require 'views/indexView.php';


?>