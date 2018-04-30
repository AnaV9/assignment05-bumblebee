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
			<?php include "inc/navlogin.inc"; ?>
		</section>
		<div class= "container">

			<article>
			<h2>Welcome!</h2>
				<p>As an admin you are able to view submitted surveys and see other registered admin.</p><p><a class="adminmore" href = "admin.php"> See More</a></p>
			</article>

			<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>