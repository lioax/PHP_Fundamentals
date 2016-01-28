<?php 
 # HOW TO GIVE THE USER THE ABILITY TO SPECIFY WHAT THE FONT-SIZE SHOULD BE

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Capture Font-Size value and set a cookie with it
	setcookie('fontSize', (int) $_POST['font-size'], time() + 60 * 60);
	header('Location: font.php');
}

if( isset($_POST['font-size'])) {
	$font_size = $_POST['font-size'];
} else if(isset($_COOKIE['fontSize'])){
	$font_size = $_COOKIE['fontSize'];
} else {
	$font_size = 16;
}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style> 
 		body {
 			/* METHOD #1 */
 			/* When working with Cookies, remember that we can't blindly assume they're going to be set, therefore we check if it is */
 			/* Sets the cookie fontSize to whatever the user chooses in the select menu */
 			/* font-size: <?= isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] . 'px' : '16px'; ?> */
 			/* Logic above: if isset fontSize cookie, then (?) echo cookie value . 'px' ELSE (:) make it 16px */

 			font-size: <?= $font_size . 'px;'; ?>
 		}
 		li {list-style: none;} 
 		ul, li {margin: 0; padding: 0;} 
 	</style>
 </head>
 <body>
 	<form action="" method="post">
 		<li>
 			<label for="font-size">Your Preferred Font Size</label><br>
 			<select name="font-size" id="font-size"> <!-- select: enables a dropdown clickable menu -->
 				<option value="10">10</option> <!-- option: defines an option within the dropdown -->
 				<option value="20">20</option> <!-- value: defines our PHP values that will be stored within our $_POST[] -->
 				<option value="30">30</option>
 				<option value="40">40</option>
 			</select>
 		</li>
 		<li> 
 			<input type="submit" name="submit" value="Submit">
 		</li>
 	</form> <!-- the user needs to have the option to specify what the font-size should be -->
 	<h2>My Page</h2>
 	<p>
 		Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
 		Dignissimos a culpa, dolorem id quos omnis, molestias nihil consequuntur harum ad tempora,
 		 numquam, dolores maxime hic perferendis maiores aliquid obcaecati quisquam.
 	</p>
 </body>
 </html>