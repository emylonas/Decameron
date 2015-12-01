<?php
	$selected = "arts";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Arts</a></li>
	<li><a href="../">Medieval Music</a></li>
	<li>Wind instruments: Flutes</li>
</ul>
<h2>Wind instruments: Flutes</h2>
<p>There were many varieties of flute in the medieval period, including the <strong>cross-blown (traverse) flute</strong>, <strong>panpipes</strong>, <strong>whistles</strong>, and end-blown flutes such as the <strong>recorder</strong>. An interesting pairing of instruments is the <strong>pipe and tabor</strong>, which was played by one musician. The pipe was a long three-holed recorder, two at the front and one at the back. The tabor was a small drum, which was slung over the shoulder and played with the other hand. The pipe and tabor allowed one person to provide melodic and percussive accompaniment for entertainments.</p>

<div class="row">
	<div class="image_left">
		<img src="../../images/flute.jpg" width="195" height="202" />
	</div>
	
	<div class="image_right">
		<img src="../../images/pipetabor.jpg" width="195" height="193" />
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
