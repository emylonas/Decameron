<?php
	$selected = "arts";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Arts</a></li>
	<li><a href="../">Medieval Music</a></li>
	<li>Instruments</li>
</ul>
<h2>Instruments</h2>

<p>Since there was no standardized musical terminology in the Middle Ages, the same medieval instrument would often be known by several different names. We have thus grouped instruments here into general categories according to the way in which their sound was produced.</p>

<p>The following notes are based on Jeremy Yudkin, Music in Medieval Europe (Upper Saddle River, NJ: Prentice Hall, 1989), pp. 440-53)</p>

<ul class="links">
	<li><a href="plucked.php">Plucked strings</a></li>
	<li><a href="bowed.php">Bowed strings &amp; Mechanically bowed strings</a></li>
	<li><a href="flutes.php">Flutes</a></li>
	<li><a href="reed.php">Reed instruments</a></li>
	<li><a href="brass.php">Brass &amp; Horns</a></li>
	<li><a href="percussion.php">Percussion</a></li>
	<li><a href="keyboards.php">Keyboards</a></li>
</ul>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../../footer.php';
?>
