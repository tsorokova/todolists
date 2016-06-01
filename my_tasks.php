<?php
session_start();
require_once './model/task.php';

$user_id = $_SESSION['user_id'];

 $task = new Task();
 $tasks = $task->get_by_author($user_id);
 ?>