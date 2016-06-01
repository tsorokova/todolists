
<?php 
session_start();

function get_page_number() {
		if (!empty($_GET['page'])) {
			return $_GET['page'];
		} else {
			return 1;
		}
	}

	if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];

	}
	require_once './model/task.php';
	$page  = get_page_number();

$task = new Task();
	$pages = $task->get_task_count();
	$tasks = $task->get_tasks($page);	

require_once './view/index.php.html';
?>




