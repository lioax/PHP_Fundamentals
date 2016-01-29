<?php
# ARRAY_PLUCK() and ARRAY_MAP()

// Goes with EXAMPLE #2 and EXAMPLE #3
require 'functions.php';

/* FUNCTIONS: ARE REUSABLE bits of code. Rather than writing functions manually many times, you can ABSTRACT that code away
 *				to a FUNCTION that you reference. If you need to change it, you can now CHANGE IT ONCE in your project.
 */

// EXAMPLE #1:
// SYNTAX: function name() {do something...}
// Make functions short, to the point, and accomplishes only one thing 
// if you SET the PARAMETER equal to something it will be the DEFAULT ARGUMENT ex) 'buddy'
function say_hello($name_ex = 'buddy') { // $name is the value we would accept from the say_hello function (PARAMETER)
	return "Hi, there $name_ex <br>";
}
$greeting = say_hello(); // We can pass in a value to the say_hello function (ARGUMENT)
echo $greeting;


// EXAMPLE #2:
// Real world example: We don't want to echo a <pre></pre> EVERY TIME we need to do the below (in comments)
$arr = array('name' => 'Joe', 'age' => 40, 'occupation' => 'teacher');
// echo '<pre>'; // Recognizes code formatting
// print_r($arr);
// echo '</pre>';
pretty_print($arr); // Call the function (in functions.php) and pass in the $arr

// EXAMPLE #3
// MULTI-DIMENSIONAL ARRAY that gets the names "plucked" from them
$people = array(
		  array('name' => 'Lucas', 'age' => 29, 'occupation' => 'software developer'),
		  array('name' => 'Joe',   'age' => 50, 'occupation' => 'teacher'),
		  array('name' => 'Jane',  'age' => 30, 'occupation' => 'marketting')
);

// If we change the 1st ARGUMENT,  we can get any one of the KEYS (name, age, or occupation) from the Multi. Dimens. Array
$plucked = array_pluck('name', $people); // Figure out how you want to CALL the FUNCTION BEFORE you right the logic for it
							// Ideally we want to return an array('Lucas', 'Joe', 'Jane')
print_r($plucked); // print the $plucked variable to the screen

// EXAMPLE #4
// MULTI-DIMENSIONAL ARRAY version 2 --- USING ARRAYMAP()
// ARRAYMAP() - gives us a function we can execute each time, which gives us a function to manipulate

// Function declared in this file for convenience
function array_grab($toGrab, $arr2) {		// array_map(function to execute() then the array that you're working with)
	// The function below will call the function() on this line for every item within the $arr2. use() is for CLOSURE (global and local vars)
	return array_map(function($item2) use($toGrab) {
		return $item2[$toGrab]; 
	}, $arr2);
}

$places = array(
		  array('name' => 'New York City',  'site' => 'Statue of Liberty', 'population' => '8.46 Million'),
		  array('name' => 'Miami', 			'site' => 'Miami Beach', 	   'population' => '417,650'),
		  array('name' => 'Salt Lake City', 'site' => 'Temple Square', 	   'population' => '191,180')
);

$grabbed = array_pluck('site', $places);
foreach ($grabbed as $i_grabbed) {
	echo $i_grabbed;
}


// VARIABLE vs LOCAL SCOPE: Basic idea - every function has its own local scope
?>