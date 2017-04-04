<?php 
	echo "<h1>Hello</h1>";
	if (!isset($_COOKIE['username'])) {
	echo '<a href="login.php">Login Here</a>';
	}
	else
			echo '<a href="logout.php">Logout Here</a>';

 ?>	