<?php
	session_start();
	require_once './model/session_task.php';
	$session_task = new SessionTask($_SESSION);
	$session_tasks = $session_task ->get_all();
	require_once './view/today_tasks.php.html';
?>