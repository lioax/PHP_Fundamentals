<?php
// SESSIONS: used to STORE USER-SPECIFIC DATA
// COOKIES: a way to STORE little BITS of INFORMATION on the CLIENT

/* Sessions are stored ON THE SERVER. The PHP ENGINE will store a COOKIE as a SESSION ID (a randomly generated super-long unguessable string)
 * When a user requests a specific URL, the COOKIE information that was set will be sent back to the server, the PHP ENGINE will VALIDATE it,
 * then subsequently retrieve the data that is ASSOCIATED with that SPECIFIC SESSION. */
 
// INITIALIZES the SESSION (must be done before any HTML is echoed out because it has some headers)
session_start(); // It is where the SESSION ID is generated and the COOKIE is initiated on the CLIENT

/* Added a new KEY='username' and set it equal to VALUE='LucasAlves'
 	 Now we can call this value in the about.php page */
$_SESSION['username'] = 'LucasAlves';

print_r($_SESSION);
?>