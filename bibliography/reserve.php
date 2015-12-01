<?php
	$selected = "bibliography";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li><a href="../bibliography/">Bibliography</a></li>
	<li>Sources on reserve</li>
</ul>
<h2>Sources on reserve</h2>
<ul class="bibliography">
	<li>Bergin, Thomas Goddard. <em>Boccaccio</em> [ROCK RESRV PQ4286 .B4]</li>
	<li>Boccaccio, Giovanni. <em>Decameron</em> [ROCK RESRV PQ4287 .W35 1991]</li>
	<li>Boccaccio, Giovanni. <em>Elegy of Lady Fiammetta</em> [ROCK RESRV PQ4272 .E5 F38 1990]</li>
	<li>Boccaccio, Giovanni. <em>Stories from the Decameron</em> [ROCK RESRV PQ4272. E5 A355 1977]</li>
	<li>Branca, Vittore. <em>Boccaccio: the Man and His Works</em> [ROCK RESRV PQ4277 .B713 C.2]</li>
	<li>Branca, Vittore. <em>Boccaccio medievale e nuovi studi sul Decameron</em> [ROCK RESRV PQ4286 .B69 1975]</li>
	<li>Forni, Pier Massimo. <em>Adventures in speech : rhetoric and narration in Boccaccio's Decameron</em> [ROCK RESRV PQ4295 .F67 1996]</li>
	<li>Kirkham, Victoria. <em>The Sign of Reason in Boccaccio's Fiction</em> [ROCK RESRV PQ4287 .K57x 1993]</li>
	<li>Marcus, Millicent Joy. <em>An Allegory of Form: Literary Self-Consciousness</em> [ROCK RESRV PQ4287 .M326]</li>
	<li>Mazzotta, Giuseppe. <em>The World at Play in Boccaccio's Decameron</em> [ROCK RESRV PQ4287 .M39 1986]</li>
	<li>&Oacute; Cuillean&aacute;in, Cormac. <em>Religion and the Clergy in Boccaccio's Decameron</em> [ROCK RESRV PQ4293 .P4 O28x 1984 C.2</li>
	<li>Scaglione, Aldo D. <em>Nature and Love in the Late Middle Ages</em> [ROCK RESRV PQ4287 .S3 1963 C.2]</li>
	<li>Smarr, Janet Levarie.  <em>Boccaccio and Fiammetta : the narrator as lover</em> [ROCK RESRV PQ4290 .S6 1986]</li>
	<li>Wallace, David.  <em>Giovanni Boccaccio, Decameron</em> [ROCK RESRV PQ4287 .W35 1991]</li>
</ul>

<?php
	include 'relatedPages.php';
?>
	
<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
