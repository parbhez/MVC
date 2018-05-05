<?php
	require 'models/Student.php';

	$students = Student::all();

	require __DIR__ . '/../views/index.view.php';


?>