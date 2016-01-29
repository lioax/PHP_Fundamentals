<?php
require 'config.php';
/******************************************************************
 * The Correct Way to Connecting to a MySQL Database with PHP:
 * PDO - PHP Data Objects
 * PDO is simply an API for connecting to any number of databases.
 * PDO - Database Agnostic - it doesn't care what adapter you use.
 ******************************************************************/

/* 
 * mysql_connect: What is so bad about this function?
 * MySQL is ONE of MANY databases, and the bad thing about this function is that it is specifically used for MySQL.
 * If we wanted to migrate to a different database, then we would essentially have to rewrite all of our database code.
 */

/*
 * PHP has three different adaptor functions for connecting to DBs
 * 1) mysql_connect()
 * 2) MySQLi() [stand for MySQL Improved]
 * 3) PDO - PHP Data Objects
 */
 
/* Below illustrates how we would connect using mysql_connect */
// mysql_connect('localhost', 'username', 'password');

// Declare our connection variable and create a new instance of our PDO class
// Parameters PDO('what database we are using', 'the database location to connect to', 'database name we're using)
$id = 3; // temporary

try { // try to connect to the database
	$conn = new PDO('mysql:host=localhost;dbname=practice', $config['DB_USERNAME'], $config['DB_PASSWORD']);
	# the default errmode is errmode_silent which means we would have to manually fetch any errors like the two statements below:
	// $conn->errorCode();
	// $conn->errorInfo();
	# the statement below changes the errmode to exception - which is great for development
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	/* 
	 * Better way than Anti-Pattern depicted below is to used PREPARED STATEMENTS
	 * PREPARED STATEMENTS: Your query and the information the user provides will be embedded into the query
	 * You prepare the query, then later on you BIND the parameters (or user supplied data) to the query
	 */

	/* Anti-Pattern */
	$results = $conn->query('SELECT * FROM users WHERE id = ' . $conn->quote($id)); // quote() wraps the value passed within quotes and escapes special chars
	foreach($results as $row) {
		print_r($row);
	}
} catch(PDOException $e) { // if we cannot connect, listen for a PDOException represented by variable $e
	echo 'ERROR: ' . $e->getMessage(); // Echo the PDO exception out
}
 ?>