<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../visualizing/">Visualizing the Text</a></li>
	<li><a href="../visualizing/">Printed Book Editions</a></li>
	<li><a href="Cinquecento_1.php">Cinquecento Editions of the Decameron</a></li>
	<li>Digitization process</li>
</ul>
<h2>Digitization process</h2>
<p>We obtained 60 black and white photographic reproductions of wood engravings from three Cinquecento (sixteenth-century) editions of the <em>Decameron</em>: the 1504 Zanni <em>Decameron</em> (15 woodcuts); the 1516 Giunta edition (6 woodcuts), and the 1552 Giolito edition (39 woodcuts). These photographic images were then edited for web publication by a technical assistant. The photographs were scanned, saved as TIFFs for archival purposes, then saved in two different resolutions and a thumbnail in JPEG format. All files conform to the guidelines for academic standards suggested by the Arts and Humanities Data Service, in their publication <em><a href="http://ota.ahds.ac.uk/documents/creating/cdet/chap7.html">Creating and Documenting Electronic Texts</a></em>.</p>
<p>(G.A.)</p>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
