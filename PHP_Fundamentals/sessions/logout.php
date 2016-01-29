<?php 
session_start();

session_destroy(); // Destroy the SESSION
$_SESSION = array(); // RE-INITIALIZE the SESSION variable/array

// Delete the cookie. (next lesson)
header("Location: login.php"); // REDIRECT to login.php
?>