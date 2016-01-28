<?php
##### REMEMBER: #####
##### WITH ARRAYS we use [BRACKETS], but with OBJECTS we use -> ARROWS ####


// So we know we can create an associative array to contain information about something
$person = array(
	'first' => 'John',
	'last' => 'Doe',
	'job' => 'Teacher'
	);
// If we wanted to view information about this array, we could use print_r() or var_dump()
// var_dump($person);

// Sometimes when we have information like the the $person array, it makes more sense to store them in an object
// ALL PEOPLE will have a first name, ALL PEOPLE will have a last name, and ALL PEOPLE will have a job

# OBJECT - All stem from the same tree, but each of them is UNIQUE
# CLASS - A BLUEPRINT of characteristics that ALL of these things share
	// Ex. "What characteristics do ALL PEOPLE share?"
class Person {
	public $name;		// PROPERTIES of a person
	public $job;		

	/********** This function will run AS SOON AS we CREATE a new INSTANCE or OBJECT **********/
	public function __construct($name, $job) {		// This new person will accept params for $name and $job
		// Now we set the $name and $job properties as an instance
		$this->name = $name;
		$this->job = $job;
	}

	// This person can also DO STUFF and we define actions by declaring methods/functions
	public function communicate($style = 'voice') { // defaults the style to voice
		// necessary code to execute people's communication within this class
		// return 'communicates'; // the function would return the ACT of communicating
		return 'communicates with ' . $style;
	}
}

// Now once we have the CLASS we can have SPECIFIC INSTANCES or OBJECTS
// One person's name might be Joe, one person might be black, one person may be a developer, etc.
// All of these OBJECTS may SHARE the same CHARACTERISTICS/ATTRIBUTES (and we define those attributes in a CLASS)
$p = new Person('John', 'Teacher');

/* If we run a var_dump($p); we will see the class Person#1 and the VALUES for $name and $job have been set
 * because we created a new instance, the __construct function automatically ran, we set the $name and $job PROPERTIES = to what we passed in
 * and now we have this new OBJECT to work with
 */

// Now we can do stuff like this:
echo $p->communicate();					// [commented out] prints "communicating" because its what the communicate() returns
echo $p->communicate('telepathy');		// prints "communicates with telepathy" because it passes that argument through to the function

##### If we want to work with OBJECTS and not have to DEFINE CLASSES #####
// We can use a standardClass or stdClass like so:
// We need to create a 'new' instance of this class to begin with, hence the KEYWORD new
$person = new stdClass; // stdClass is a GENERAL GENERIC class that you can fill up with ANYTHING

$person->first = 'Jack'; // Now we can set PROPERTIES to this OBJECT
$person->last = 'Johnson';
$person->job = 'Singer';

########## YOU CANNOT ADD METHODS to stdClass (see below) ##########

// $person->communicate = function() {
// 	return 'communicating';
// }

// var_dump($person);

// PUBLIC means it can be accessed from our INSTANCE, it isn't limited only to that CLASS
echo $person->first . ' ' . $person->last; // Now we're interacting with this info as an OBJECT rather than using an array

#################### CASTING AN ARRAY TO AN OBJECT ####################
$person2 = array(
	'first' => 'James',
	'last'  => 'Bond'
	);
// var_dump($person2);
var_dump((object)$person2); // CASTS the array to an OBJECT ------ Basically changes the DATATYPE to an OBJECT

echo $person2['first'];	// Prints James to screen using array syntax
$o = (object) $person2; // Changes the $person2 array into an object
echo $o->first; // Prints James to screen using object syntax

echo ((int)'5'); // CASTS the STRING LITERAL to an INT datatype
echo gettype((int)'5'); // Prints the DATATYPE to the screen
?>