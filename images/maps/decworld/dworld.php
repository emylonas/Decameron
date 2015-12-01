<?php
	$selected = "maps";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../maps.php">Maps</a></li>	
	<li>The World of the <i>Decameron</i></li>	
</ul>

<h2>The World of the <i>Decameron</i></h2>
<div class="twocolumn">
	<div class="left">
		<p>Select a red spot on the image map or one of the areas listed below:</p>				
		<ul class="links">
			<li> <a href="#Western Europe">Western Europe</a></li>
		  	<li> <a href="#Italy">Italy</a></li>
		  	<li> <a href="#Eastern Mediterranean">Eastern Mediterranean</a></li>
		</ul>
									
	  <map name="dworld1">
	    <area shape="polygon" coords="0,154,30,153,56,147,114,100,105,70,153,42,174,0,1,0,0,153" href="#Western Europe" title="">
	    <area shape="polygon" coords="153,43,105,70,114,100,123,125,163,148,189,118,151,43" href="#Italy" title="">
	    <area shape="polygon" coords="174,0,320,0,320,207,0,207,0,154,31,153,55,147,113,101,123,124,162,147,189,118,152,45" href="#Eastern Mediterranean" title="">
	    <area shape="rect" nohref coords="10,10,20,20">
	  </map>
	</div>
	
	<div class="right">
		<img src="dworld1.jpg" usemap="#dworld1" border="0">
	</div>
</div>

<br>
<h2 id="Western Europe">Western Europe</h2>
<div class="twocolumn">
	<div class="left">
		<p>Select a red spot on the image map or one of the areas listed below:</p>
		<ul class="links">
		  <li> <a href="paris.php">Paris</a></li>
			<li> <a href="london.php">London</a></li>
		</ul>
									
		<map name="WEurope">
			<area shape="polygon" coords="133,51,140,70,134,51" href="dworld.php#Western Europe" title="">
			<area shape="polygon" coords="133,50,140,71,133,50" href="paris.php" title="">
			<area shape="polygon" coords="134,51,141,74,162,74,169,49,134,50" href="paris.php" title="">
			<area shape="rect" coords="104,1,140,22" href="london.php" title="">
			<area shape="rect" nohref coords="10,10,20,20">
		</map>
	</div>
	
	<div class="right">
		<img src="WEurope.jpg" usemap="#WEurope" border="0">
	</div>
</div>

<br>
<h2 id="Italy">Italy</h2>
<div class="twocolumn">
	<div class="left">
		<p>Select a red spot on the image map or one of the areas listed below:<br>
		(or click in the general area on the map for a detailed view)</p>
  
		<ul class="links">
		  <li> <a href="bologna.php">Bologna</a></li>
			<li> <a href="florence.php">Florence</a></li>
			<li> <a href="genoa.php">Genoa</a></li>
			<li> <a href="marches.php">Marches</a></li>
			<li> <a href="messina.php">Messina</a></li>
			<li> <a href="milan.php">Milan</a></li>
			<li> <a href="naples.php">Naples</a></li>
			<li> <a href="palermo.php">Palermo</a></li>
			<li> <a href="pavia.php">Pavia</a></li>
			<li> <a href="rome.php">Rome</a></li>
			<li> <a href="salerno.php">Salerno</a></li>
			<li> <a href="siena.php">Siena</a></li>
		</ul>
			<ul class="links">
			  <li> <a href="detail_nitaly.php">Detail of Northern Italy</a></li>
				<li> <a href="detail_citaly.php">Detail of Central Italy</a></li>
				<li> <a href="detail_sitaly.php">Detail of Southern Italy</a></li>
			</ul>
					
		<map name="Italy">
			<area shape="polygon" coords="58,44,57,53,69,63,77,56,101,55,101,45,59,44" href="bologna.php" title="">
			<area shape="polygon" coords="79,71,107,98,113,92,87,63,80,70" href="marches.php" title="">
			<area shape="polygon" coords="107,123,107,132,113,140,120,140,124,134,142,133,143,124,107,123" href="naples.php" title="">
			<area shape="polygon" coords="96,144,119,145,123,138,130,139,138,153,129,157,98,157,95,144" href="salerno.php" title="">
			<area shape="polygon" coords="137,195,143,202,162,203,163,213,119,213,119,203,131,203,136,194,138,196" href="messina.php" title="">
			<area shape="polygon" coords="73,190,73,200,91,202,98,209,102,209,104,203,116,201,117,191,73,190" href="palermo.php" title="">
			<area shape="polygon" coords="80,119,85,112,89,112,91,119,97,121,97,130,66,129,65,119,80,118" href="rome.php" title="">
			<area shape="polygon" coords="61,87,49,87,49,96,48,99,83,98,82,87,71,87,69,83,61,83,59,86" href="siena.php" title="">
			<area shape="polygon" coords="62,67,70,67,73,73,78,76,77,82,32,82,32,72,58,72,62,68" href="florence.php" title="">
			<area shape="polygon" coords="30,48,35,54,47,56,47,67,13,66,13,54,23,54,30,48,31,48" href="genoa.php" title="">
			<area shape="polygon" coords="38,38,0,38,0,28,30,28,41,37,38,37" href="pavia.php" title="">
			<area shape="polygon" coords="36,25,37,18,72,18,72,28,36,28,36,25" href="milan.php" title="">
			<area shape="polygon" coords="0,72,26,67,27,68,54,67,80,61,105,54,122,29,118,1,1,0" href="detail_nitaly.php" title="">
			<area shape="polygon" coords="41,70,55,69,90,60,102,71,113,90,123,107,129,111,103,118,99,128,84,124,76,116,61,100,49,84,44,71" href="detail_citaly.php" title="">
			<area shape="polygon" coords="99,130,104,117,128,111,142,114,150,114,144,120,160,132,177,139,184,147,187,157,185,161,180,161,177,153,170,153,165,148,159,157,159,164,167,174,166,183,158,188,156,196,149,202,146,207,141,208,135,205,132,214,135,231,130,238,82,213,84,202,120,201,142,193,146,184,139,161,126,155,100,129" href="detail_sitaly.php" title="">
			<area shape="rect" nohref coords="10,10,20,20">
		</map>
	</div>
	
	<div class="right">
		<img src="Italy.jpg" usemap="#Italy" border="0">
	</div>
</div>

<br>
<h2 id="Eastern Mediterranean">Eastern Mediterranean</h2>
<div class="twocolumn">
 	<div class="left">
		<p>Select a red spot on the image map or one of the areas listed below:</p>
		<ul class="links">
		  <li> <a href="rhodes.php">Rhodes</a></li>
			<li> <a href="cyprus.php">Cyprus</a></li>
			<li> <a href="alexandria.php">Alexandria</a></li>
		</ul>
									
		<map name="EMedi">
			<area shape="rect" coords="151,119,194,133" href="cyprus.php" title="">
			<area shape="rect" coords="105,103,154,116" href="rhodes.php" title="">
			<area shape="polygon" coords="101,169,102,181,132,191,162,182,160,170,101,169,102,173" href="alexandria.php" title="">
			<area shape="rect" nohref coords="10,10,20,20">
		</map>
 	</div>
 	
 	<div class="right">
 		<img src="EMedi.jpg" usemap="#EMedi" border="0">
 	</div>
</div>


<?php	include '../../../footer.php'; ?>
