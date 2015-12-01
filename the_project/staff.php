<?php
	$selected = "the_project";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li><a href="index.php">The Project</a></li>	
	<li>Project Staff</li>	
</ul>
<h2>Project Staff</h2>
						<table cellpadding=0 width="500" cellspacing="0" >
									<tr>
										<td width="20%" valign="top">

											<p class="bodynoindent"><b>Coeditors<br>
												</b>Michael Papio<br>
												Massimo Riva</p>
										</td>
										<td width="10" valign="top"></td>
										<td width="70%" valign="top">
											<p class="bodynoindent"><br>

												(UMass Amherst)<br>
												(Brown)</p>
										</td>
									</tr>
									<tr height="10">
										<td width="60%" valign="top" height="10"></td>
										<td width="10" valign="top" height="10"></td>
										<td width="50%" valign="top" height="10"></td>

									</tr>
									
									<tr height="10">
										<td valign="top" width="60%" height="10"></td>
										<td valign="top" width="10" height="10"></td>
										<td valign="top" width="50%" height="10"></td>
									</tr>
									<tr>
										<td valign="top" width="60%">
											<p class="bodynoindent"><a name="AB"></a><b> Advisory Board<br>

												</b>Gian Mario Anselmi<br>
												Zygmunt Baranski<br>
												Teodolinda Barolini<br>
												Renzo Bragantini<br>

												Franco Fido<br>
												Victoria Kirkham<br>
												James Marchand<br>
												Giuseppe Mazzotta<br>
												Cormac &Oacute; Cuillean&aacute;in<br>

												Lino Pertile<br>
												Lucia Battaglia Ricci<br>
												Janet Smarr<br>
												Jonathan Usher<br>
												Paolo Valesio</p>
										</td>

										<td valign="top" width="10"></td>
										<td valign="top" width="50%">
											<p class="bodynoindent"><br>
												(Bologna)<br>
												(Cambridge)<br>
												(Columbia)<br>
												(Roma "La Sapienza")<br>
												(Emeritus, Harvard)<br>
												(Emerita, UPenn)<br>
												(UIUC)<br>
												(Yale)<br>
																								(Trinity, Dublin)<br>
												(Harvard)<br>
												(Pisa)<br>
												(UCSD)<br>
												(Emeritus, Edinburgh)<br>

												(Emeritus, Columbia)</p>
										</td>
									</tr>
									<tr height="10">
										<td valign="top" width="60%" height="10"></td>
										<td valign="top" width="10" height="10"></td>
										<td valign="top" width="50%" height="10"></td>
									</tr>

									<tr>
										<td valign="top" width="60%">
											<p class="bodynoindent"><a name="#EB"></a><b>Editorial Board</b><br>
												Cristina Abbona<br>
												Dario Del Puppo<br>
											Nicole Gercke<br>
												Evelyn Lincoln<br>
                                                Roberto Ludovico<br>
												Giorgio Melloni<br>
												Ronald Martinez<br>
												Anthony Oldcorn<br>
												Sergio Parussa<br>
												Giovanna Roz<br>

												
												Vika Zafrin</p>
										</td>
										<td valign="top" width="10"></td>
										<td valign="top" width="50%">
											<p class="bodynoindent"><br>
												(Brown)<br>
											(Trinity College)<br>
                                            (Brown)<br>
                                            (Brown)<br>																							
											(UMass Amherst)<br>
												(SUNY New Paltz)<br>
												(Brown)<br>

												(Emeritus, Brown)<br>
												(Wellesley)<br>
												(Brown)<br>
												
												(Boston University)</p>
										</td>

									</tr>
								</table>
								


<h3>The Project</h3>
<ul class="links">
	<li><a href="about.php">About the Project</a></li>
	<li><a href="credits.php">Who Created the <i>Decameron</i> Web?</a></li>
	<li>Advisory Board</li>
	<li><a href="initials.php">Contributors</a></li>
	<li>Editorial Board</li>
	<li><a href="syllabus.php">Electronic Syllabus</a></li>
	<li><a href="links.php">Related Links</a></li>
	<li>The most recent <a href="newsletter/spring2000.php">Newsletter</a> (Spring 2000)</li>
</ul>

<?php
	$last_modified =  filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>	
