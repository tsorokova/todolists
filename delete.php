<?php
	require_once './model/task.php';
	$task = new Task();

	if (!empty($_POST['id'])) {
		$task->delete($_POST['id']);
	}

	header('Location: /');
	?>