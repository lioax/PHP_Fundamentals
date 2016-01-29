<?php
/* ANTI-PATTERN - Bad practice, DON'T USE IT! ONLY FOR REFERENCE!!
 * It is a DEPRECATED way to connect to a database using PHP and MySQL
 * Note: mysql_connect will no longer work in version PHP 5.5 and above
 * IMPORTANT: This ANTI-PATTERN way of doing things is prone to SQL Injections!!! BECAREFUL!
 */

/*-------------------------------------------------------
 | Step #1 - Connect to the database using the terminal
 *-------------------------------------------------------*/
// GO into terminal, type mysql -u root -p then input password for root
// SHOW DATABASES;
// USE practice;
// SHOW TABLES;

// If you have multiple versions of php installed, you can do the following:
 // echo phpinfo(); // We will see that it is running php 5.6 then we can find 'mysql.sock' on the page

 // Then you can go into the terminal, type 'php -i | grep mysql.sock'

/*-------------------------------------------------------
 | Step #2 - Connect to the Database with PHP
 *-------------------------------------------------------*/
// parameters (host, username to connect to it, password)
// you could also do localhost:/var/mysql/mysql.sock (to be specific)

// mysql_select_db('practice'); // USE practice;

// $results = mysql_query('SELECT * FROM users'); // query the users table

// print all rows as an array on the screen for the entire users table
// while($row = mysql_fetch_object($results)) {
	// print_r($row);
// }

// You can also do it as strings with some formatting
// while($row = mysql_fetch_object($results)) {
// 	echo $row->username . "<br>";
// }

/******************************************************************
 * REUSABILITY - What if you need to SELECT from a different TABLE?
 * A lot of the code above would have to be repeated. 
 * Although we're working with ANTI-PATTERNS 
 ******************************************************************/

// Declare the function to be used in order to connect to the database
function connect($host = 'localhost', $username, $password, $db = '')
{	
	// Connect to the MySQL database accepting these parameters
	$conn = mysql_connect($host, $username, $password);

	// If a connection could not be made, then die and return 'Could not connect'
	// if(!$conn) { die('Could not connect');}

	// If the specified database is not empty, (the user wants to specify a db), run this function
	if( !empty($db) )
	{
		mysql_select_db($db, $conn); // USE practice;
	}

	return $conn;
}

// Declare the function to be used for querying the database and return an object we can filter through
function query($query, $conn)
{
	$results = mysql_query($query, $conn); // query the specified table based on the arguments passed
	
	if( $results ) // If there were results...
	{
		$rows = array();	// Store the rows in an array called $rows
		while($row = mysql_fetch_object($results))
		{
			$rows[] = $row; // Store the rows sent from $results query to the $rows array
		}
		return $rows; // If rows exist, return them (still within the if{})
	}
	return false; // If there were no results, we return false
}

?>