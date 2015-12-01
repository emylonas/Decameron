<?php
	$selected = "arts";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Arts</a></li>
	<li><a href="../">Medieval Music</a></li>
	<li>Keyboard instruments</li>
</ul>
<h2>Keyboard instruments</h2>

<div class="image_left">
	<img src="../../images/portorg.jpg" width="195" height="183" />
</div>

<p>The main medieval keyboard instrument was the <strong>organ</strong>, which was made in many different sizes for different purposes. The biggest was the <strong>great organ</strong>, which was built in churches: this bellows for this huge instrument were operated by manpower (from two to seven people were needed!). The <strong>positif</strong> (<strong>positive</strong>) <strong>organ</strong> was used in a chamber setting: it only required two operaters, one to pump the bellows and one to play the keys. Its name is derived from the fact that it could be placed ('positioned') on a piece of furniture, unlike the great organ. The smallest of the organs was the <strong>portatif</strong> (<strong>portative</strong>) <strong>organ</strong>, which could be carried and played by one person. The musician used one hand to operate the bellows while the other hand played on the keyboard.</p>

<div class="row">
	<?
		include 'relatedPages.php';
	?>
</div>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../../footer.php';
?>
