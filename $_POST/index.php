<?php 
# $_POST will NOT display the information that was posted/stored in the query string #
# if (!empty()) - function used to see if array is not empty (if there is info in it)
# HTML name: attribute which sets the KEY in the array (through the qrystring)
# HTML id: attribute that allows us to click the labels and 'hook them up to' their corresponding <input></input>
# mail() - function that helps us send an email from a $_POST

// We can't tell whether or not the information was posted, so how do we tell?
// print_r($_POST); We can do it this way, but it's not the best

// We need some way to determine whether or not the $_POST array is !empty or the form has been submitted. Here are two methods:
### METHOD #1 - Checks to see if $_POST is not empty, if there is something in it, then post the array ###
// if(!empty($_POST)) {
// 	print_r($_POST);
// }

### METHOD #2 ###
// echo $_SERVER['REQUEST_METHOD']; // Allows you to check which method was used to send information
if($_SERVER['REQUEST_METHOD'] == 'POST') { // Try the echo statement above to see why it's == 'POST' and not == $_POST
	// print_r($_POST);
	// Once the Contact Form is completed, we will have the user input. Maybe now we want to store it in the database or EMAIL IT (ex. below)
	## NOTE: mail returns TRUE if msg was accepted for delivery

	// mail('email to send msg to','subject of msg','msg to be sent')
	if  ( mail('lioaxos@gmail.com', 'New Website Message', 
			htmlspecialchars(
				'Name: ' . $_POST['name'] . ' ' .
				'Email: ' . $_POST['email'] . ' ' .
				'Message: ' . $_POST['message']
				)
			) 
		) {
		$status = "Thank you for your message.";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>$_POST</title>
	<style>
		form ul { margin: 0; padding: 0; }
		form li { list-style: none; margin-bottom: 1em; }
	</style>
</head>
<body>
	
	<h1>Contact Form</h1>
	<!-- action= "where we are going to direct to" method= "get or post"-->
	<form action="" method="post"> <!-- in this case it is going to post to itself -->
		<ul>
			<li>
				<label for="name">Name: </label>
				<input type="text" name="name" id="name"> <!-- The name attribute corresponds to the KEY in the url -->
			</li>
			<li>
				<label for="email">Email: </label>
				<input type="text" name="email" id="email"> <!-- The name attribute is REQUIRED if you want the value to be sent through -->
			</li>
			<li>
				<label for="message">Your Message: </label><br>
				<!-- id="click on the label in the browser and it takes you to the corresponding input"-->
				<textarea name="message" id="message"></textarea>
			</li>
			<li>
				<!-- type="submit button" and value="text on button"-->
				<input type="submit" value="Go!">
				<!-- if we type our name and hit Go! it will pass the values through the qrystring -->
			</li>
		</ul>
	</form>
	<?php
		// Confirm whether or not the email was sent to the user by printing the msg on line 26 to the screen
		if( isset($status)) {
			echo $status;
		}
	?>
</body>
</html>