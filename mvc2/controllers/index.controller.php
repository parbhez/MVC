<?php require 'models/Teacher.php' ?>

<?php
$teachers = Teacher::all();

?>

<?php require __DIR__ . '/../views/index.view.php'; ?>