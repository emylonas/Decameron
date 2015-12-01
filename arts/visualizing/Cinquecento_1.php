<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../visualizing/">Visualizing the Text</a></li>
	<li><a href="../visualizing/">Printed Book Editions</a></li>
	<li>Cinquecento Editions of the Decameron</li>
</ul>
<h2>Cinquecento Editions of the Decameron</h2>
<p>As part of the Visualizing the Text section of the Decameron Web, we are privileged to present images from three early editions of the <i>Decameron</i> from the collections of the Harvard College Library:</p>
<p>Boccaccio, Giovanni, 1313-1375. <i>Decamerone ouer Cento nouelle</i>. f†. Venice, Bartolomeo de' Zanni, July 5, 1504. *IC.B6308D. 1552, Department of Rare Books, Houghton Library, Harvard College Library.<br /><a href="vene1504_intro.php">Go to edition &rarr;</a></p>
<p>Boccaccio, Giovanni, 1313-1375. <i>Il decamerone</i>. 4† in 8's. Florence, Filippo Giunta, July 29, 1516. Typ 525.16.223, Department of Printing and Graphic Arts, Houghton Library, Harvard College Library.<br /><a href="fior1516_intro.php">Go to edition &rarr;</a></p>
<p>Boccaccio, Giovanni, 1313-1375. <i>Il decamerone</i> (Ed. L. Dolce). 4† in 8's. Venice, Gabriele Giolito de' Ferrari and brothers, 1552. Typ 525.04.223F, Department of Printing and Graphic Arts, Houghton Library, Harvard College Library.<br /><a href="vene1552_intro.php">Go to edition &rarr;</a></p>
<p>The introductory page for each edition includes a detailed bibliographical description, with notes on the provenance of the woodcuts. These are taken from the <i>Catalogue of books and manuscripts of Harvard College Library</i>, Part 1, <i>Italian 16th century books</i>, 2 vols, compiled by Ruth Mortimer (Cambridge, MA: Belknap Press of Harvard University Press, 1974). Thumbnails of the images are then displayed alongside a bibliographical description of each page. The user is able to view each image in two sizes, allowing both an overall view of the page and a detailed close-up. All images are reproduced with the permission of the Houghton Library of the Harvard College Library.</p>
<ul class="links">
	<li><a href="vene1504_intro.php">1504 Venetian edition</a></li>
	<li><a href="fior1516_intro.php">1516 Florentine edition</a></li>
	<li><a href="vene1552_intro.php">1552 Venetian edition</a></li>
</ul>
<p><a href="Cinquecento_2.php">Digitization process</a></p>
<p>(G.A.)</p>

<?php
	include 'printedbookRelatedPages.php';
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
