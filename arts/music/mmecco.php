<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Echo la primavera</li>
</ul>
<h2>Echo la primavera</h2>
<table width="100%">
	<tr>
		<td><h3>Echo la primavera</h3></td>
		<td><h3>Here is the springtime</h3></td>
	</tr>
	<tr>
		<td>
			<p>Echo la primavera che 'l cor fa rallegrare,<br />Tenp' &egrave; d'annamorare,<br />E star con lieta cera.</p>
			<p>No' vegiam l'aria e'l tenpo,<br />Che pur chiam' allegre&ccedil;a.</p>
			<p>In questo vago tempo,<br />Ogni cosa &agrave; vaghe&ccedil;a.</p>
			<p>L'erb'&egrave; con gran fresche&ccedil;a,<br />E fiori coprono prati,<br />E gli alberi adornati,<br />Sono in simil manera.</p>
		</td>
		<td>
			<p>Here is the springtime which brings joy to hearts,<br />It is the time for falling in love,<br />and happy faces.</p>
			<p>We see how even the air<br />and the weather summon joy.</p>
			<p>At this sweet time,<br />everything is beautiful.</p>
			<p>The grass is green,<br />and flowers bedeck the fields,<br />and the trees are decorated<br />in like manner.</p>
		</td>
	</tr>
</table>

<p>(Lyrics taken from the critical edition of Landini's works, <em>The works of Francesco Landini</em>, ed. by Leonard Ellinwood, with textual collation by William A. McLaughlin (Cambridge, MA: Medieval Academy of America, 1945), p.85-86.)</p>

<?php
	include 'relatedPages.php'
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
