<?php
/*******************************************
 *	PRINTF(): Print information to the screen, format it, bind variables to a string.
 *				Takes EXISTING VARIABLES and binds them to a STRING wherever we specify
 * SPRINTF(): Assigns a STRING to a VARIABLE rather than printing it to the screen
 *  SSCANF(): We provide a STRING and we PARSE it into VARIABLES
 */


$name = "Joe"; // Maybe we're fetching some data from the database, but assume that for now it is hard coded
$age = 27;

// The printf() function is a better solution than the one below
// $greeting = "My name is $name and I am $age."; // INTERPOLATION: we can embed variables enclosed in DOUBLE QUOTES

// echo $greeting;

printf("My name is %s and I am %d. <br>", $name, $age); // We can BIND VARIABLES to the string using printf()
// %s stands for STRING and %d stands for digit/number


// SPRINTF() is a function used to allow you to store printf() as a variable
$name2 = "Jack";
$age2 = 19;
$greeting = sprintf("My name is %s and I am %d. <br>", $name2, $age2); // sprintf() = stringprintf

echo $greeting;

// EXAMPLE #2
// printf("This post was made on %s, %s, %d", 'June', '7th', 2012);
$posted = sprintf("This post was made on %s %s, %d <br>", 'June', '7th', 2012); // These variables would probably be determined dynamically
echo $posted;

/* SSCANF() - the INVERSE of printf(). It returns an ARRAY containing our matches.
				Ex. If we have specific values in a string we need PARSED into a variable */ 

// NOTICE that the first %s grabs the string June, the second %[^,] looks for anything NOT (^) a comma,  
$results = sscanf("June 7th, 2012", "%s %[^,], %d"); // REMEMBER: the only things stored are what are in the character classes, ex. %s, [^,] etc.
// print_r($results); // will print [0] June [1] 7th [2] 2012 stored within an array

// What we want however, is to store our matched items from the ARRAY to VARIABLES

// The list() function allows us to store a list values from an ARRAY to VARIABLES
list($pokemon, $type, $weight) = sscanf("Pikachu Electric 10kg.", "%s %s %s");
echo "Name: $pokemon <br> Type: $type <br> Weight: $weight <br>";

// EXAMPLE #2 SSCANF() also allows us to assign values to variables AS PARAMETERS
sscanf("Agumon Fire 25kg.", "%s %s %s", $digimon, $type_d, $weight_d);
echo "Name: $digimon <br> Type: $type_d <br> Weight: $weight_d <br>";

// EXAMPLE #3 making sense of syntax using an array version
list($car_make, $car_year) = array('Honda', 2016);
echo "That is a $car_year $car_make!";

?>