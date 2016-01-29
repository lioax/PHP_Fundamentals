<?php
#################################
# Glob()
# basename()
# dirname()
# substr()
# pathinfo() - returns an array
# extract()
#################################

	// Glob(): allows us to grab a glob of files that matches our specified pattern
	//  $files = glob('r*.txt'); // Look for .txt file that begins with r *(wildcard)
	// $files = glob('img/*.jpg');
	// print_f($fies);

	// GLOB_BRACE allows us to use CURLY BRACES to provide a comma-separated list of what we're looking for
	$images = glob('img/*.{jpg,jpeg,png}', GLOB_BRACE);
	foreach ($images as $img) {
			// echo basename($img); // basename(): grabs just the file name (not the full path) [ex. main_image.png]
			// echo dirname($img); // dirname(): grabs parent directory for file you pass it (ex. /img)
			// echo substr($img, 4); // substr(): allows us to chop off img/ using first 4 chars
			// $info = (pathinfo($img)); // pathinfo(): allows you to get the entire path information for your file
			// extract(pathinfo($img)); // extract(): filters through array and makes each key into a variable
										// then it makes the key's value equal to the variable's value
			
			// echo pathinfo($img, PATHINFO_FILENAME); // PATHINFO_EXTENSION, PATHINFO_
			// echo "<br>";
			// echo $filename . "\n";
			// echo $info['filename'] . '<br>';
			$info = pathinfo($img);

			$thumb_name = $info['filename'] . '-thumb.' . $info['extension'];
			echo $thumb_name . '<br>';

		}	

?>