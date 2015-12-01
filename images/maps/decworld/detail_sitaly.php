<?php
	$selected = "maps";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../maps.php">Maps</a></li>
	<li><a href="dworld.php">The World of the <i>Decameron</i></a></li>	
	<li><a href="dworld.php#Italy">Italy</a></li>
	<li>Detail Map of Southern Italy</li>	
</ul>
<h2>Detail Map of Southern Italy</h2>
<div>
	<p class="bodystyle"><img src="SItaly.jpg" usemap="#SItaly" border="0"></p>
	<blockquote>
		<p class="bodynoindent"></p>
		<p class="bodynoindent"><img src="amalfi.jpg" usemap="#amalfi" border="0"><br>
			<i>Image courtesy of the</i> <a href="http://www.lonelyplanet.com">Lonely Planet</a></p>
		<p class="bodynoindent"></p>
	</blockquote>
	
	<map name="SItaly">
		<area shape="rect" coords="237,77,298,96" href="naples.php" title="">
		<area shape="rect" coords="254,99,324,118" href="salerno.php" title="">
		<area shape="rect" coords="273,210,335,231" href="messina.php" title="">
		<area shape="rect" coords="175,209,239,235" href="palermo.php" title="">
		<area shape="rect" nohref coords="10,10,20,20">
	</map>
	<map name="amalfi">
		<area shape="rect" coords="98,22,153,52" href="naples.php" title="">
		<area shape="rect" coords="209,76,271,95" href="salerno.php" title="">
		<area shape="rect" nohref coords="10,10,20,20">
	</map>
</div>

<?php	include '../../../footer.php'; ?>
