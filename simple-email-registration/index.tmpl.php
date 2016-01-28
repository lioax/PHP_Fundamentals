<?php
# V I E W 

# WITHOUT USING A DATABASE: How can we use a FILE based system to create a mailing list REGISTRATION system
# IE. Give the user the ability to send you their name and email address and sign up for a mailing list
# 		Take those credentials, store them within a file, give ourselves an easy way to view all of that info. and add to it

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		li { list-style: none; }
		.notice {color: red; font-style: italic;}
		ul li {margin: 0; padding: 0;}
	</style>
</head>
<body>
	<h1>Join the Mailing List</h1> 
	<form action="" method="post">
		<?php if( isset($status ) ) : ?>
		<p class="notice"><?php echo $status; ?></p>
	<?php endif; ?>
		<ul>
			<li>
				<label for="name">Your Name: </label>
				<!-- value: the value that existed when the form was posted, if any -->
				<input type="text" name="name" value="<?= old('name'); ?>">
			</li>
			<li>
				<label for="email">Your Email Address: </label>
				<input type="text" name="email" value="<?= old('email'); ?>">
			</li>
			<li>
				<input type="submit" value="Sign Up!">
			</li>
		</ul>
	</form>
</body>
</html>