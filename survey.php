<?php include "inc/html-top.inc";?>
	<body>
	<section class = "banner">
        <?php include "inc/header.inc"; ?>
        <?php include "inc/nav.inc"; ?>
	</section>
	<div class= "container">
	        	
		<h1>Website Visitor Survey</h1>

		<form method="post" action="connect.php">
				<div class="form-group">
					  <h3>Is this your first time visiting the website?</h3>
					  <input type="radio" name="visit" value="Yes"> Yes<br>
					  <input type="radio" name="visit" value="No"> No<br>
				</div>

				<div class="form-group">
					<h3>What animal do you like best?</h3>
					  <input type="radio" name="animal" value="Lion"> Lion<br>
					  <input type="radio" name="animal" value="Giraffe"> Giraffe<br>
				</div>
					
				<div class="form-group">
					<h3>Please tell us how easy it is to find information on the site</h3>
					  <input type="radio" name="info_finder" value="Easy"> Easy<br>
					  <input type="radio" name="info_finder" value="Average"> Average<br>
					  <input type="radio" name="info_finder" value="Difficult"> Dificult<br>
				</div>
				
				<br><br>
	
				<div>
					<input type="submit" name="submit" value="submit">
				</div>
		</form>



</div>
<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>
