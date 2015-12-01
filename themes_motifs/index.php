<?php
	$selected = "themes_motifs";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Themes &amp; Motifs</li>
</ul>
<h2>Themes &amp; Motifs</h2>
<a href="module/index.php">Themes and Motifs Module</a>
<p>Follow Theme and Motif trails in the text of the Decameron</p>

<a href="../bibliography/motifs.php">Thompson's Motif Code Index</a>
<p>How to locate Boccaccio's Sources and Imitators</p>

<h3>Key Topics</h3>
<ul class="links">
	<li>Fortuna
	<ul>
		<li><a href="fortune/">About Fortuna</a></li>
		<li><a href="fortune/dante.php"><em>Fortuna</em> in Dante</a></li>
		<li><a href="fortune/iconography.php">The Iconography of Fortuna</a></li>	
	</ul>
	</li>
	<li>Amore
	<ul class="links">
		<li><a href="amore/garden.php">The Garden</a></li>
		<li><a href="amore/courtly_love.php">The Art of Courtly Love</a></li>
		<li><a href="amore/nature.php">Nature as Morality</a></li>
	</ul></li>
	<li>Ingegno
	<ul class="links">
	<li><a href="ingegno/disguise.php">Disguise and Gender-Role Reversal</a></li>
</ul>	
</li>
</ul>

<h3>Motifs</h3>
<ul class="links">
	<li><a href="plague/">The Plague</a></li>
	<li><a href="heart/">The Eaten Heart</a></li>
	<li><a href="indian_tale.php">Echoes of an Indian Tale in the <em>Decameron</em></a></li>
</ul>	

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
