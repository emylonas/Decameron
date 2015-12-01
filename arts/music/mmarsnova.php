<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Music in the Trecento</li>
</ul>
<h2>Music in the Trecento: Ars Nova and the new musical genres</h2>
<p>The beginning of the Trecento marked a new awareness among composers and musicians that they were entering a new age in music. This sense of novelty was expressed in the titles of several treatises written about 1320: the <em>Ars Nova</em> of Philippe de Vitry ('New Art', which gave its name to this period), and Johannes de Muris' <em>Ars Novae Musicae</em> (Art of the New Music). (Yudkin, pp. 458-59)</p>

<?php
	include 'relatedPages.php'
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
