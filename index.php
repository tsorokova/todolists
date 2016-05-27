
<?php 
require_once './model/User.php';
if (isset($_REQUEST[session_name()])) {
session_start();
echo 'Welcome'; }

function get_page_number() {
		if (!empty($_GET['page'])) {
			return $_GET['page'];
		} else {
			return 1;
		}
	}
	require_once './model/task.php';
$task = new Task();
	$pages = $task->get_task_count();

$page = get_page_number();
	$tasks = $task->get_tasks($page);


	
	

	
require_once './view/index.php.html';
?>




