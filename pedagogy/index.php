<?php
	$selected = "pedagogy";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Pedagogy</li>
</ul>
<div class="image_right">
	<img src="images/sap.jpg" width="200" height="229" />
</div>
<h2>Pedagogy</h2>
<h3 class="break">Activities for Teachers &amp; Students</h3>
<ul class="links">
	<li><a href="activities-class.php">Class Activities</a></li>
	<li><a href="activities-brigata.php">Activities Related To the Brigata</a></li>
	<li><a href="activities-translation.php">Translation Activities</a></li>
	<li><a href="women-mod.php">Women in the <em>Decameron</em> Module</a></li>
</ul>

<h3 class="break">Students' Corner</h3>
<ul class="links">
	<li><a href="../the_project/syllabus.php">Spring 2015 Syllabus</a></li>
	<li><a href="http://decameronweb.wordpress.com/" target="_blank">Decameronweb Blog</a></li>
	<li><a href="twitter/activ-2015.php">Spring 2015 Twitter pod</a></li>
	<li><a href="guida-lett.php">Guida linguistica per leggere il <em>Decameron</em></a></li>
	<li><a href="classroom.php">Hints for a Great Classroom Presentation</a></li>
	<li><a href="termpaper-content.php">Writing a Winning Term Paper: Content</a></li>
	<li><a href="termpaper-style.php">Writing a Winning Term Paper: Style and Format</a></li>
	<li><a href="sample-essay.php">Sample Essay and Commentary</a></li>
	<li><a href="article-review.php">Reviewing a Critical Article</a></li>
	<li><a href="research-tips.php">Bibliographic and Research Tips</a></li>
	<li><a href="http://vlib.iue.it/hist-italy/medieval.html">Italian Medieval History Index</a> (off site link)</li>
</ul>
<h3 class="break">Useful Resources for Teachers</h3>

<!-- Link removed as Guestbook is no longer part of Decameron Web
<ul class="links">
	<li><a href="dsp-eval.php">Detailed Search Page Evaluation Form</a></li>
</ul>
<p>(the following are presented here courtesy of <a href="http://www.brown.edu/Administration/Sheridan_Center/">The Sheridan Center</a>)</p>


-->

<p>The following are presented here courtesy of the <a href="http://www.brown.edu/Administration/Sheridan_Center/">The Sheridan Center</a> at Brown University.</p>
<ul class="links">
<li><a href="http://www.brown.edu/Administration/Sheridan_Center/teaching/">Sheridan Center Teaching Resources</a></li>
<li><a href="http://www.brown.edu/Administration/Sheridan_Center/publications/#handbooks">Sheridan Center Teaching Handbooks</a></li>
	<!-- 
<li><a href="computer-class.php">Teaching with Computers in the Classroom</a></li>
	<li><a href="consumerism.php">Thinking About Technology</a></li>
	<li><a href="faculty-use.php">Faculty Use of An Instructional Management System</a></li>
	<li><a href="particip-assessm.php">Class Participation Assessment Guidelines</a></li>
	<li><a href="web-resources.php">Web Resources for Effective Teaching and Learning</a></li>
	<li><a href="using-tech.php">Using Technology to Bring Research into the Classroom</a></li>
	<li><a href="class-pres-skills.php">Teaching and Persuasive Communication: Class Presentation Skills</a></li>
	<li><a href="variation.php">Teaching to Variation in Learning</a></li>
	<li><a href="syllabus.php">Constructing a Syllabus</a></li>
 -->
</ul>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
