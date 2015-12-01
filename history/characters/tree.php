<?php
	$selected = "history";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">History</a></li>
	<li><a href="index.php">The Historical Characters of the Times</a></li>
	<li>Family Trees of Historical Characters</li>
</ul>
<h2>Family Trees of Historical Characters</h2>
<div class="image_center">
	<img src="genealogy.gif" width="597" height="664" alt="Genealogy" />
</div>

<h3>History</h3>
<ul class="links">
	<li><a href="../hist_1.php">13th Century</a></li>
	<li><a href="../hist_2.php">14th Century</a></li>
</ul>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
