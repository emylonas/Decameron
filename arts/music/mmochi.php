<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Ochi dolenti mie</li>
</ul>
<h2>Ochi dolenti mie</h2>
<table width="100%">
	<tr>
		<td><h3>Ochi dolenti mie</h3></td>
		<td><h3>My grieving eyes</h3></td>
	</tr>
	<tr>
		<td>
			<p>Ochi dolenti mie, che pur piangete,<br />Po che vedete<br />Che sol per honest&agrave; non vi contento.</p>
			<p>Nonn &agrave; diviso la mente 'l disio<br />Con voi che tante lagrime versate.</p>
			<p>Per che da voi si cela el viso pio,<br />Il qual privato m'a da llibertate.</p> 
			<p>Gran virt&ugrave; &egrave; refrenar volontate<br />Per honestate,<br />Ch&egrave; seguir donna &egrave; sofferir tormento.</p>
		</td>
		<td>
			<p>My grieving eyes, ever weeping,<br />since you see<br />that for modesty's sake I will not satisfy you.</p>
			<p>My mind desires exactly the same<br />as you, who weep so many tears.</p> 
			<p>Because that lovely face, which has<br />deprived me of my liberty,<br />is concealed from you.</p>
			<p>It is most valorous to curb one's desire<br />for the sake of modesty,<br />since to court a lady is to suffer torment.</p>
		</td>
	</tr>
</table>

<p>(Lyrics taken from the critical edition of Landini's works, <i>The works of Francesco Landini</i>, ed. by Leonard Ellinwood, with textual collation by William A. McLaughlin (Cambridge, MA: Medieval Academy of America, 1945), p.130.)</p>

<?php
	include 'relatedPages.php'
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
