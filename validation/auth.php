<?php
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$pass = md5($pass."1s2d5");

	$mysql = new mysqli('localhost', 'root', '', 'register');
	
	$check = $mysql->query("SELECT  * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
	
	$user = $check->fetch_assoc();
	
	if(count((array)$user) == 0)
	{	
		echo " Пользователь не найден";
		header('Location: /site/error.php');
		exit();
	}
	
	setcookie('user', $user['name'], time() + 3600, "/");
	setcookie('email', $user['email'], time() + 3600, "/");
	$mysql->close();
	
	header('Location: /site/account.php');
?>