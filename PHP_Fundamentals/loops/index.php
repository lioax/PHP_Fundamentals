<?php

$arr = ['Jeff', 'Collis', 'Tash', 'Amanda'];

// For Each item within the $arr array, we will refer to them as $name
foreach ($arr as $name) {
	echo $name; // This loop will echo as many times as there are ITEMS in the ARRAY
}

// Using FOREACH with an associative array
$arr2 = array(
	'ceo' 	 	 => 'Collis',
	'manager' 	 => 'Tash',
	'instructor' => 'Jeff'
	);

foreach ($arr2 as $title => $name2) {
	echo "<strong><li>$title</strong> - $name2 </li>";
}

// Using FOR loop with an indexed array
$arr3 = array('Jeff', 'Collis', 'Tash', 'Amanda');

// (ITERATOR; CONDITION; INCREMENTER)
/* "For the creation of this $i variable (0), as long as $i is less than 10, then $i += 1 ($i++)
	Basically: reset the current value of $i to its current value plus 1" */
// for ($i = 0; $i < 10; $i++) {
// 	echo "<li>$i</li>";
// }

// This loop runs through the length of the array
for ($i = 0; $i < count($arr3); $i++) {
	echo "<li>$arr3[$i]</li>"; // $i is equal to a different value every time, so we essentially loop through the array this way
}

// Using WHILE loop with an indexed array
$arr4 = array('While', 'You', 'Do', 'This');

$i = 0;
while ($i < count($arr4)) {
	echo "<li>$arr4[$i]</li>";
	$i++;
}
/** WHILE LOOPS: are useful when you want to FETCH ROWS from a DATABASE.
	Ex. While this row is equal to (run function to fetch next row from DB) {then proceed} **/
/***** The difference between FOREACH and FOR is with a 
		FOREACH: We loop through all of the items within an array 
		FOR: We are specifying exactly how many times to run our loop *****/
?>