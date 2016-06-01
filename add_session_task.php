<?php
session_start();
require_once '.model/session_task.php';

$session_task = new SessionTask($_SESSION);
$session_task->add($_POST['id'], $_POST['text'], $_POST['status']);
?>