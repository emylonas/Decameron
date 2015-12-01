<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Music in the Trecento: Monophonic and polyphonic composition</li>
</ul>
<h2>Music in the Trecento: Monophonic and polyphonic composition</h2>
<p>Up to around 1300, most musical compositions were monophonic, i.e., composed with a single melody line, for example for a single voice, unaccompanied or accompanied at the same pitch. The <em>ballate</em> in the <em>Decameron</em>, for example, are clearly monophonic, in that they are sung by a single character. As the <em>ballata</em> genre developed, other voices were added, and the polyphonic <em>ballata</em> enjoyed great popularity in the later Trecento.</p>

<p>Polyphony began to develop in sacred music during the ninth to thirteenth centuries. The main melodic line of the chant began to be embellished by the simultaneous sounding of additional harmonies, thus altering the sound of Western music forever.</p>

<?php
	include 'relatedPages.php'
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
