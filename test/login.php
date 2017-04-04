<?php 
	if (!isset($_COOKIE['username'])) {
		setcookie('username','tanvir',time()+3);
	}
	header('Location: index.php');

 ?>	