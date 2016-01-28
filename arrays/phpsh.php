<?php 
// In order to get into PHP SHELL just type phpsh in the terminal

/* Helpful shortcuts while in PHP Shell:
 * h - brings up the help menu with everything you can do in PHP SHELL
 * ! - allows you to execute regular terminal shell commands like ls (Ex. !ls)
 * d - gives you documentation instead of having to go to PHP.net (Ex. d stristr)
 */

// This is an example of what you can do with PHP SHELL

#################################
#		ADDING items to ARRAYS 	#
#################################
$months = array('jan', 'feb', 'mar', 'apr', 'may');
= $months[0]; // will print "jan" in the terminal
print_r($months); // will print the following in the terminal:

Array 
	(
		[0] => jan
		[1] => feb
		[2] => mar
		[3] => apr
		[4] => may
	)

// We can now ADD to an existing array using ARRAY_PUSH
	// Parameters: array_push (array name, value to add)
array_push($months, 'jun');
print_r($months); // will print the following in the terminal:

Array 
	(
		[0] => jan
		[1] => feb
		[2] => mar
		[3] => apr
		[4] => may
		[5] => jun
	)

// SHORTHAND version of array_push
$months[] = 'jul';
print_r($months); // will print the following in the terminal:

Array 
	(
		[0] => jan
		[1] => feb
		[2] => mar
		[3] => apr
		[4] => may
		[5] => jun
		[6] => jul
	)
// We can also ADD items to THE BEGINNING of an existing array using ARRAY_UNSHIFT
	// Parameters: array_unshift (array name, value being added to beginning of the array)
array_unshift($months, 'jan');
print_r($months); // will print the following in the terminal:


#################################
#	DELETING items from ARRAYS 	#
#################################

// We can now DELETE things from THE END of an existing array using ARRAY_POP
	// Parameters: array_pop (array name)		// array_pop REMOVES THE LAST ITEM from an existing array
array_pop($months);
print_r($months); // will print the following in the terminal:


Array 
	(
		[0] => jan
		[1] => feb
		[2] => mar
		[3] => apr
		[4] => may
		[5] => jun
	)

// We can also STORE the popped item from the array into a VARIABLE
$popped_month = array_pop($months);
= $popped_month; // shorthand for echo $popped_month which equals jun
print_r($months); // will print the following in the terminal:


Array 
	(
		[0] => jan
		[1] => feb
		[2] => mar
		[3] => apr
		[4] => may

// We can also REMOVE AN ITEM from THE BEGINNING of an array using ARRAY_SHIFT
	// Parameters: array_shift (array name)
array_shift($months);
print_r($months); // will print the following in the terminal:

Array 
	(
		[0] => feb
		[1] => mar
		[2] => apr
		[3] => may
	)

#####################################
#	RETRIEVING items from ARRAYS 	#
#####################################
	// We can remove specific items from an array using ARRAY_SLICE 		
	// Note: doing this will NOT DESTROY/DELETE items from the original array
		// Parameters: array_slice (array name, index to begin slice)
array_slice($months, 2); // this will not store the new array anywhere in memory, thus we do this:
$output = array_slice($months, 2); // stores the new sliced array into the variable $output
print_r($output); // will print the following in the terminal:
Original Array
	(
		[0] => jan
		[1] => feb
		[2] => mar
		[3] => apr
		[4] => may
	)
Sliced Array 
	(
		[0] => mar
		[1] => apr
		[2] => may
	)

	// We can remove specific items from an array using ARRAY_SLICE and tell PHP the begin and end points		
			// Parameters: array_slice (array name, index to begin slice, how many total items in new array)
$output2 = array_slice($months, 1, 2); // stores the new sliced array into the variable $output2
print_r($output); // will print the following in the terminal:

Original Array
	(
		[0] => jan
		[1] => feb
		[2] => mar
		[3] => apr
		[4] => may
	)
Sliced Array 
	(
		[0] => feb
		[1] => mar
	)

	// We can filter specific items from an array as well using ARRAY_FILTER
		// Parameters: array_filter(array we iterate over, a callback function)

/* array_filter will accept the item and the anonymous function will either return true or false
 if it returns true, then that item will remain within the array otherwise false will remove it from the array */
$three = array_filter($months, function($item) { // filters the array to only items with three digits in the month
	return strlen($item) == 3;
});

print_r($output); // will print the following in the terminal:

Original Array
	(
		[0] => jan
		[1] => feb
		[2] => mar
		[3] => april
		[4] => may
	)
Filtered Array 
	(
		[0] => jan
		[1] => feb
		[2] => mar
		[4] => may // april is NOT included because it is more than 3 digits long
		// NOTICE: that the index for MAY is kept at 4!
	)

# Also check out array_map and array_walk
?>