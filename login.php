<?php
session_start();

require_once './model/User.php';

$user = new User();

if (isset($_POST['username']) && isset($_POST['password'])) {
		$res = $user->get($_POST['username'], $_POST['password']);

		if ($res) {
			$_SESSION['username'] = $res['username'];
			$_SESSIOM['user_id'] = $res['id'];

			header('location: /');
		} else {
			echo 'Wrong pass or username';
			require_once './view/login.php.html';
		}
	
	}	else 
	{require_once './view/login.php.html';}



	 
	?>