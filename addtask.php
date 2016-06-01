
<?php
session_start();

require_once './model/task.php';
if (isset($_POST['task']) && isset($_SESSION['user_id'])) {
    $task = new Task();
     $task_text = $_POST['task'];
     $user_id = $_SESSION['user_id'];

        if (!empty($task_text)) {
        $task->add_task($task_text, $user_id);
        header ('location: /');
        } else {
        	echo 'enter valid task';
        } 

       
} 
?>
	