<?php
	
	// Constants
	define("TITLE", "Allan's Logical Operators");
	
	// Custom Variables
	$myName		= "Alfredo Salvador Jr.";
	$lessonNum	= 15;

	$username	= "johnnyboy";
	$password	= "qwerty";

	$cartTotal	= 1;
	$couponCode	= "DiscountPlease";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>And <code>and</code></h3>
				<?php
					if ($username == "johnnyboy" and $password == "qwerty") {
						echo "<p>Login info is correct!</p>";
					}					
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					if ($cartTotal > 15 or $couponCode == "DiscountPlease") {
						echo "You get a discount!";
					} else {
						echo "You don't get a discount!";
					}
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					$ownDog = true;

					if (!$ownDog) {
						echo "You do not own a dog.";
					} else {
						echo "You own a dog.";
					}
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					if ($username == "johnnyboy" && $password == "qwerty") {
						echo "<p>Login info is correct!</p>";
					} else{
						echo "<p> Wrong Login info</p>";
					}
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					if ($cartTotal > 15 || $couponCode == "DiscountPlease") {
						echo "You get a discount!";
					} else{
						echo "You don't get a discount!";
					}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?>- <a href="http://google.com"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
