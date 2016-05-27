<?php
session_start();
require './model/User.php';
$user = new User;

	if (isset($_POST['username']) && isset($_POST['password'])) {
		$user->create($_POST['username'], $_POST['password']);
		header('location: /login.php');
	} else {
		require_once './view/register.php.html';
	}
?>