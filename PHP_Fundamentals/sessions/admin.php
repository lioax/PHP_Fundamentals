<?php 

session_start();
// A way for the user only to view this page IF they're logged in
if ( !isset($_SESSION['username'] )){ // If username has not been set, redirect them to login.php
	header("Location: login.php");
	die(); // nothing else will be executed
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Secret Admin Section</title>
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['username'] ?></h1>
	<a href="logout.php">Logout</a>
</body>
</html>