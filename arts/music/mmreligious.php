<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Religious music: Gregorian chant</li>
</ul>
<h2>Religious music: Gregorian chant</h2>
<p>Gregorian Chant is the earliest known categorization of sacred song. Credit for this musical form is commonly given to Pope Gregory I (540-604), but he may well have a less of a role in its discovery than previously thought. Originating in Rome, this sacred music was carried throughout the Christian world by the spread of Christianity in the early Middle Ages. Gregorian chant preserved the Greek diatonic modes, and its purest form was monodic. It could be performed by either a soloist, a soloist and a choir, or two alternating choirs. Originally, the chants were preserved orally, but they began to be documented in liturgical manuscripts from approximately the end of the eighth century onwards.</p>

<?php
	include 'relatedPages.php'
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
