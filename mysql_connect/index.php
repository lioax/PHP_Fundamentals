<?php 
require 'functions.php'; 
require 'config.php';

// Call connect function and pass in the necessary arguments
$conn = connect($config['DB_HOST'], 
		$config['DB_USERNAME'], 
		$config['DB_PASSWORD'], 
		'practice');

$results = query('SELECT * FROM users', $conn); // Calls the query function and passes in the string to be queried
// print_r($results); // run to see what is in $results

require 'index.view.php';
?>
