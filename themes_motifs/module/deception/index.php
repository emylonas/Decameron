<?php
	$selected = "themes_motifs";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Themes &amp; Motifs</a></li>
	<li><a href="../">Module</a></li>
	<li>Deception</li>
</ul>
<h2>Deception</h2>
<p>Deception appears in two forms in the Decameron. The first is deception through disguise. Here, costumes are used to portray new identities with the purpose of achieving a goal, often monetary or sexual. This could be a woman using costume to appear richer, or poorer, or even as a man. The second form of deception is through the use of language. Deception is different from wit in the sense that deception by definition is telling a story or occurrence that is simply not true. Similar to wit, deception is an often successful means of achieving an end used by all types of characters in the Novellas. Women deceive men to be with their lovers, men deceive clergy to receive Sainthood, clergy deceive women to get them into bed. </p>

<ul>
	<li><a href="stories.php">View all stories containing Deception</a></li>
</ul>
<h3>Narrow stories down by:</h3>
<ul class="links">
	<li><a href="disguise.php">Deception through disguise</a></li>
	<li><a href="language.php">Deception through language</a></li>
</ul>
<ul>
	<li>See also: <a href="../wit/stories.php">Wit: story</a>, <a href="../wit/words.php">Wit: simple words</a></li>
</ul>
<ul class="links">
	<li>Men deceiving: <a href="mm.php">men</a>, <a href="mw.php">women</a>, <a href="mc.php">clergy</a></li>
	<li>Women deceiving: <a href="wm.php">men</a>, <a href="wc.php">clergy</a></li>
	<li>Clergy deceiving: <a href="cm.php">men</a>, <a href="cw.php">women</a>, <a href="cc.php">clergy</a></li>
</ul>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../../footer.php';
?>
