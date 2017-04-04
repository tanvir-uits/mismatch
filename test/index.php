<?php


	if (isset($_COOKIE['username'])) {
		echo '<a class="bigger" href="logout.php">Logout('.$_COOKIE['username'].')</a>';
	}
	else echo '<a class="bigger" href="login.php">Login</a>';
 ?>
 <!DOCTYPE html>
 	<html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>Document</title>
 		<style type="text/css">
			.bigger{
				font-size:2em;
			}
 		</style>
 	</head>
 	<body>
 		
 	</body>
 	</html>	