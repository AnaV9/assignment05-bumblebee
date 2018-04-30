<?php include "inc/html-top.inc";?>
	<body>
	<section class = "banner">
        <?php include "inc/header.inc"; ?>
        <?php include "inc/nav.inc"; ?>
	</section>
	<div class= "container">

<div class="form">
	        	
		<h1>Website visitor survey?</h1>


		<h3>Is this your first time visiting the website?</h3>

		<form method="post" action="submit.php">
		  <input type="radio" name="first_visit" value="Yes"> Yes<br>
		  <input type="radio" name="first_visit" value="No"> No<br>
		</form>


		<h3>How did you find our website?</h3>

		<form method="post" action="submit.php">
		  <input type="radio" name="website_finder" value="Class website"> Class website<br>
		  <input type="radio" name="website_finder" value="Search engine"> Search engine<br>
		  <input type="radio" name="website_finder" value="Word of mouth"> Word of mouth<br>
		</form>
	

		<h3>Please tell us how easy it is to find information on the site</h3>

		<form method="post" action="submit.php">
		  <input type="radio" name="info_finder" value="Easy"> Easy<br>
		  <input type="radio" name="info_finder" value="Average"> Average<br>
		  <input type="radio" name="info_finder" value="Difficult"> Dificult<br>
		</form>


		<h3>For more information please provide and email address</h3>


        <form method="post" action="submit.php">
		<label>Email</label>
	    <input type="text" class="survey" name="email"><br>

			<div class="form-group">
			    <button type="submit" class="push_button" id="sendMessageButton">Submit</button>
			</div>
		</form>

</div>
<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>
