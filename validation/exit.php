<?php
	setcookie('user', $user['name'], time()  - 3600, "/");
	setcookie('email', $user['email'], time()  - 3600, "/");
	header('Location: /site/sign.php');
?>