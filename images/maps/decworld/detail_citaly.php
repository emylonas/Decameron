<?php
	$selected = "maps";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../maps.php">Maps</a></li>
	<li><a href="dworld.php">The World of the <i>Decameron</i></a></li>	
	<li><a href="dworld.php#Italy">Italy</a></li>
	<li>Detail Map of Central Italy</li>	
</ul>
<h2>Detail Map of Central Italy</h2>
<div>
	<p class="bodynoindent"></p>
	<p class="bodystyle"><img src="CItaly.jpg" usemap="#CItaly" border="0"></p>
	<blockquote>
		<p class="bodynoindent"></p>
		<p class="headerstyle">Detail of Florence Vicinity</p>
		<p class="bodynoindent"><img src="Florence.jpg" usemap="#Florence" border="0"></p>
	</blockquote>

	<map name="CItaly">
		<area shape="polygon" coords="138,69,144,63,153,63,157,69,175,69,177,80,165,84,122,83,123,72,126,69,137,69" href="florence.php" title="">
		<area shape="polygon" coords="221,39,255,73,260,72,266,66,244,43,232,31" href="marches.php" title="">
		<area shape="polygon" coords="115,112,114,123,124,125,132,132,139,132,143,125,150,125,150,113,115,113" href="siena.php" title="">
		<area shape="polygon" coords="194,214,192,225,190,237,227,237,228,226,209,224,207,213,194,214" href="rome.php" title="">
		<area shape="rect" nohref coords="10,10,20,20">
		</map>
		<map name="Florence">
		<area shape="rect" coords="46,74,105,92" href="florence.php" title="">
		<area shape="rect" nohref coords="10,10,20,20">
	</map>
</div>

<?php	include '../../../footer.php'; ?>
