<html>
	<head>
	 <meta charset="utf-8">
		<title>Things to do in summer</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	
	<body style="background:#FFFFF0";>
			

		<div class="col-md-10 col-md-offset-1">
			<div class="page-header"> <center>
				<h3>Summer things to do</h3> </center>
				
					<div id="content">
				<?php foreach ($tasks as $task) { ?>
					<div class="post">
						<p class="task"><?php echo $task['task']; ?></p>
						<p class="status"><?php echo $task['status']; ?></p>
						<a href="/update.php?id=<?php echo $task['id']; ?>" class="btn btn-info">Update</a>
						<form action="/delete.php" method="POST">
							<input type="hidden" name="id" value="<?php echo $task['id']; ?>">
							<input type="submit" class="btn btn-danger" value="Delete task">
						</form>
						<a href="/addtask.php" class="btn btn-info">Add task</a>
					</div>
				<?php } ?>
			</div>
		
				</div>
			</div>

			<div>