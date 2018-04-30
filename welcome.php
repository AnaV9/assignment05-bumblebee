<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<?php include "inc/html-top.inc";?>
	<body>
	<section class = "banner">
        <?php include "inc/header.inc"; ?>
		<?php include "inc/nav.inc"; ?>
	</section>
		<div class= "container">

		<div class = "slider"> 
			<img src="images/lionlook.jpg" alt="Lion">
			<img src="images/glook.jpg" alt="Giraffe">
		</div>

		<article>
		<h2>Welcome</h2>
			<p>To view exclusive content, please sign into your account.</p>
		</article>

		<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
		</div>
    	<p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
	</body>
</html>