<?php
	
	// Constants
	define("TITLE", "Allan's Assignment Operators");

	// Custom Variables
	$myName = "Alfredo Salvador Jr.";
	$lessonNum = 18;

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
				
				<h3>Addition Assignment Operator <code>+=</code></h3>
				<?php
					$a = 4352;
					$b = -435234;
					$a += $b;

					echo $a;
				?>
				
				<h3>Subtraction Assignment Operator <code>-=</code></h3>
				<?php
					$a = -4523;
					$b = -456234.565436;
					$a -= $b;

					echo $a;
				?>
				
				<h3>Multiplication Assignment Operator <code>*=</code></h3>
				<?php
					$a = 452345.563456;
					$b = -452345.5635;
					$a *= $b;

					echo $a;
				?>
				
				<h3>Division Assignment Operator <code>/=</code></h3>
				<?php
					$a = 453245;
					$b = 6554;
					$a /= $b;

					echo $a;
				?>
				
				<h3>Modulus Assignment Operator <code>%=</code></h3>
				<?php
					$a = 45235;
					$b = 45352;
					$a %= $b;

					echo $a;

				?>
				
				<h3>Concatenation Assignment Operator <code>.=</code></h3>
				<?php
					$a = 4352435;
					$b = "sfasdf";
					$a .= $b;

					echo $a;
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <a href="http://google.com"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
