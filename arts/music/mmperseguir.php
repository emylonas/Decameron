<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Per seguir la speran&ccedil;a</li>
</ul>
<h2>Per seguir la speran&ccedil;a</h2>
<table width="100%">
	<tr>
		<td><h3>Per seguir la speran&ccedil;a</h3></td>
		<td><h3>To pursue the hope</h3></td>
	</tr>
	<tr>
		<td>
			<p>Per seguir la speran&ccedil;a che m'ancide,<br />Donna, vo cercand'io<br />Di celato tener el mie disio.</p>
			<p>N&egrave; vogli'a tte, cagion di tanta pena,<br />Questo greve tormento discovire.</p>
			<p>Pero che lla ragion pur mi rafrena,<br />Onde disposto son cos&igrave; morire.</p>
			<p>Ma ben ti pregho, amor, de! non soffrire,<br />Ch'io pera in tanto oblio,<br />Falle palese tu el voler mio.</p>
		</td>
		<td>
			<p>To pursue the hope which kills me,<br />Lady, I seek<br />to keep my desire concealed.</p>
			<p>Neither do I want to reveal my great<br />torment to you, the cause of so much pain</p>
			<p>For reason still holds me back,<br />and so I am ready to die.</p>
			<p>But I beg you, Love, not to let me perish<br />in such oblivion:<br />That you yourself might reveal to her my desire.</p>
		</td>
	</tr>
</table>

<p>(Lyrics taken from the critical edition of Landini's works, <em>The works of Francesco Landini</em>, ed. by Leonard Ellinwood, with textual collation by William A. McLaughlin (Cambridge, MA: Medieval Academy of America, 1945), p.271-72.)</p>

<?php
	include 'relatedPages.php'
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
