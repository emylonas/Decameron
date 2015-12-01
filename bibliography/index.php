<?php
	$selected = "bibliography";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Bibliography</li>
</ul>
<h2>Bibliography</h2>

<ul class="links">
	<li><a href="bibliog.php">Bibliography of the <i>Decameron</i>&nbsp;Web</a></li>
	<li><a href="english.php">Suggested Articles in English</a></li>
	<li><a href="italian.php">Suggested Articles in Italian</a></li>
	<li><a href="reader_guide.php">Reader's Guide to Articles in English</a></li>
	<li>Sources on <a href="reserve.php">Reserve</a> (second floor of Rock)</li>
	<li><a href="motifs.php">Motif Index Codes</a> (for finding sources)</li>
</ul>
	
<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
