<?php
	$selected = "texts";
	$work= "index";
	$no_options = true;
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>	
	<li><a href="../">Texts</a></li>
	<li>People and Places</li>
</ul>
<h2>People and Places in the Decameron</h2>
<h3>Places</h3>
<ul class="links">
	<li><a href="in_italy.php">List of all the named places in Italy</a>
	<li><a href="outside_italy.php">List of all the named places outside Italy</a></li>
</ul>

<h3>People</h3>
<ul class="links">
	<li><a href="pers_historical.php">Historical Figures</a></li>
	<li><a href="pers_notChristian.php">Non-Christians</a></li>
	<li><a href="pers_disguised.php">Disguised Characters</a></li>
	<li><a href="pers_religion.php">Saints and Biblical Figures</a></li>
	<li><a href="pers_myth.php">Mythological Figures</a></li>
</ul>

		
		      
<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
