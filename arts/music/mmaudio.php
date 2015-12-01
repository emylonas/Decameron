<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li><a href="../music/">Medieval Music</a></li>
	<li>Medieval Music: Audio</li>
</ul>
<h2>Medieval Music: Audio</h2>
<p>Francesco Landini (1325?-1397) was perhaps the most prolific and celebrated composer of the second half of the Trecento. He is particulary renowned for his polyphonic <em>ballate</em>, over one hundred and forty of which are still extant. Here you can listen to three of these <em>ballate</em>. To hear each song, click on its title. You may need <a href="http://www.real.com/jukebox/index.html?src=downloadr">RealPlayer</a>, or <a href="http://www.apple.com/quicktime/download/">Quicktime.</a></p>

<table width="100%">
	<tr>
        <td width="20%"><a href="audio_files/ochi.mp3">Ochi dolenti mie</a><br>(954kB; .mp3 file)</td>
		<td><a href="mmochi.php">Lyrics (Italian and English)</a></td>
		<td>Performers: L. Frederick Jodry V (counter tenor), Jesse Antin (baritone)</td>
	</tr>
	<tr>
		<td><a href="audio_files/perseguir.mp3">Per seguir la speran&ccedil;a</a><br>(1.0MB; .mp3 file)</td>
		<td><a href="mmperseguir.php">Lyrics (Italian and English)</a></td>
		<td>Performers: L. Frederick Jodry V (counter tenor), Jesse Antin (tenor), Michael Kim (baritone)</td>
	</tr>
	<tr>
		<td><a href="audio_files/ecco.mp3">Echo la primavera</a><br>(559kB; .mp3 file)</td>
		<td><a href="mmecco.php">Lyrics (Italian and English)</a></td>
		<td>Performers: Kathryn Mueller (soprano), Kathleen Kew (mezzo)</td>
	</tr>
</table>

<p>&nbsp;</p>

<?php
	include 'relatedPages.php';
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
