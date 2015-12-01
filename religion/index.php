<?php
	$selected = "religion";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Religion</li>
</ul>
<div class="image_right">
	<img src="images/giotto_rel.gif" width="200" height="392" />
</div>
<h2>Religion</h2>
<ul class="links">
	<li>Religion and the Arts
		<ul class="links">
			<li><a href="arts/painting_florence.php">Painting in Florence and Siena</a></li>
		</ul>
	</li>
	<li>Religion and Literature
		<ul class="links">
			<li><a href="lit/why_the_church.php">Why did Boccaccio choose Santa Maria Novella?</a></li>
		</ul>
	</li>
	<li>Religion and Popular Culture
		<ul class="links">
			<li><a href="culture/background.php">Religion in the 13th and 14th Centuries</a></li>
			<li><a href="culture/antisemitism.php">Antisemitism</a></li>
			<li><a href="culture/franciscans.php">The Franciscans</a></li>
		</ul>
	</li>
</ul>
	
<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
