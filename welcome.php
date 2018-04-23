<?php
	// 1. Create a database connection
	$dbhost = "128.151.150.1";
	$dbuser = "urcscon3_avaquer";
	$dbpass = "coffee1";
	$dbname = "urcscon3_avaquera";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Usually this data would come from HTML form values in $_POST
	$email = Trim(stripslashes($_POST['email']));
	
	// You really should escape all strings
	//$insertData = mysqli_real_escape_string($connection, $insertData);
	
	// 2. Perform database query
	$query  = "INSERT INTO myTable (email) VALUES ('$email')";
	$result = mysqli_query($connection, $query);

?>

<?php include "inc/html-top.inc";?>
	<body>
	<section class = "banner">
		<?php include "inc/header.inc"; ?>
		<?php include "inc/nav.inc"; ?>
	</section>

		<div class= "container">

		<article class = "welcome">
		<h2>Thank you!</h2>
			<p>You have been added to our mailing list.</p>
			<p><a href = "index.php">Read More About Mexico</a></p>
		</article>

		<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>

<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>