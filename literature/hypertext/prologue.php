<?php
	$selected = "literature";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Literature</a></li>
	<li><a href="prologue.php">Boccaccio Online</a></li>
	<li>Boccaccio Online: Teaching the <em>Decameron</em> as Hypertext at Brown University</li>
</ul>
<div class="image_right">
	<img src="../images/bookleaner.jpg" width="200" height="278" />
</div>
<h2>Boccaccio Online: Teaching the <em>Decameron</em> as Hypertext at Brown University</h2>
<p>(M.P. and M.R., Published in <em>New Approaches to the Teaching of Boccaccio's Decameron</em>, ed. James H. Mc Gregor, MLA Editions, 2000).</p>
<ul class="links">
	<li><a href="prologue2.php">Prologue</a></li>
	<li><a href="classics.php">Classics</a></li>
	<li><a href="universe.php">From Universe to Multiverse</a></li>
	<li><a href="e-lit.php">E-literacies/E-literatures</a></li>
	<li><a href="master.php">Master Metaphors</a></li>
	<li><em><a href="intentio.php">Intentio Operis (Virtualis)</a></em></li>
</ul>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
