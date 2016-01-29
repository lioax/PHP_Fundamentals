<?php
/************************
 * IMPORTANCE OF ARRAYS *
 ************************
 * Arrays are important so we DO NOT need to declare and redeclare multiple VARIABLES like so:

$january = "January";
$february = "February";
$march = "March";
$april = "April";
$may = "May";
etc.

For twelve months we would have twelve INDIVIDUAL VARIABLES and this is NOT practical!
ARRAYS: a way for ONE VARIABLE to contain a GROUP of RELATED INFORMATION

*/

/**********
 * ARRAYS
 **********/

// IMPORTANT NOTE: Indexed Arrays start at the index of 0, NOT 1!
// Ex. If you wanted to echo out the fifth VALUE in the array, you would actually have to echo out the 4th INDEX
$months = array('january', 'february', 'march', 'april', 'may'); // an INDEXED ARRAY

echo $months[0];
var_dump($months); // does a VARIABLE DUMP onto the screen (shows indexes and values of array either on the screen or in VIEW PAGE SOURCE)

?>

<?php 
// EXAMPLE #2 - REMEMBER that PHP uses underscores and NOT camel casing
// $tuts_sites = array('nettuts+', 'psdtuts+', 'webdesigntuts+', 'wptuts+', 'mobiletuts+');
$tuts_sites = array(
	'nettuts' => 'http://net.tutsplus.com', 
	'psdtuts' => 'http://psd.tutsplus.com', 
	'webdesigntuts' => 'http://webdesign.tutsplus.com', 
	'wptuts' => 'http://wp.tutsplus.com', 
	'mobiletuts' => 'http://mobile.tutsplus.com'
	);
print_r($tuts_sites); // prints less information about the array on the screen than VAR_DUMP

/* If you're echoing out simple strings -> use the ECHO keyword
 * If you're dealing with OBJECTS or ARRAYS either use VAR_DUMP or PRINT_R
 * CMD + OPT + U is the MAC shortcut to view page source and this will give more readable information
 */
?>

<?php
// EXAMPLE #3 - Ways to DECLARE ARRAYS
$pokemon = array('Bulbasaur', 'Squirtle', 'Pikachu', 'Charmander', 'Jigglypuff', 'Meowth'); // an INDEXED ARRAY
$digimon = ['Agumon', 'Angemon', 'Gatomon', 'Gabumon', 'Patamon', 'Gomamon']; // INDEXED ARRAY v2 without ARRAY keyword
$yugioh = array(
	'exodia' => '9999999',
	'obelisk' => '10000',
	'blue-eyes' => '2000',
); // ASSOCIATIVE ARRAYS using KEY => VALUE pairs

$streetfighter = array('Ryu' => 'Hadoken', 'Guile' => 'Sonic Boom', 'Chun-Li' => 'Spinning Bird Kick');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<h1>Tuts+ Sites</h1>
		<u>
			<!-- For each ITEM within the $tuts_sites array, how do we want to refer to them? AS $site -->
			<!-- In other words: for each ITEM within the $tuts_sites array, assign its VALUE to the $site VARIABLE -->
			<?php foreach($tuts_sites as $site => $url) {
				// In order to uppercase the first letter of every word in the string we use the ucwords() function
				echo "<li><a href=\"$url\">" . ucwords($site) . "+</a></li>"; // Backspaces (\) are ESCAPE characters to escape the double quotes
			} // Now if we need to ADD another list item, all we have to do is add it to the array! (ex. mobiletuts+)
			?>
		</u>
		<h1>Yu-Gi-Oh Monsters</h1>
		<u>
			<?php foreach($yugioh as $card) { // when doing this we pull the VALUE ONLY, not the KEYS
				echo "<li>$card</li>";
			}
			?>
		</u>
		<u> <!-- Filter through the $yugioh array for each item, well how are we going to refer to these items in the array?
					well, for the KEYS refer to them using $card and for the VALUE refer to them using $power -->
			<?php foreach($yugioh as $card => $power) { // when doing this we pull the VALUE ONLY, not the KEYS
				echo "<li>$card</li>";
			}
			?>
		</u>
		<u>
			<?php foreach($streetfighter as $character => $special_move) : ?>
				<li>
					<a href="<?= $special_move; ?>"><?= $character ?></a> <!-- -->
				</li>
			<?php endforeach ?>
		</u>
	</body>
</html>