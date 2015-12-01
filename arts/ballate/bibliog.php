<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../ballate/">The <em>Ballate</em> of the <em>Decameron</em></a></li>
	<li>Bibliography</li>
</ul>
<div class="image_right">
	<img src="../images/caravaggio-lute.jpg" width="272" height="213" />
</div>
<h2>Bibliography</h2>
<ul class="bibliography">
	<li><strong>Austin</strong>, J.L. <em>Philosophical Papers</em>. New York: Oxford University Press 1979.</li>
	<li><strong>Bakhtin</strong>. ed. Morris, Pam. <em>The Bakhtin Reader</em>. New York: Rutlidge, Chapman and Hall, Inc. 1994.</li>
	<li><strong>Boccaccio</strong>, Giovanni. trans. McWilliam. <em>The Decameron</em>. London, England: Penguin Books 1972.</li>
	<li><strong>Boccaccio</strong>, Giovanni. <em>Decameron</em>. Torino, Italy: Einaudi Tascabili 1980.</li>
	<li><strong>Bosseur</strong>, Jean-Yves. <em>Music Passion for an Art</em>.  New York: Rizzoli International Publications, Inc. 1991.</li>
	<li><strong>Duffin</strong>, Ross W. (ed.) <em>A Performer's Guide to Medieval Music</em>. Bloomington, Indiana: Indiana University Press.</li>
	<li><em>Il Solazzo</em>. Dir. Mary Springfels. Perf. The Newberry Consort. harmonia mundi. 1993.</li>
	<li><em>Medieval Christmas, A</em>. Dir. Joel Cohen. Perf. The Boston Camerata. Elektra Entertainment: 1992.</li>
</ul>

<p>(R.W.)</p>

<p class="sequence_links">
	<a href="power-speech.php" class="prev_link">&larr; The Power of Speech</a>
</p>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
