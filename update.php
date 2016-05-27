<?php
session_start();

    require_once './model/task.php';
    $task = new Task();
   
    
	 if ( isset($_GET['id'])) {
	$task->get_one($_GET['id']);
		
		require_once './view/update.php.html';
	} 
	elseif (isset($_POST['task'])) {
	 $task->update($id, $task);
	} else {
		echo 'try again';
	} 
	?>