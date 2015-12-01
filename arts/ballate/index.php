<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li>The <em>Ballate</em> of the <em>Decameron</em></li>
</ul>
<h2>The <em>Ballate</em> of the <em>Decameron</em></h2>
<ul class="links">
	<li><a href="intro.php">Introduction: emotion and performance</a></li>
	<li><a href="carnivalesque.php">The ballate and the carnivalesque: Bahktin's theories of the body popular</a></li>
	<li><a href="boc-comic.php">Boccaccio and the medieval comic tradition</a></li>
	<li><a href="mus-hum.php">Ballate as Musica Humana</a></li>
	<li><a href="song.php">The song</a></li>
	<li><a href="speech-act.php">The speech act</a></li>
	<li><a href="love-songs.php">The Ballate as love songs</a></li>
	<li><a href="power-speech.php">The power of speech</a></li>
	<li><a href="bibliog.php">Bibliography</a></li>
</ul>

<p>(R.W.)</p>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
