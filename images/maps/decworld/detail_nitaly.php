<?php
	$selected = "maps";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../maps.php">Maps</a></li>
	<li><a href="dworld.php">The World of the <i>Decameron</i></a></li>	
	<li><a href="dworld.php#Italy">Italy</a></li>
	<li>Detail Map of Northern Italy</li>	
</ul>
<h2>Detail Map of Northern Italy</h2>
<div>
	<p class="bodystyle"><img src="NItaly.jpg" usemap="#NItaly" border="0"></p>

	<map name="NItaly">
		<area shape="rect" coords="111,42,157,60" href="milan.php" title="">
		<area shape="rect" coords="109,79,149,101" href="pavia.php" title="">
		<area shape="rect" coords="95,152,138,179" href="genoa.php" title="">
		<area shape="rect" coords="235,143,299,160" href="bologna.php" title="">
		<area shape="rect" nohref coords="10,10,20,20">
	</map>
</div>

<?php	include '../../../footer.php'; ?>
