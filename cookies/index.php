<?php
/* COOKIES: Text files that can store a maximum of about 4KB worth of data
 * 	IMPORTANT: You should NOT use COOKIES to STORE PRIVATE INFORMATION
 * 	 DO USE THEM: To store more CASUAL info such as "What is a user's preferred category on some blog?"
 *	   USEFUL: When they return to that website, you can tailor the exp. to point out ARTICLES within that CATEGORT more PREDOMINANTLY
 *		ALSO USEFUL: You can STORE the user's SCREEN RESOLUTION to OPTIMIZE their experience on your site
 *		 OR EVEN: Their preferred font size - if they are older you can make them happy by capturing that info and using it for them
 */

# To SEE COOKIES - right click page > INSPECT ELEMENT > RESOURCES > COOKIES

// PHP.net - setcookie()
/* setcookie(name, value, expire, path, domain, secure, httponly)
 * name - an identifier or key
 * value - if the name is fontSize then the value might be 16 for 16px
 * expire - if not specified, the exp. date will be the end of the session. set it to an hour, a day, or a year - it depends!
 	// the best way to do this is using quickmath ex) 60 * 60 (60 total seconds | 60 total minutes = expire in 60 minutes) 
 * path - the path on your server where the cookie would be activated. if path is set to /foo the cookie will only be avail. there
 */

// to delete a cookie you set the expiration date to anytime in the PAST
// setcookie('fontSize', 25, time() - 60);

// to make the cookie available to entire domain
// setcookie('fontSize', 25, time() - 60, '/');

// to make the cookie available to admin section only
// setcookie('fontSize', 25, time() - 60, '/admin');

// setcookie('fontSize', 25, time() + 60 * 30); // setcookie named fontSize to 25, expiration: current time plus 30 minutes

# STORE COOKIES within an ARRAY
setcookie('prefs[fontSize]', 25);
setcookie('prefs[favoriteCategory]', 'news');
setcookie('prefs[screenWidth]', '1024');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
	<!-- Style our Paragraph using the cookie fontSize we set to 25px; -->
	<style>
		body {
			font-size: <?= $_COOKIE['fontSize'] . 'px';?>
		}
	</style>
</head>
<body>
	<!-- <p>Hi there, how are you?</p> -->
	<?php 
		if( isset($_COOKIE['prefs'])) {	// make sure you have something in the cookie array before printing it so it doesn't error out
			foreach($_COOKIE['prefs'] as $key => $val) {
				echo '<li>' . htmlspecialchars($key) . ':' . htmlspecialchars($val) . '</li>';
			}
		};
	 ?>
</body>
</html>