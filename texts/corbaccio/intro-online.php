<?php
	$selected = "texts";
	$work= "corbaccio";
	$no_options = true;
	require '../../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>	<li><a href="../">Texts</a></li>
	<li>Corbaccio - Introduction</li> <li>Online Edition</li>
</ul>

				<div class="day" id="day00"><h2>The <i>Corbaccio</i>:  Introduction to the Online Edition</h2>				
<p class="bodystyle"><a href="../CorIndex.php">[go to electronic text]</a></p>

<p class="bodystyle">The text used on the site is based on the most recent critical edition prepared by Giorgio Padoan for the Mondadori collected works of Boccaccio, Tutte le opere di Giovanni Boccaccio, 12 vols, ed. by Vittore Branca (Milan: Mondadori, 1964-), V (ii) (1994), 413-614. The electronic edition has been proofread against the critical edition several times, and the paragraph numeration conforms to that used in the Padoan edition. However, it is possible that typographical errors may have crept in during the preparation of the text, and users who discover any mistakes are asked to contact the Decameron Web editors via the Guestbook.</p>

<h3>Encoding principles</h3>

<p class="bodystyle">The electronic text was first mounted early in 2002 as an SGML-encoded text, readable through the Dynaweb internet server provided by the <a href="http://www.stg.brown.edu">Scholarly Technology Group</a> at Brown University. Recently, the text encoding was converted to XML, and <i>Corbaccio</i> is now accessed through Apache's <a href="http://jakarta.apache.org/tomcat/">Tomcat</a> servlet container. The structural organization of the electronic text remains the same in the new encoding.</p>

<h3>Structure of the electronic text</h3>

<p class="bodystyle">In order to make the text more navigable, it was necessary to divide it into constituent parts. The <i>Corbaccio</i> does not possess the type of formal organizing structure that can be seen, for example, in the Decameron, and thus it was necessary to superimpose a narrative (and by extension, interpretative) scheme onto Boccaccio's text. We decided to base our divisions on those suggested by Robert Hollander in his book, <i>Boccaccio's Last Fiction: The Corbaccio</i> (Philadelphia: University of Pennsylvania Press, 1988), pp. 2-3, with some simplifications. The narrative frames employed for our electronic text thus reinforce the formal chiasmic structure of the text, as can be seen by our seven-part schema:<br><br>

Part I: Proemio: Incipit<br>
&nbsp;&nbsp;&nbsp;&nbsp;Part II: Cornice (Frame)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part III: Sogno: Inferno (Dream: Hell)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part IV: Sogno: Dialogo (Dream: Dialogue)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part V: Sogno: Purgatorio (Dream: Purgatory)<br>
&nbsp;&nbsp;&nbsp;&nbsp;Part VI: Cornice (Frame)<br>
Part VII: Conclusione: Explicit</p>

<p class="bodystyle">Unlike Hollander, we follow Padoan's paragraph numeration (shown in coloured square brackets at every paragraph), and we have combined as one section the various parts of the dialogue between the Narrator and Guide.</p>

<h3>Search functions</h3>

<p class="bodystyle">Currently, only a <a href="../../search/itCorSrchWrd.shtml">word search</a> is available for this electronic text. <!-- We are still developing the search functions after our recent transfer to XML, and thus the searches are limited at this time.  -->The search is currently case-sensitive, and thus we recommend that searches are undertaken twice, in order to find all possible occurrences of words. Proper names should be capitalized for searching.</p>

<p class="bodystyle">Successful search results are presented as a table of key words in context. The location of the word is shown as a link in green square brackets, showing the part of the text in which the word occurs and the paragraph number. Unfortunately, at this time it is only possible to go to the beginning of each of the seven sections, NOT to the actual keyword in the text. We recommend that you make a note of the paragraph number until we have fixed this glitch!</p>

<p class="bodystyle">(G.A.)</p>

<?php
	include 'relatedPages.php'
?>


</div>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
