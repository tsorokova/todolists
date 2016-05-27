<?php

require_once './view/login.php.html';
require_once './model/User.php';

$user = new User();

if (isset($_POST['username']) && isset($_POST['password'])) {
		$res = $user->get($_POST['username'], $_POST['password']);
		
		$_SESSION['username'] = $res['username'];
session_start();
		echo 'Welcome';
	}	else 
	{ echo 'Try again';}



	 
	?>