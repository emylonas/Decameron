<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Musical notation</li>
</ul>
<h2>Musical notation</h2>
<p>A system of musical notation was invented by the Greeks in antiquity, but was unknown in the early medieval period. However, around the ninth century CE, a new notational system began to develop across Europe. This type of notation indicated the relative pitch of notes in the chant, and was expressed by means of signs written above the words in the manuscript. Individual notes were drawn as a dot or a line, but if several notes were to be sung to one syllable, they were drawn as a connected group (a <em>neume</em>). This system served only to remind singers of the general trend of the piece, and was not designed to allow sight-reading of unknown melodies. (See Ludkin, p. 75).</p>

<p>The <em>neume</em> system was later developed into a more sophisticated musical notation by the monk Guido d'Arezzo (ca. 980-1050). Guido was single-handedly responsible for some of the most revolutionary developments in the history of music, such as the development of the stave, with lines and spaces representing relative pitches; letters on the stave to denote exact pitch (which would later become the modern clef); and a sight-singing system. His influential treatise, <em>Mikrologus</em>, formulated his theories on such matters as intervals, modes, and polyphony, and led to his immense fame in the Middle Ages (Ludkin, p. 341).</p>

<?php
	include 'relatedPages.php'
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
