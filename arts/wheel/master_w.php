<?php
	$selected = "arts";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Arts</a></li>
	<li>Cinematic Adaptations</li>
</ul>
<div class="image_right">
	<img src="../images/p-giotto.gif" alt="Pasolini as Giotto in his Decamerone" width="139" height="170"/>
	<span><em>&quot;I ask myself: Why create a work when it is so beautiful just to dream about it...&quot;</em></span>
</div>
<h2>Cinematic Adaptations</h2>
<ul class="links">
	<li><a href="http://www.youtube.com/watch?v=dFx6jyOZc0o" target="_blank">Pasolini's Dream</a> [YouTube clip]</li>
	<li><a href="pasolini.php" class="bodynoindent">Pasolini's View of the <em>Decameron</em></a></li>
	<li>Andreuccio da Perugia and Pasolini's Wheel of Fortune (forthcoming)
		<ul class="links">
			<li><a href="wheel.php" class="bodynoindent">The Wheel of Fortune</a>, Introduction</li>
		</ul>		
	</li>
</ul>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
