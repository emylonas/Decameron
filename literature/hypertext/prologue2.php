<?php
	$selected = "literature";
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>
	<li><a href="../">Literature</a></li>
	<li><a href="prologue.php">Boccaccio Online</a></li>
	<li>Prologue: The Late Age of Print</li>
</ul>
<h2>Prologue: The Late Age of Print</h2>
<p>It is plausible to say that print technology has shaped our notion of &quot;text&quot;: by binding and reproducing it in the physical form of a book, it has given the &quot;text&quot; both a status and a stable configuration (much more stable and easily accessible, for example, than that of old manuscripts). The act of reading and, perhaps to a lesser extent, the act of writing have been profoundly conditioned by this long-standing configuration. Now, in this &quot;late age of print&quot; as Jay Bolter calls it (150), in the midst of the transition that we are all witnessing from the age of print to the age of the &quot;electronic word,&quot; (Lanham), that status and that stability have started to crumble. We live at the dawn of an age whose primary notion of text is <em>virtual</em>&nbsp;rather than <em>actual</em>. The &quot;text&quot; becomes more and more the appendix of a technological process and the acts of reading and writing directly depend on a complex instrumental apparatus: the new paradigm implies an unprecedented interaction of textual practices and technology, within different communicative environments. Contemporary didactic practices of literary texts cannot ignore the new learning environment which virtually links the circumscribed space of the classroom to a world wide web of information</p>
<p>(M. R.) Jay Bolter, <em>Writing Space: The Computer, Hypertext and the History of Writing</em>&nbsp;(Hillsdale, N.J.: Lawrence Erlbaum and Ass., 1991); Richard A. Lanham, <em>The Electronic Word. Democracy, Technology and the Arts</em>&nbsp;(Chicago and London: University of Chicago Press, 1993).</p>

<?php
	include 'relatedPages.php';
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
