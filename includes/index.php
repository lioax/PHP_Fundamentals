<?php require 'inc/header.php'; ?>
<!-- <?php // include 'inc/headers.php'; ?> -->

<div class="contain">
	<p>Main content.</p>
</div>

<?php require 'inc/footer.php'; ?>

<!-- REQUIRE: We REQUIRE this file to move on, if you can't find it, we need to FAIL the entire file  (FATAL ERROR) 
		Think: "I require this file to be included for my project to function AS NEEDED." -->
<!-- REQUIRE_ONCE: This file should be included a total of ONCE. 
		Think: "This file should only ever be included ONCE." Only really uses when dealing with classes that depend on other classes. -->
<!-- INCLUDE: We will still see the rest of the code beyond what is included/modularized -->