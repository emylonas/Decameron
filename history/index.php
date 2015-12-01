<?php
	$selected = "history";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>History</li>
</ul>
<div class="image_right">
	<img src="../images/history/simone_martini.jpg" width="200" height="233" />
</div>
<h2>The Age of the <em>Decameron</em></h2>
<ul class="links">
	<li><a href="hist_1.php">13th Century</a></li>
	<li><a href="hist_2.php">14th Century</a></li>
	<li><a href="characters/">The Historical Characters of the Times</a></li>
</ul>
<h3 class="break">Florentine Renaissance Resource:</h3>
<p><a href="http://www.stg.brown.edu/projects/tratte/" target="_blank">Online Tratte of Office Holders 1282-1532</a>
	<br>
	<em>This site gives access to a database with information about office holders of the Florentine Republic during its 250-year history.</em>
</p>


<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
