<?php 
// REMEMBER: a function should ONLY do ONE thing
	function is_logged_in() {
		return isset($_SESSION['username']); // returns true or false, if logged in: true if not logging in: false
	}

	function validate_user_creds($username, $password) { // this function needs to accept the $username and $password
		return ($username === USERNAME && $password === PASSWORD); // returns true or false if $username is USERNAME etc.
	}
 ?>