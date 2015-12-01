<?php
	$selected = "arts";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Arts</a></li>
	<li><a href="../">Medieval Music</a></li>
	<li>Plucked strings</li>
</ul>
<h2>Plucked strings</h2>

<div class="row">
	<div class="image_left">
		<img src="../../images/harp.jpg" width="150" height="160" />
	</div>
	
	<p>Due to its Biblical association with King David, the <b>harp</b> held an elevated position among instruments in the medieval period, in poetry and in instrumental music. Unlike modern freestanding harps, the fourteenth-century harp was a light and more portable instrument. It was often small enough to be held in the lap of the performer, and had no more than twenty strings made of gut. The harp, like many of the other medieval instruments, was tuned diatonically to any convenient key.</p>
</div>

<div class="row">
	<div class="image_left">
		<img src="../../images/lute.gif" width="150" height="120" />
	</div>
	
	<p>Several different types of <b>lute</b> existed in this period, although they all had the common features of a rounded back and a flat fingerboard, which was usually fretted. The instrument could be strung with gut strings or wire. The medieval lute was often played with a plectrum.</p></td>
</div>

<div class="row">
	<p>The <b>psaltery</b> was another popular instrument. Like the lute, there were many variations, but the basic form was a wooden soundbox with strings of graduated length stretched across it. The box could be triangular, rectangular, or trapezoid, and the instrument could be played flat on the lap or held against the chest.</p>
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
