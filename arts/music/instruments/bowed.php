<?php
	$selected = "arts";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Arts</a></li>
	<li><a href="../">Medieval Music</a></li>
	<li>Bowed strings</li>
</ul>
<h2>Bowed strings</h2>

<div class="row">
	<div class="image_left">
		<img src="../../images/vieille.jpg" width="150" height="140" />
	</div>
	
	<p>The commonest of the bowed string instruments was the <strong>vieille</strong> (also known as the <em>fiedel</em> (fiddle), or <em>viuola</em>). It resembled a modern violin, but was played either at the shoulder or held downwards on the lap. It had a flat back, unfretted fingerboard, and several strings ranging from two to five or more. The vieille was used in public entertainments and often played in groups.</p>
</div>

<div class="row">
	<div class="image_left">
		<img src="../../images/rebec.jpg" width="150" height="144" />
	</div>
	
	<p>The <strong>rebec</strong> was another bowed string instrument, much smaller than the vieille, with a rounded back and pear-shaped body. The rebec usually had two or three strings, one of which was sometimes a drone. It was played at both informal and formal gatherings.</p></td>
</div>

<div class="row">
	<h2>Mechanically operated strings</h2>
	
	<div class="image_left">
		<img src="../../images/symphonia.jpg" width="150" height="172" />
	</div>
	
	<p>The <strong>hurdy-gurdy</strong> was a combination of stringed instrument and keyboard. The strings were enclosed in a box, and mechanically sounded by a wheel which rubbed against them. In order to change the pitch, the length of the strings was altered by pressing the keys on the outside of the box. It was operated by one or two players, and is still in use today for traditional music.</p>
</div>

<div class="row">
	<?php
		include 'relatedPages.php';
	?>
</div>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../../footer.php';
?>
