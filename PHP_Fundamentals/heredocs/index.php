<?php
# EXTRACT() function tutorial and HEREDOCS tutorial


/* We have a post that we want to attach to a bit of HTML that will be emailed
 * You would have to build up this HTML string and store it within a variable
 */
$post = array(
	'author' 	   => 'Lucas Alves',
	'title' 	   => 'My Awesome Post',
	'body'		   => 'Here is the body',
	'publish-date' => '1-6-2016'
	);

############# Below is a TERRIBLE WAY to go about doing this ##############
// $email = "<h1>{$post['title']}</h1><p>By: {$post['author']}</p><div>{$post['body']}"; // To do this with variables and INTERPOLATION, use CURLY BRACES
// echo $email;

// Some people may go about this by using different variables and CONCATENATING the rest
########## THIS METHOD OF DOING THINGS IS STILL VERY BAD! ##########
// $email = "<h1>{$post['title']}</h1>";
// $email .= "<p>By: {$post['author']}</p>";
// $email .= "<div>{$post['body']}</div>";
// echo $email;

########## SPRINTF() VERSION - STILL NOT CLEAN ENOUGH ##########
// What if I wanted to add something to it? I would have to decypher the string and figure out where to add my HTML
// $email = "<h1>{$post['title']}</h1>";
// $email .= "<p>By: {$post['author']}</p>";
// $email .= "<div>{$post['body']}</div>";

// $email = sprintf("<h1>%s</h1><p>%s</p><div>%s</div>", $post['title'], $post['author'], $post['body']);
// echo $email;

########## HEREDOCS VERSION - The BEST possible version to accomplish this ##########
// HEREDOCS SYNTAX - Three Angled Brackets (<<<) and some kind of IDENTIFIER (EOT), the HTML elements, then closing IDENTIFIER
// NOTE: YOUR PHP FILE CANNOT END WITH A HEREDOC!!!!!
// NOTE2: EOT = End Of Text, but you can use ANYTHING you want
// NOTE3: YOUR IDENTIFIER HAS TO BE ON ITS OWN LINE OF TEXT. To see this, try adding a space before EOT on line 47
$email = <<<EOT
	<h1>{$post['title']}</h1>
	<p>By: {$post['author']}</p>

	<div>
		{$post['body']}
	</div>
EOT;
// With HEREDOCS you don't have to worry about INDENTATION or ''s and it keeps things NEATLY FORMATTED
echo $email;

########## EXTRACT() - The ABSOLUTE BEST possible version to accomplish this using MVC ##########
// You can run extract to create these variables for the VIEW
$post2 = array(
	'author' 	   => 'Bruce Lee',
	'title' 	   => 'The Way of the Dragon',
	'body'		   => 'Wing-Chung has too many constraints, so I invented Jeet Kune Do!',
	'publish-date' => '1-7-2016',
	'category'	   => 'Personal'
	);
/* Extract() will go through your ASSOCIATIVE ARRAY and turn all of the KEYS into VARIABLE NAMES 
 * and set the VALUES = to their RESPECTIVE VALUES in the array */
 extract($post2);
 echo $author;
 echo $body;

 // Then we can write cleaner code and even ADD things in our array with ease ($category) with our HEREDOCS like so:
$email2 = <<<EOT
	<h1>$title</h1>
	<p>By: $author within the $category category</p>

	<div>$body</div>
EOT;

echo $email2;
?>