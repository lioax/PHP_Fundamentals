<?php
# $_GET - Speficially used for Retrieving Data, NOTHING DESTRUCTIVE like UPDATING a DATABASE#
# htmlspecialchars() #
# Passing information from one page to the next #

# $_GET only exist for  the LIFE-CYCLE of the page, NOT THE ENTIRE APPLICATION
# The variables we create have an expiration date: 
# 		either when the page reloads or when you visit a different page within the website

// How then, do I pass values within a website? One way would be to STORE INFO within a DATABASE. 
// Another way would be to pass it through the QUERY STRING
// QUERY STRING: Anything that comes AFTER the ? in the url address bar

// $_GET is a SUPER-GLOBAL ARRAY: it is used to fetch information from the QUERY STRING
// $name = $_GET[];

#############################################
# $_GET: is used when you're FETCHING DATA
#############################################

# Use the commented info below this line to see how $_GET gets lucas from the QUERY STRING
// http://localhost/PHP_Fundamentals/sandbox/$_GET/index.php?name=lucas&job=developer
// var_dump($_GET);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>$_GET</title>
</head>
<body>
	<!-- refer to http://localhost/PHP_Fundamentals/sandbox/$_GET/index.php?name=lucas&job=developer for ex. below -->
	<h1>Super Globals</h1>
	<?php echo $_GET['name']; // Prints out "lucas", but how do we know there's something in the query string? ?>

	<h2>Sub Section</h2>
	<!-- This will allow us to check whether or not something is in the query string 
	*EXAMPLE* IMPORTANT: If you want to get a blog post whose id=5 for example, and it isn't there, then you can redirect the user elsewhere -->
	<?php if( isset($_GET['job']) ) {	// refer to the same url as above, then delete the & and everything to the right
			echo $_GET['job'];
		} else {
			echo 'Is not set.';
		}
		?>
	<h3> Sub Sub Section </h3>
	<!-- *EXAMPLE* Redirect user to somewhere else if id is not set in query string -->
	<?php if( isset($_GET['id']) ) {
			echo $_GET['id'];
		} else {
			echo 'Redirect somewhere.';
		}
	?>
	<!-- REMEMBER: Anybody can edit the url/query string, so our job is to assume this method is DANGEROUS! You must assume they're
			trying to hurt you, your website, break your database, etc.

	 What if instead of changing the id= portion to a number, we changed it to id=<h3>changed</h3> ? -->
	 <h4> Entering an &lt;h5&gt; Example</h4> <!-- Change the html to its entity version so the browser skips reading it as HTML-->
	<!-- The hacker can insert any html tag or even try to break our code by inserting a </body> tag -->
	<?php if( isset($_GET['key']) ) { // http://localhost/PHP_Fundamentals/sandbox/$_GET/index.php?name=lucas&job=developer&id=5&key=%3Ch5%3Echanged%3C/h5%3E
			echo $_GET['key'];
		} else {
			echo 'This can be dangerous';
		}
	?>
	<!-- SOLUTION: we must run everything we get using the $_GET method using the htmlspecialchar() function -->
	<?php if( isset($_GET['key']) ) { // http://localhost/PHP_Fundamentals/sandbox/$_GET/index.php?name=lucas&job=developer&id=5&key=%3Ch5%3Echanged%3C/h5%3E
			echo htmlspecialchars($_GET['key']); // htmlspecialchars() will make it so users CANNOT enter malignant info through the qrystring
		} else {
			echo 'This can be dangerous';
		}
	?>

	<!-- Passing Information from Page to Page -->
	<br>
	<p><a href="about.php?name=joe">About</a></p>	<!-- We are sending joe through the qrystring -->
	
	<!-- This is ONE way to pass info through to another page
			It is ONLY USEFUL for simple transfers for information that is COMPLETELY SAFE 
			and ISN'T in any way changing the requested data - THIS IS WHEN WE USE $_GET -->

	<!-- DON'T EVER USE $_GET for sending information through that may be used to UPDATE a record in the database 
			That's NOT what it's for. It's for RETRIEVING and DISPLAYING information. Information that WON'T CHANGE and is SAFE. -->

	<!-- When to use $_GET: When someone adds information to a FORM and you want to use that information to UPDATE a RECORD
			in the DATABASE, or you want to UPDATE a specific ROW within the DATABASE -->
</body>
</html>