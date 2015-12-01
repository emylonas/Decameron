<?php
	$selected = "themes_motifs";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Themes &amp; Motifs</a></li>
	<li><a href="../">Module</a></li>
	<li>Fortune</li>
</ul>
<h2>Fortune</h2>
<p><em>Fortuna</em> is a classic literary motif that along with wit and love represents one of the main themes of the Decameron. Medieval society was greatly interested in the workings of Lady Fortune. Most of the stories told by the Brigata members entail instances of Fortune because adventures by defintion are usually the product of fateful encounters. Fortune is usually kind in the Novellas, except for Day 4, bringing characters in contact with the right people at the right time, or more often, at the right place at the right time. In some of the stories, the protagonists are able to change the course of fate by using wit, deception or undergoing a clever action to escape harm, punishment or loss of love. In other stories, fate has total control over the characters and dictates the course of the Novella. In the end, Fortune usually brings lovers together either for life, or a few precious nights.</p>

<ul>
	<li><a href="stories.php">View all stories containing Fortune</a></li>
</ul>
<h3>Narrow stories down by:</h3>
<ul class="links">
	<li><a href="bg.php">Bad Fortune turns into good Fortune</a></li>
	<li><a href="gb.php">Good Fortune turns into bad Fortune</a></li>
	<li><a href="gbg.php">Fortune turns bad and then good again</a></li>
</ul>
<ul class="links">
	<li><a href="fate.php">Fortune is reversed by fate and chance</a></li>
	<li><a href="character.php">Fortune is reversed by Character</a></li>
</ul>
<ul>
	<li>See also: <a href="../wit/harm.php">Wit: employed to escape harm</a></li>
</ul>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../../footer.php';
?>
