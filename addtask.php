
<?php
session_start();
require_once './view/addtask.php.html';
require_once './model/task.php';
    $task = new Task();
    
        if (!empty($_POST['text'])) {
        
        $task_text = $_POST['text'];
        $task->add_task($task_text); 

       header('location: ./addtask.php');  
} 
?>