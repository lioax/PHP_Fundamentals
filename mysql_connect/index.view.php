<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
	if ($results)
	{
		foreach($results as $row)
		{
			echo $row->username . "<br>"; // For each item in the results query, echo their value as username objects and a break tag
		} else {
			echo 'No rows returned.';
		}
	}
?>
</body>
</html>