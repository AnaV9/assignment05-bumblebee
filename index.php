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
				<h2>Lion</h2>
					<p>The lion (Panthera leo) is a species in the family Felidae and a member of the genus Panthera. It is the second largest extant species after the tiger. It exhibits a pronounced sexual dimorphism; males are larger than females with a typical weight range of 150 to 250 kg (331 to 551 lb) for the former and 120 to 182 kg (265 to 401 lb) for the latter. In addition, male lions have a prominent mane, which is the most recognisable feature of the species. Both sexes have hairy tufts at the end of their tails.</p><p><a class="readmore" href = "lion.php"> Read More</a></p>
				<h2>Giraffe</h2>
					<p>The giraffe (Giraffa) is a genus of African even-toed ungulate mammals, the tallest living terrestrial animals and the largest ruminants. The genus currently consists of one species, Giraffa camelopardalis, the type species. Seven other species are extinct, prehistoric species known from fossils. Taxonomic classifications of one to eight extant giraffe species have been described, based upon research into the mitochondrial and nuclear DNA, as well as morphological measurements of Giraffa, but the IUCN currently recognises only one species with nine subspecies.</p><p><a class="readmore" href = "giraffe.php"> Read More</a></p>
				<form method="post" action="survey.php">
					<input type="submit" value="Take a Survey!">
				</form>
			</article>

			<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>