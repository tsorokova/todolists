<?php
session_start();
	require_once './model/task.php';
	
if (isset($_SESSION['user_id']) && isset($_POST['id'])) {
		$id = $_POST['id'];
		$task = new Task();
		$task->delete($id);
	}

	header('location: /');
	?>

