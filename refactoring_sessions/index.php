<?php
// Check out the differences between admin.php and functions.php in the /sessions directory vs this one
session_start();

$_SESSION['username'] = 'LucasAlves';

print_r($_SESSION);
?>