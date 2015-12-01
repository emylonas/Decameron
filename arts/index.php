<?php
	$selected = "arts";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Arts</li>
</ul>
<div class="image_right">
	<img src="images/botticelli.jpg" width="241" height="170" />
</div>
<h2>The <em>Decameron</em> in the Arts</h2>
<ul class="links">
	<li><a href="visualizing/">Visualizing the Text</a></li>
</ul>
<p>The task of collecting images and mounting them on the web is a potentially limitless project that we have only just begun. Hindered by copyright and other access problems, what you find here is a fraction of what really exists in libraries and elsewhere. In addition to historical works (book illustrations and paintings) in this section we will also collect new experiments in visualization by contemporary artists and students.</p>
<ul class="links">
	<li><a href="wheel/master_w.php">Cinematic Adaptations</a></li>
</ul>
<p>The most famous cinematic adaptation of Boccaccio's masterpiece, Pier Paolo Pasolini's Decamerone (1970) part of his Trilogy of Life, is also an original interpretation of Boccaccio's text. Pasolini's intention was not to recreate the medieval world of Boccaccio's characters but instead to comment on contemporary Italian society. In this section, you will find essays on Pasolini's film and references to other films based on the Decameron.</p>
<ul class="links">
	<li><a href="music/">The Decameron and Medieval Music</a></li>
</ul>
<p>Music plays a small but critical role in the structural architecture of the Decameron. Each of the ten days of storytelling closes with a song, ostensibly composed and sung by one of the ten narrators. In this section, you will find an essay on Music in the Decameron by Eleonora M. Beck, and information about Medieval Music and instruments, as well as recordings of Francesco Landini's 14th-century ballads.</p>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
