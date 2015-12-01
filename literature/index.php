<?php
	$selected = "literature";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li>Literature</li>
</ul>
<div class="image_right">
	<img src="../images/literature/bookreader.jpg" width="200" height="389" />
</div>
<h2>Literature</h2>
<!-- End -->
<!-- Bottom links -->
<ul class="links">
	<li><a href="medieval_attitudes.php">Medieval Attitudes toward Literature</a></li>
	<li>Literary Relations
		<ul class="links">
			<li><a href="lit_relations/dante.php">Dante and Boccaccio</a></li>
			<li><a href="lit_relations/authorship.php">Authorship</a></li>
			<li><a href="lit_relations/proem_ovid.php">The Proem of the <em>Decameron</em>: Boccaccio between Ovid and Dante</a></li>                                    
			<li><a href="lit_relations/veglia.php">More about the Proem: &quot;Messer Decameron Galeotto&quot;</a><img src="New_ic.gif" width="33" height="20" alt="New" /></li>
			<li><a href="lit_relations/romantics/decameron.php">The <em>Decameron</em> and the English Romantics</a></li>
		</ul>
	</li>
	<li>Narratology and Structural Exegesis
		<ul class="links">
			<li><a href="narratology/numerology.php">Numerology in the Decameron</a></li>
			<li><a href="narratology/novella.php">The Novella before Boccaccio</a></li>	
			<li><a href="narratology/per_int_1.php">Performance and Interpretation</a></li>	
			<li><a href="narratology/per_int_2.php">Performance and Interpretation 2</a></li>		
			<li><a href="narratology/apologia.php">Nightingales and Filostrato's Apologia (V.4)</a></li>			
			<li><a href="narratology/rubrics.php">The Rubrics of the <i>Decameron</i></a></li>				
			<li><a href="narratology/filippa.php">Madonna Filippa (VI.7): Feminist Mouthpiece or Misogynistic Tool?</a></li>		
	  </ul>
</li>
	<li>Hypertext
		<ul class="links">
			<li><a href="hypertext.php">Hypertext, Hypermedia and the History of the Text</a></li>
			<li><a href="hypertext/prologue.php">Boccaccio Online: Teaching the Decameron as Hypertext at Brown University</a></li>
		</ul>
	</li>
	<li>Theoretical Perspectives
		<ul class="links">
			<li><a href="theory/todorov.php">Poststructuralism and a Figural Narrative Model</a></li>
			<li><a href="theory/lotman.php">Lotman and the Problem of Artistic Space</a></li>
			<li><a href="theory/weinrich.php">Weinrich and the Grammar of the Frame</a></li>
			<li><a href="theory/frame.php">The Narrative Frame</a></li>
			<li><a href="theory/framing.php">Framing the <i>Decameron</i></a></li>
			<li><a href="theory/seduction.php">Seduction by Silence in the Frame</a></li>
		</ul>
	</li>
	<li><a href="novella/novella1.php">La novella tra Testo e Ipertesto: il <em>Decameron</em>&nbsp;come modello</a></li><li> Data Processing and Visualization <img src="New_ic.gif" width="33" height="20" alt="New" />
    <ul>
      <li><a href="http://www.brown.edu/Departments/Italian_Studies/dweb/literature/visualization/Data_Processing_Pol_Milan.pdf">Data Processing by the Politecnico of Milan [PDF]</a></li>
    </ul>
    </li>
	
<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>