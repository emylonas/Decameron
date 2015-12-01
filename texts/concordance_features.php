<?php
	$selected = "texts";
	$no_options = true;
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li><a href="index.php">Texts</a></li>
	<li><a href="concordance.php">The Online Concordance to the <i>Decameron</i></a></li>	
	<li>The Features of the Concordance</li>	
</ul>
<h2>The Features of the Concordance</h2>
<br/><br/>
<img src="01.gif" vspace="30">
<br clear="left">
<br/>
<img src="02.gif" vspace="30">
<br clear="left"><br/>
<img src="03.gif" vspace="30">
<br clear="left"><br/>

<img src="03b.gif" vspace="30">
<br clear="left"><br/>
<img src="04.gif" vspace="30">
<br clear="left"><br/>
<img src="05.gif" vspace="30">


<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
