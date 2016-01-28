<?php
# Let's say we want to give a user the ability to login (hard-coded info)
session_start();
// CONSTANTS - VALUES that NEVER change (ex. tax rates)
define('USERNAME', 'LioAx'); // define() allows us to declare CONSTANTS in PHP
define('PASSWORD', '1234'); // hard-codes username and password (since we're not hooked up to a db yet)

// Check to see if the form has been posted (This method will NOT help if there are multiple forms on the page)
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	echo 'posted';
// }

// STEPS for going about logging a person in
if (isset($_POST['loginForm'])) {
	# 1) Get their values
	$username = $_POST['username']; // set whatever the user inputs as their username into a variable
	$password = $_POST['password']; // set whatever the user inputs as their password into a variable

	# 2) Validate that against the records (check to see if that user has an account against the database)
	if ($username === USERNAME && $password === PASSWORD){ // constants are called in ALL-CAPS, no dollar signs necessary!
		// credentials are correct

		# 3) If they do, LOG THEM IN and SET a SESSION
		// login + set session
		$_SESSION['username'] = $username; // LioAx
		// header allows us to redirect the user to another page
		header("Location: admin.php");	// Redirect them to admin.php
	} else { // If login fails, do this
		$status = 'Incorrect login credentials';
	}
	

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Login</h1>
	<form action="login.php" method="post">  <!-- the action will be to itself (can be left blank) -->
		<ul>
			<li>
				<label for="username">Name: </label>
				<input type="text" name="username">
			</li>
			<li>
				<label for="password">Password: </label>
				<input type="password" name="password"> <!-- type="password" allows us to type bullets instead of letters -->
			</li>
			<li>
				<input type="submit" value="Login" name="loginForm">
			</li>
		</ul>
		<?php if(isset($status)) : ?>
		<p><?= $status; ?></p>
		<?php endif; ?>

	</form>
</body>
</html>