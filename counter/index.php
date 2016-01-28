<?php
// THE CONTROLLER - DIRECTS TRAFFIC and STORES LOGIC

/*
########### METHOD #1 #############
// We need a file that will store the # of times the page has received a visit
function set_count($file_name = 'counter.txt') {
	// Determine if counter.txt exists - does that file exist yet?
	if( file_exists($file_name) ) {
		// read the value or get current number stored within the file
		fopen($file, 'r');
		
		// increment it by one
		$count = (int) fread($handle, 20) + 1; // fread(): pass handler and how many bytes in length we want to read
		
		// write the new value
		fopen($file_name, 'w'); 
		fwrite($handle, $count); // right the new value of $count
		fclose($handle);

		// close the connection


	} else {
		// create the file (w+: attempt to open the file, if it does not exist, create it)
		$handle = fopen($file_name, 'w+'); // "file open": function used to create files
		// $handle will be used as a way to reference the file
		$count = 1;
		// set a default value of 1 (we assume it is that first visitor)
		fwrite($handle, $count); // fwrite(): write to the specified file
		fclose($handle); // fclose(): close the file we're working with
	}
	return $count;
	die();
}
*/
########### METHOD #2 #############
function set_count($file_name = 'counter.txt') {

	if( file_exists($file_name) ) {
		// read the value
		$count = (int) file_get_contents($file_name) + 1;
		file_put_contents($file_name, $count);

	} else {
		// create it
		$handle = fopen($file_name, 'w+');
		$count = 1;

		// set a default value of 1
		fwrite($handle, $count);
		fclose($handle);
	}
	return $count;
}

$count = set_count();

// THE VIEW
require 'index.tmpl.php';