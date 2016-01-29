<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<!-- NEEDS TO BE LOCKED DOWN: DONE: ../mailing_list.php -->
	<h1>Folks On Your Mailing List</h1>
	<?php
		if ( $registered_users ) {
			foreach ($registered_users as $user) {
				list($name, $email) = $user;
				echo "<li> $name: <a href='mailto:$email'>$email</a></li>";
			} 
		} else {
				echo "<li>No registered members.</li>";
			}
	?>
</body>
</html>