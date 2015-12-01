<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Instruments in Secular Monophony</li>
</ul>
<h2>Instruments in Secular Monophony</h2>
<p>The most common purpose for instruments in secular monophony was for dance music. Monophonic dance music in general was an improvised form, which accounts for the lack of preservation of these works. Many manuscripts that have been preserved show no indication as to whether they should be played, sung, or performed through both mediums. Another frequent use for instruments in monophony was for 'background' purposes. Whether at a large banquet or during travels, music provided a means of entertainment and pastime.</p>

<?php
	include 'relatedPages.php'
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
