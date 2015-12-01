<?php
	$selected = "texts";
	$work= "index";
	$no_options = true;
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Texts</li>
</ul>
<h2>Texts</h2>
<p/>
<p/>	

<p/>
<p/>

<h3>Decameron:</h3>
<ul class="links">
	<li>The Italian text of the <em>Decameron</em> is based on V. Branca's Einaudi edition (1992). <a href="DecIndex.php?lang=it">Read Italian Text</a></li> 
	<li>The English translation of the <em>Decameron</em> (J. M. Rigg, 1903), while somewhat dated in its language and style, has a highly literal approach to translation which gives readers a reliable crib for exploring the original Italian text and is easily readable on its own. <a href="DecIndex.php?lang=eng">Read English translation</a>  </li>
</ul>
		
<h3>Other translations of the Decameron:</h3>
<ul class="links">
	<li><a href="florio/index.php"><em>Decameron</em></a>, translation sometimes attributed to John Florio, 1620.</li>
</ul>

<h3>Text Research Tools:</h3>
<ul class="links">
	<li><a href="concordance.php">Concordance to the <em>Decameron</em></a>
	<li><a href="dec_ppl_plces">Browse People and Places in the Decameron</a></li>
</ul>
		
<h3>Minor Works:</h3>
<ul class="links">
	<li><a href="CorIndex.php"><em>Corbaccio</em></a> &ndash; see also Dr. Guyda Armstrong's <a href="corbaccio/index.php">introduction</a> to this text and the online edition <br /><a href="FiaIndex.php"><em>Elegia di Madonna Fiammetta</em></a></li>
</ul>
		      
<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
