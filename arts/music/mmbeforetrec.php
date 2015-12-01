<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Medieval music before the Trecento</li>
</ul>
<h2>Medieval music before the Trecento</h2>
<p>Music was central to medieval culture, both religious and secular. In the monasteries, churches, and cathedrals, music accompanied and amplified the Christian liturgy. The wealthy upper classes could enjoy refined musical entertainment at home, while the lower classes would also encounter popular music in their daily life. Secular music served as entertainment and education in even the poorest communities. In an age of mass illiteracy, popular literature was transmitted orally: the most popular works of literature were set to music and performed publically. We know, for example, that even a text as self-consciously literary as Dante's <i>Commedia</i> was recited and performed in the streets for popular consumption (and this popular acclaim was the basis for much of the intellectual criticism levelled at Dante in the Trecento). Music was a profoundly democratizing experience, and part of the life of every level of society.</p>

<ol class="links">
	<li><a href="mmreligious.php"> Religious music: Gregorian chant</a></li>
	<li><a href="mmnotation.php">Musical notation</a></li>
	<li><a href="mmtroubadours.php">Secular music: Troubadors</a></li>
	<li><a href="mmarsnova.php">Music in the Trecento: Ars Nova and the new musical genres</a></li>
	<li><a href="mmmonophonic.php">Music in the Trecento: Monophonic and polyphonic composition</a></li>
	<li><a href="mmgenres.php">Genres of music in the Trecento</a></li>
	<li><a href="mminstintro.php">Musical instruments</a></li>
	<li><a href="mminstsecular.php">Instruments in Secular Monophony</a></li>
	<li><a href="instruments/">Instruments</a></li>
</ol>

<?php
	include 'relatedPages.php';
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
