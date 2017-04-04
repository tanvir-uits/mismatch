<?php

	if (isset($_COOKIE['username'])) {
		setcookie('username','',-3600);
	}
	header('Location: index.php');
 ?>	