<?php 
	require_once('appvars.php');
	if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
		// The username and password isn't entered so send the authentication headers
		header('HTTP/1.1 401 Unauthorized');
		header('WWW-Authenticate: Basic-realm="mismatch"');
		exit('<h3>Mismatch</h3> Sorry, you must enter your username and password to login and access'.
			'this page.');
	}

	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$user_username = mysqli_real_escape_string($dbc, trim($_SERVER['PHP_AUTH_USER']));
	$user_password = mysqli_real_escape_string($dbc, trim($_SERVER['PHP_AUTH_PW']));

	//Lookup the username and password in the database

	$query = "SELECT id,username FROM mismatch_users WHERE username = '$user_username' AND password = SHA('$user_password')";
	$data = mysqli_query($dbc, $query);

	if (mysqli_num_rows($data) == 1) {
		$row = mysqli_fetch_array($data);
		$user_id = $row['id'];
		$username = $row['username'];
	}
	else {
		header('HTTP/1.1 401 Unauthorized');
		header('WWW-Authenticate: Basic-realm = "mismatch"');
		exit('<h3>Mismatch</h3> Sorry, you must enter your username and password to login and access'.
			'this page.');
	}

	echo '<p class="login">You are successfully logged in as '.$username.'.</p>';
 ?>