<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Super-Globals</title>
</head>
<body>
	<h1>Super Globals</h1>
	<?php echo htmlspecialchars($_GET['name']); ?> 
	<!-- This is ONE way to pass info through to another page
			It is ONLY USEFUL for simple transfers for information that is COMPLETELY SAFE 
			and ISN'T in any way changing the requested data - THIS IS WHEN WE USE $_GET -->

	<!-- DON'T EVER USE $_GET for sending information through that may be used to UPDATE a record in the database 
			That's NOT what it's for. It's for RETRIEVING and DISPLAYING information. Information that WON'T CHANGE and is SAFE. -->

	<!-- When to use $_GET: When someone adds information to a FORM and you want to use that information to UPDATE a RECORD
			in the DATABASE, or you want to UPDATE a specific ROW within the DATABASE -->
</body>
</html>