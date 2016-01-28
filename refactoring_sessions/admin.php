<?php 
include 'functions.php';

session_start();

if( !is_logged_in() ) {
	header("Location: login.php");
	die();
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