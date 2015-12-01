<?php
	$selected = "arts";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Arts</a></li>
	<li><a href="../">Medieval Music</a></li>
	<li>Percussion instruments</li>
</ul>
<h2>Percussion instruments</h2>
<p>There seem to have been two main types of drum used in the Middle Ages, which were known by a confusing variety of names. The first was the <strong>tabor</strong> (<strong>tambour</strong>, <strong>timbrel</strong>), which was a medium-sized drum slung across one shoulder, while the second type was the <strong>nakers</strong>, a pair of small drums. The tabor was played with a single heavy stick, and a pair of sticks were used for the nakers.</p>

<p>Other percussion instruments included the <strong>tambourine</strong>, which was probably struck with the fingers rather than shaken, the <strong>carillon</strong> (<strong>bells</strong>), which were suspended from a frame, the <strong>cymbals</strong>, and the <strong>dulcimer</strong>, a <strong>psaltery</strong> that was struck rather than plucked.</p>

<div class="row">
	<div class="image_left">
		<img src="../../images/carillon.jpg" width="196" height="204" />
	</div>
	
	<div class="image_right">
		<img src="../../images/cymbals.jpg" width="199" height="191" />
	</div>
</div>

<div class="row">
	<?
		include 'relatedPages.php';
	?>
</div>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../../footer.php';
?>
