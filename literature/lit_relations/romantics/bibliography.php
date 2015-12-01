<?php
	$selected = "literature";
	require '../../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../../">Main</a></li>
	<li><a href="../../">Literature</a></li>
	<li><a href="../../">Literary Relations</a></li>
	<li><a href="decameron.php">The <em>Decameron</em> and the English Romantics</a></li>
	<li>Bibliography</li>
</ul>
<h2>Bibliography</h2>
<p><strong>Abrams</strong> et al., eds. <em>The Norton Anthology of English Literature</em>. New York: W. W. Norton and Company, 1993.</p>
<p><strong>Boccaccio</strong>, Giovanni. <em>The Decameron</em>. G. H. McWilliam, trans. London: Penguin Books, 1972.</p>
<p><strong>Christensen</strong>, Jerome. &quot;The Associationist Precedent for Coleridge's Late Poems.&quot; <em>Philosophical Approaches to Literature: New Essays on Nineteenth and Twentieth Century Texts</em>, William E. Cain, ed. Lewisburg: Bucknell University Press, 1984.</p>
<p><strong>Coleridge</strong>, Samuel Taylor. <em>Coleridge's Poems</em>, vol. 1. Oxford : Clarendon Press, 1962.</p>
<p><strong>---</strong>. <em>The Complete Poetical Works of Samuel Taylor Coleridge</em>. E. H. Coleridge, ed. Oxford: Clarendon, 1912.</p>
<p><strong>Fairchild</strong>, Hoxie Neale. <em>The Romantic Quest</em>. New York: Columbia University Press, 1931.</p>
<p><strong>Harding</strong>, Anthony John. <em>Coleridge and the Idea of Love</em>. Cambridge: Cambridge University Press, 1974.</p>
<p><strong>Luther</strong>, Susan. &quot;The Lost Garden of Coleridge.&quot; <em>The Wordsworth Circle</em> 22:1 (1991): 24-30.</p>
<p><strong>Paley</strong>, Morton D. <em>Coleridge's Later Poetry</em>. Oxford: Clarendon Press, 1996.</p>
<p><strong>Procter</strong>, B. W. <em>The Flood of Thessaly</em>. New York: Garland, 1978.</p>
<p><strong>Stillinger</strong>, Jack. &quot;Keats and Romance.&quot; <em>Studies in English Literature, 1500-1900</em> 8 (1968): 593-605.</p>
<p><strong>---</strong>, ed. <em>John Keats, Collected Poems</em>. Cambridge: Harvard University Press, 1982.</p>
<p><strong>Wright</strong>, Herbert G. <em>Boccaccio in England, from Chaucer to Tennyson</em>. Fair Lawn, NJ: Essential Books, 1957. </p>

<?php
	include 'relatedPages.php';
?>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../../footer.php';
?>
