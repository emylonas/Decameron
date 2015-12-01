<?php
	$selected = "arts";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Arts</a></li>
	<li><a href="../">Medieval Music</a></li>
	<li>Wind instruments: Reeds</li>
</ul>
<h2>Wind instruments: Reeds</h2>

<div class="row">
	<div class="image_left">
		<img src="../../images/shawm.jpg" width="150" height="142" />
	</div>
	
	<p>The <b>shawm</b>, or <b>bombarde</b>, was a double-reed wind instrument. Made of wood, it had a conical bore, long shaft, flared bell, and six to eight holes. They seem to have varied in size from bass to soprano, and were often used in ceremonial occasions such as processions.</p>
</div>

<div class="row">
	<div class="image_left">
		<img src="../../images/bagpipe.jpg" width="150" height="155" />
	</div>
	
	<p>The medieval <b>bagpipe</b> was much smaller and quieter than its modern Scottish counterpart. The bag was usually made of skin, and they were made with and without drone pipes.</p></td>
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
