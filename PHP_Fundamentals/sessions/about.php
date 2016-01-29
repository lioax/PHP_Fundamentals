<?php
session_start();

// The session variable can now be called in about.php
echo $_SESSION['username'];

// There may also be times where we want to DESTROY a SESSION to clean up any memory leaks etc.
// If you were to visit a website, close it, and re-open it, the session would automatically be destroyed
// THINK ABOUT WEBAPS where people have to LOGIN and LOGOUT - when they LOGOUT you want to DESTROY that SESSION

### THINK OF A SESSION AS A USER-SPECIFIC LIFE CYCLE - You open the browser, visit a web page, you close the browser. ONE SESSION.
session_destroy(); // Erases all of the session data from the disk

$_SESSION = array(); // The $_SESSION array is not affected by session_destroy(); and it will continue to have information
						// We can delete that information by setting the $_SESSION variable to an empty array.

print_r($_SESSION);
?>