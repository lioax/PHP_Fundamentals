<?php
function pretty_print($value) {
	echo '<pre>'; // Recognizes code formatting
	print_r($value);
	echo '</pre>';
}

function array_pluck($toPluck, $arr2) { // needs to accept the item to pluck ($toPluck) and the array ($arr2)
	// We know we want the function to return this new array that contains the values
	$newArr = array();
	// Filter through the array that was provided (three items, each of those items will be an array themselves)
	foreach($arr2 as $item) { // $item will be equal to the 1st, 2nd, and 3rd arrays (per iteration) in the multi-dimen. array on index.php
		// Now we fill up the $newArr with the VALUE of the name KEY
		$newArr[] = $item[$toPluck]; // Now the VALUE that we want to PLUCK is contained in the VARIABLE $toPluck
	}
	// print_r($newArr);
	return($newArr);
}
?>