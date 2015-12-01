<?php
	$selected = "themes_motifs";
	include '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Themes &amp; Motifs</a></li>
	<li>Module</li>
</ul>

<h3>Themes and Motifs Module</h3>

<p>Follow Theme and Motif trails in the text of the Decameron</p>

<ul class="links">
	<li><a href="animals/">Animals</a></li>
	<li><a href="cruelty/">Cruelty</a></li>
	<li><a href="dead/">Death</a></li>
	<li><a href="deception/">Deception</a></li>
	<li><a href="fortune/">Fortune</a></li>
	<li><a href="love/">Love</a></li>
	<li><a href="religion/">Religion</a></li>
	<li><a href="sex/">Sex</a></li>
	<li><a href="wit/">Wit</a></li>					
</ul>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
