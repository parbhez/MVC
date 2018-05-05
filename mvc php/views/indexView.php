<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
	<h2>This is the index page</h2>
	<ul>
	<?php foreach($fruits as $fruit):?>
		<li><?php echo $fruit;?></li>
	<?php endforeach;?>
	</ul>

	<h2>All Teachers</h2>

		<table class="table table-borderd">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
			</tr>
			<?php foreach($teacher as $teachers):?>
				<tr>
					<td><?php echo $teachers->id;?></td>
					<td><?php echo $teachers->name;?></td>
					<td><?php echo $teachers->email;?></td>
				</tr>
			<?php endforeach;?>
		</table>

	<p>Bangladesh is a small country.It is one of the best country in the world.Bangladesh is a small country.It is one of the best country in the world.Bangladesh is a small country.It is one of the best country in the world.Bangladesh is a small country.It is one of the best country in the world.Bangladesh is a small country.It is one of the best country in the world.Bangladesh is a small country.It is one of the best country in the world.Bangladesh is a small country.It is one of the best country in the world.Bangladesh is a small country.It is one of the best country in the world.Bangladesh is a small country.It is one of the best country in the world.Bangladesh is a small country.It is one of the best country in the world.</p>
	</div>
</body>
</html>