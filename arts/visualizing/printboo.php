<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../visualizing/">Visualizing the Text</a></li>
	<li>Printed Book Editions</li>
</ul>
<h2>Printed Book Editions</h2>
<ul class="links">
	<li><a href="bkgrdwoo.php">Background on Woodcuts</a></li>
	<li><a href="vene1542.php">1542 Venetian Edition of the <em>Decameron</em></a></li>
	<li><a href="Cinquecento_1.php">Cinquecento editions of the <em>Decameron</em></a></li>
</ul>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
