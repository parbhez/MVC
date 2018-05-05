<?php require 'header.php'; ?>
		<h2>All Students</h2>
		<?php foreach($students as $student): ?>
			<li><?php echo $student;?></li>
		<?php endforeach; ?>
<?php require 'footer.php'; ?>