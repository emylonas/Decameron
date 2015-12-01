<?php
	$selected = "the_project";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>The Project</li>
</ul>
<h2>The Project</h2>
<!-- Bottom links -->
<ul class="links">
	<li><a href="afterlife_winners.php"><b><i>Boccaccio AfterLife Award</i></b> <em><strong>Winners</strong></em><strong></strong></a></li>
	
	<li><a href="afterlife.php"><b><i>Boccaccio AfterLife Award</i></b></a></li>
	<li><a href="about.php">About the Project</a></li>
	<li><a href="credits.php">Who Created the Decameron Web?</a></li>
	<li><a href="staff.php">Advisory Board</a></li>
	<li><a href="initials.php">Contributors</a></li>
	<li><a href="staff.php">Editorial Board</a></li>
	<li><a href="syllabus.php">Electronic Syllabus</a></li>
	<li><a href="links.php">Related Links</a></li>
</ul>
<h3>Newsletter Archive</h3>
<ul class="links">
	<li><a href="newsletter/spring2000.php">Spring 2000</a></li>
	<li><a href="newsletter/fall1997_it.php">Fall 1997 (Italian)</a></li>
	<li><a href="newsletter/fall1997.php">Fall 1997 (English)</a></li>
</ul>
<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
