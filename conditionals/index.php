<?php

$month = 'February'; // (=) Assigns the value to the variable

if($month == 'January') { // (==) checks to see if what is on the left side matches the right side of the equals sign
	echo 'it does!';
} else {
	echo 'not the right month! <br>';
}

// Setting a variable to TRUE checks to see if the variable has a value, but could care less for its DATATYPE
$greeting = 'hello';

if($greeting == true) {
	echo 'there is something in the greeting variable <br>';
} else {
	echo 'greeting contains an empty string';
}

$greeting2 = '';

if($greeting2 == true) {
	echo 'greeting2 contains something in the string';
} else {
	echo 'greeting2 contains an empty string <br>';
}
// STRICT EQUALITY should only be used when we want to be as explicit as possible
// Absolute Equals (STRICT EQUALITY) checks for both VALUE and DATATYPE being true or false
$greeting3 = 'hello';

if($greeting3 === true) {
	echo 'true equals the string hello...';
} else {
	echo 'true does NOT equal hello in both value and datatype <br>';
}

// Numbers and truthy/falsy values
$any_number_above_zero = 205;

if($any_number_above_zero == true) {
	echo 'it\'s true! <br>';
}

$zero_is_falsy = 0;

if($zero_is_falsy == false) {
	echo 'zero is a falsy value <br>';
}

// ELSEIF example -- Test to see if $this_month is February
$this_month = 'February';


if($this_month == 'January') {
	echo 'It is January!';
} elseif($this_month == 'February') {
	echo 'It is February! <br>';
} else {
	echo 'Not the right month.';
}

// If you have to keep writing elseif statements, it means our code can probably be refactored using a SWITCH statement
// SWITCH STATEMENT EXAMPLE
$that_month = 'January';

switch($that_month) {
	case 'January': 
		echo 'It is Jan. <br>';
		break; // Breaks out of the switch case. Think ending curly brace case{echo 'blah'} else case{blah} <- (break)
	case 'February':
		echo 'It is Feb.';
		break;
	default: 
		echo 'Not the right month!';
}

// Creating a LOOKUP instead of an if() or switch() statement
// Helpful when you only need to do one thing, call a single function or echo out a response
$specific_month = 'March';

$months_list = array(
	// Make sure you LINE UP your equal signs and your arrows for readability purposes
	'January'  => 'It is Jan',
	'February' => 'It is Feb',
	'March'    => 'It is Mar'
);

// **** THIS WORKS WELL ONLY IF YOU CAN BE CERTAIN the VALUE PROVIDED is WITHIN the array ***
// If the user puts a value of $specific_month that isn't in the array it will throw an error
echo $months_list[$specific_month];
// So in this case it's better to do it this way
echo $months_list['February']; // We echo out the array and pass in the key that we need

// TERNARY OPERATOR - A SHORTHAND WAY FOR DOING IF (?) ELSE (:)
// If this item in the array exists, then echo $months_list[$specific_month], else echo 'Not the right month!'
echo isset($months_list[$specific_month]) ? $months_list[$specific_month] : 'Not the right month!';

// Multiple CONDITION CONDITIONAL STATEMENT EXAMPLE
$montha = 'May';
if( $montha !== 'May' && $montha !== 'June') {
	echo 'Is not May or June';
} else {
	echo 'It is one of those';
}

$monthb = 'Nov';
if( $monthb !== 'May' || $monthb !== 'June') { // when using OR, the left OR the right side is true
	echo 'Is not May or June';
} else {
	echo 'It is one of those';
}

?>