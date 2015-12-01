<?php
	$selected = "texts";
	$work= "index";
	$no_options = true;
	require '../../header.php';
?>
<ul id="breadcrumbs">
	<li><a href="../../">Main</a></li>	
	<li><a href="../">Texts</a></li>
	<li><a href="index.php">People and Places</a></li>
	<li>Mythological Figures</li>
</ul>
<h2>Mythological Figures</h2>



	  <table cellpadding="3" cellspacing="2" bgcolor="#FFFFFF" border="1" bordercolor="#a52a2a">
	    
	    <tr>
	      <th class="orange">Name</th>
	      <th class="orange"><b>Gender</th>
	      <th class="orange"><b>Origin</th>
	      <th class="orange"><b>Religion</th>
	      <th class="orange"><b>References</th>	      
	    </tr>

	    <tr>
	  <td>Amore</td>
	  <td class="male">male</td>
	  <td class="male">&nbsp;</td>
	  <td class="male">pagan</td>
	  <td class="ref"><a href="../search.php?q=amore&type=person&display=none&work=Dec&lang=it">5</a></td>
	</tr>

	    <tr>
	      <td>Esculapio</td>
	      <td class="male">male</td>
	      <td class="male">ancient Greece</td>
	      <td class="male">pagan</td>	     	 
	      <td  class="ref"><a href="../search.php?q=esculapio&type=person&display=none&work=Dec&lang=it">1</a></td>
	    </tr>	    

	    <tr>
	  <td>Venere</td> 
	  <td class="female">female</td>
	  <td class="female">&nbsp;</td>
	  <td class="female">pagan</td>
	   <td  class="ref"><a href="../search.php?q=venere&type=person&display=none&work=Dec&lang=it">1</a></td>
	    </tr>


	  
	  </table>


      <p/>
		      
<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../../footer.php';
?>
