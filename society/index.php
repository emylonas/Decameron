<?php
	$selected = "society";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Society</li>
</ul>
<div class="image_right">
	<img src="../images/society/nardo_crop.jpg" width="200" height="258" />
</div>
<h2>Medieval Society</h2>

<ul class="links">
	<li><a href="communication.php">Communication</a></li>
	<li>Cultural Institutions
	<ul class="links">
	<li><a href="institutions/audience.php">The Audience</a></li>
	<li><a href="institutions/book_prod.php">Book Production</a></li>
	<li><a href="institutions/cult_centers.php">Cultural Centers of Medieval Italy</a></li>
	<li><a href="institutions/intellectuals.php">Intellectuals</a></li>
	<li><a href="institutions/schooling.php">Schooling</a></li>
</ul></li>
	<li><a href="structure/">Societal Structure</a></li>
	<li>Popular Culture
	<ul class="links">
	<li><a href="pop_culture/jesters.php">Jesters</a></li>
</ul></li>
	<li><a href="magic/">Magic in the <i>Decameron</i></a></li>
	<li>Medieval Sex and Sexuality
		<ul class="links">
			<li>Sex and Gender</a>
				<ul>
					<li><a href="sex/sexual-desire.php">Sexual Desire</a></li>
					<li><a href="sex/heat-coldness.php">Heat and Coldness as Gendered Qualities</a></li>
				</ul>
			</li>
			<li><a href="sex/sex-clergy.php">Sex and the Clergy</a></li>
			<li>Sex and Law</a>
				<ul class="links">
					<li><a href="sex/prostitution.php">Prostitution</a></li>
					<li><a href="sex/sexual-deviance.php">Sexual Deviance</a></li>
					<li><a href="sex/sex-spouses.php">Sex and Spouses: Marriage, Pleasure and Consummation</a></li>
					<li><a href="sex/sexual-positions.php">Sexual Positions</a></li>
					<li><a href="sex/fornication-adultery.php">Fornication and Adultery</a></li>
				</ul>
			</li>
			<li><a href="sex/sex-med-authors.php">Sex and Medieval Authors</a></li>
		</ul>
	</li>
</ul>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>