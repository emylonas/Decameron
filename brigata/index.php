<?php
	$selected = "brigata";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Brigata</li>
</ul>
<div class="image_right">
	<img src="../images/brigata/giotto_ladies.jpg" width="200" height="244" />
</div>
<h2>Members of the Brigata and their Stories</h2>
<ul class="links">
	<li><a href="pampinea.php">Pampinea</a></li>
	<li><a href="filomena.php">Filomena</a></li>
	<li><a href="neifile.php">Neifile</a></li>
	<li><a href="filostrato.php">Filostrato</a></li>
	<li><a href="fiammetta.php">Fiammetta</a></li>
	<li><a href="elissa.php">Elissa</a></li>
	<li><a href="dioneo.php">Dioneo</a></li>
	<li><a href="lauretta.php">Lauretta</a></li>
	<li><a href="emilia.php">Emilia</a></li>
	<li><a href="panfilo.php">Panfilo</a></li>
</ul>
	
<?php
	$last_modified =  filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
