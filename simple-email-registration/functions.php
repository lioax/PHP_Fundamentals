<?php 
# filter_var(): FILTER_VALIDATE_EMAIL parameter allows you to check whether or not what you pass in is a valid email address

define('MAILING_LIST', $_SERVER['DOCUMENT_ROOT'] . '/PHP_Fundamentals/sandbox/mailing_list.php'); // defines CONSTANT for the mailing list so we done have to keep referencing it

// file_put_contents(): create the file if it does not already exist
//		 then it will overwrite all of the contents within the file with whatever you pass 
//			the third parameter FILE_APPEND makes it so we append the new text to whatever is already in the mailing_list.php file

/*
|------------------------------------------------------------------------------------
|	Add a new item to the registered users list.
|------------------------------------------------------------------------------------
 */
	function add_registered_user($name, $email) {
		// Write names and email addresses to a file
		// file_put_contents takes $name and $email and puts them into a .php file
		file_put_contents(MAILING_LIST, "$name: $email \n", FILE_APPEND);
		// The above method of storing names and emails is better if we put it into a ../mailing_list.
	}
/*
|------------------------------------------------------------------------------------
|	Returns an array of all registered users.
|------------------------------------------------------------------------------------
 */
	function get_registered_users($path = MAILING_LIST) {
		$users = file($path); // grabs each item within the file (mailing_list.php)
		
		// Map over them into an array that contains their name and email address
		if ( count($users) ) {
			return array_map(function($user) {
		/* $bits */ return explode(': ', htmlspecialchars($user));
				// return array_map('htmlspecialchars', $bits); // foreach item within the $bits array, run it through htmlspecialchar() 
			}, $users);
		}
		return false; // If there's nothing in the mailing_list.php file, return false
	}
	
/*
|------------------------------------------------------------------------------------
|	Preserve form state.
|------------------------------------------------------------------------------------
 */
	// Keeps already typed text in designated text fields after reload
	function old($key) {
		if( !empty($_REQUEST[$key])) { // $_REQUEST: works whether the form was posted with $_POST or $_GET
			return htmlspecialchars($_REQUEST[$key]);
		}
		return '';
	}

/*
|------------------------------------------------------------------------------------
|	Determines whether an email address is valid.
|------------------------------------------------------------------------------------
 */
	// Validates email address (ex. must have @ symbol etc.) [returns boolean value]
	function valid_email($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

 ?>