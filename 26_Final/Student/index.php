<!DOCTYPE html>



<html>
<head>
	<title></title>
	<link href="/assets/styles.css" rel="stylesheet">

</head>
<body id="final-example">

	<div class="wrapper">

		<div id="banner">	

		</div>

		<div id="nav">
			
		</div>

		<div class="content">

			<div id="footer" class="cf">

				<div class="column three">

					<strong>Phone</strong>
					123456789


				</div>
				
				<div class="column three">
					<strong>Location</strong>
					Philippines				


				</div>

				<div class="column three last">
					<strong>Hours</strong>
					<em>Mondays to Fridays</em><br>




				</div>


			</div>

			<small>&copy;2018 Alfredo Salvador Jr.</small>
			


		</div>
		


	</div>

	<div class="copyright-info">
		<?php 

			$document_root = $_SERVER['DOCUMENT_ROOT'];
			echo "root: $document_root";
			include("$document_root/assets/include/copyright.php");

			//include ('../assets/include/copyright.php'); 
			//C:\wamp64\www\CodeDynamicWebsites\assets
			

		?>		



	</div>


</body>
</html>

