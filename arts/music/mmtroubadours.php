<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Secular music: Troubadours</li>
</ul>
<h2>Secular music: Troubadours</h2>
<p>The development of various regional vernaculars in the period 1000-1300 led to another revolutionary achievement in European culture, the use of vernacular languages for literary composition. Secular song can be said to have begun in what is now southern France, with the vernacular compositions of the <em>troubadours</em> in the twelfth and thirteenth century. The name comes from the Proven&ccedil;al verb <em>trobar</em>, meaning 'to find' or 'to compose in verse'. With the advent of the troubadours, vernacular music began to flourish alongside the music of the Latin tradition, and the two traditions influenced and informed each other until the vernacular lyric eventually eclipsed Latin. The troubadours may have performed their songs themselves, but it seems more likely that the songs were composed by them, and then circulated by <em>joglars</em> (minstrels) in the courts of their patrons. Troubadour poetry is mostly known for its most famous and influential theme, that of <em>amour courtois</em> (courtly love), but their poetry also encompassed satirical and political themes, or literary debates. A considerable number of the songs of the troubadours are still extant, due to their influence on later literary traditions.</p>

<?php
	include 'relatedPages.php'
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
