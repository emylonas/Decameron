<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Musical instruments</li>
</ul>
<h2>Musical instruments</h2>
<p>Very few instruments have survived from the medieval period, and what we know of their use has therefore been surmised from the written and pictorial evidence. Although played by amateurs and professional musicians alike, medieval instruments, unlike today, were not often used in a symphonic manner. Instead, they were used singly, as a means of maintaining rhythm, or for accompanying vocal and dance music. Medieval instruments can be broadly divided into  <em>haut</em> (loud instruments intended for outdoor use) and <em>bas</em> (softer instruments suited for domestic purposes). Some instruments (e.g., reed instruments) could be placed in either group depending on their particular purpose and physical manner in which they were used. Instruments that had to be tuned were done so diatonically, i.e., [definition] to any convenient key. There was no modulation in the music, nor was there any direction for a piece to be played in a certain key; the performer would often choose the key based on his instrument, voice, and/or those with whom he was performing.</p>

<?php
	include 'relatedPages.php'
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
