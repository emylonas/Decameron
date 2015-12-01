<?php
	$selected = "literature";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li><a href="index.php">Literature</a></li>
	<li>Hypertext, Hypermedia and the History of the Text</li>
</ul>
<h2>Hypertext, Hypermedia and the History of the Text</h2>
<p>The written text is the stable record of thought, and to achieve this stability the text had to be based on a physical medium: clay, papyrus or paper; tablet, scroll or book. But the text is more than just the shadow or trace of a thought already shaped; in literate culture, the textual structures that have evolved over the centuries <em>determine</em> thought almost as powerfully as the primal structure that shapes all expression, language. So long as the text was married to physical media, readers and writers took for granted three crucial attributes: that the text was <em>linear</em>, <em>bounded</em>, and <em>fixed </em>. Generations of scholars and authors internalized these qualities as the rules of thought, and they had pervasive social consequences. We can define <strong>Hypertext</strong> as the use of the computer to transcend the linear and fixed qualities of the linear text. Unlike the static form of the book, a hypertext can be composed, and read, non-sequentially; it is a variable structure, composed of blocks of text (or what Roland Barthes terms <strong>lexia</strong>) and the electronic <strong>links</strong> that join them. Although the conventional reading habits apply within each block, once one starts to <strong>follow links</strong> from one block to another new rules and new experience apply. Instead of facing a stable object - the book - enclosing an entire text and held between two hands, the hypertext reader sees only the image of a single block of text on the computer screen. Behind the image lies a <strong>variable textual structure</strong> that can be represented on the screen in <strong>different ways</strong>, according to the reader's choice of links to follow. Metaphors that can help us to visualize the structure &quot;behind&quot; the screen include a network, a tree diagram, a nest of Chinese boxes, or a <strong>web</strong>.</p>
<p>From: <em>Hypermedia and Literary Studies</em>, eds. P. Delany and G. P. Landow (Cambridge: MIT Press, 1994) p. 3. </p>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
