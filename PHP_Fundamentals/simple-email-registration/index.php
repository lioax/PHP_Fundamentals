<?php 
# C O N T R O L L E R
# trim()

require 'functions.php';
if( $_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = trim($_POST['name']); // trim(): will trim off extra whitespace on either side of text
	$email = trim($_POST['email']);

	// Check for name and email being filled out
	if( empty($name) || empty($email) || !valid_email($email)) {
		$status = 'Please provide a name and valid email address.';
	} else {
		add_registered_user($name, $email);
		$status = 'Thank you for registering. Your information has been added to our mailing list.';
	}
}

require 'index.tmpl.php';

?>