<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../cassoni/">Cassoni and the <em>Decameron</em></a></li>
	<li>Sala dei Pappagalli</li>
</ul>
<h2>Sala dei Pappagalli</h2>
<div class="image_center">
	<img src="../images/pappagalli.gif" height="500" width="568" alt="Interior of Sala dei Pappagalli" />
	<span>Interior view of the Sala dei Pappagalli, inside the Palazzo Davanzati, Museo della casa fiorentina antica</span>
</div>

<p>(C. C.)</p>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
