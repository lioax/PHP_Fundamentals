<?php

// explode(): take a string you provide and split it into items within an array
// implode(): take an array and turn it into a string
// str_replace
// end()
// preg_replace()

###############################################################################################
# Given the file path, images/my-file.txt, show me three different ways to specifically
# capture the string, 'my-file' and store it in a variable, $filename.
###############################################################################################

$file_path = 'images/my-file.txt';

// 3 different ways to capture my-file
// Store result in $file_name

// METHOD #1
$file_name = pathinfo($file_path, PATHINFO_FILENAME);
echo $file_name;

// METHOD #2
$file_name2 = basename($filepath, '.txt');
echo $file_name2;

// METHOD #3
$file_name3 = substr(explode('/', $file_path)[1], 0, -4); // explode(): it will take a string you provided and split that string into items within an array
										// the way it determines where to split the array is with a DELIMITER ('/' or whatever we set)
// print_r($file_name3); // the one we want in our case is index[1] my-file.txt
echo $file_name3;

// METHOD #4
$file_name4 = explode('/', $filepath); // my-file.txt
// $file_name4 = str_replace('.txt', '', $filepath, end($file_name4)); // my-file
$file_name4 = preg_replace('/\.txt$/i', '', $filepath, end($file_name4));
echo $file_name4;

// implode() EXAMPLE
echo implode(' | ', ['Jeff', 'Collis', 'Tash', 'Amanda']); // Jeff | Collis | Tash | Amanda
?>