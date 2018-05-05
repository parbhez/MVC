

<?php require 'header.php'; ?>

<h1>All teachers</h1>
	<?php foreach($teachers as $teacher): ?>
		<li><?php echo $teacher;?></li>
	<?php endforeach; ?>


<?php require 'footer.php'; ?>