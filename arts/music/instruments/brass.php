<?php
	$selected = "arts";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Arts</a></li>
	<li><a href="../">Medieval Music</a></li>
	<li>Wind instruments: Brass</li>
</ul>
<h2>Wind instruments: Brass</h2>

<div class="row">
	<div class="image_left">
		<img src="../../images/trumpet.gif" width="150" height="118" />
	</div>
	
	<p>The <strong>trumpet</strong> was (and is still) a very loud instrument, which was used for outdoor activities such as tournaments, fanfares, and in battle. Since the technique of bending brass had not yet been applied to instruments, the medieval trumpet was very long, sometimes even as much as six feet. The long middle-register trumpet was known as the <strong>trompe</strong> or <strong>buisine</strong>. The shorter, higher-pitched trumpets were called <strong>trompettes</strong>.</p>
</div>

<div class="row">
	<h2>Wind instruments: Horns</h2>
	<div class="image_left">
		<img src="../../images/horns.jpg" width="150" height="142" />
	</div>
	
	<p>Medieval <strong>horns</strong> were made literally out of horn, often cow horn. They were sometimes provided with fingerholes and could sound a range of a fourth or a fifth. The most precious horns, known as <strong>oliphants</strong> were made of ivory tusks (whence the name), but were prized as status symbols more than as musical instruments.</p>
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
