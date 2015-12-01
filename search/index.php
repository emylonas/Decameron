<?php
	$selected = "search";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li>Main</li>
	<li>Advanced Search</li>
</ul>
<h2>Advanced Search</h2>
<p>Insert the term to be searched for in the box below. You may truncate your term with an asterisk to match words beginning with any sequence of letters. The Boolean terms &quot;and&quot;, &quot;or&quot; and &quot;not&quot; are also supported.</p>

<form method="get" action="http://www.google.com/u/brown">
	<input type=hidden name="hq" value="inurl:www.brown.edu/Departments/Italian_Studies/dweb/" />
		<center>
		<table border=0 cellspacing=0 cellpadding=0>
	      <tr>
				<th align=RIGHT>
					Search for this:
				</th>
				<td><input size=30 name=query value=""> <input type=submit name=submit value="Submit"></td>
			</tr>
			<tr>
				<th align=RIGHT>
					Without this:</p>
				</th>
					<td colspan=2 align="left"><input size=30 name=notq></td>
			</tr>
		</table>
		</center>
		<br />
      <table width=100% border=0 cellspacing=0 cellpadding=0>
			<tr>
				<td valign="top" width="33%">
					<h3>Search Help</h3>
					<ul class="links">
						<li><a href="http://www.brown.edu/webmaster/search/searchelp.html#qhelp">Basic searches</a></li>
						<li><a href="http://www.brown.edu/webmaster/search/searchelp.html#logic">Using logic operators</a></li>
						<li><a href="http://www.brown.edu/webmaster/search/searchelp.html#phrase">Phrase Matching</a></li>
						<li><a href="http://www.brown.edu/webmaster/search/searchelp.html#wildcard">Wild Card Searches</a></li>
						<li><a href="http://www.brown.edu/webmaster/search/searchelp.html#rex">Regular Expressions</a></li>
						<li><a href="http://www.brown.edu/webmaster/search/searchelp.html#npm">Quantity Searching</a></li>
						<li><a href="http://www.brown.edu/webmaster/search/searchelp.html">More Subjects...</a></li>
					</ul>
				</td>
				<td valign="TOP" width="33%">
					<h3>Proxomity</h3>
					<ul>
						<li><input type=radio name=prox value="line">Line</input></li>
						<li><input type=radio name=prox value="sentence">Sentence</input></li>
						<li><input type=radio name=prox value="paragraph">Paragraph</input></li>
						<li><input type=radio name=prox value="" checked>Page</input></li>
					</ul>					
		  
					<h3>Word Forms</h3>
					
					<ul>
						<li><input type=radio name=sufs value=0 checked>Exact match</input></li>
						<li><input type=radio name=sufs value=1>Plural &amp; possessives</input></li>
						<li><input type=radio name=sufs value=2>Any word forms</input></li>
					</ul>
				</td>
				<td valign="TOP" width="33%">
	    <table border=0 cellpadding=0 cellspacing=1>
	      <tr>
		<th nowrap align=center colspan=2>
																	<h3>Ranking Factors</h3>
		</th>
	      </tr>
	      <tr>
		<th nowrap align=left>
		  Rank Factor
																</th>
		<th nowrap>
		  Importance
		</th>
	      </tr>
	      <tr>
																<td nowrap>
		  Word ordering
		</td>
		<td nowrap><select name=rorder>
		      <option value="0">off</option>
		      <option value="250">low</option>
		      <option value="" selected>medium</option>
																			<option value="750">high</option>
		      <option value="1000">max </option>
		    </select></td>
	      </tr>
	      <tr>
		<td nowrap>
		  Word proximity
																</td>
		<td nowrap><select name=rprox>
		      <option value="0">off</option>
		      <option value="250">low</option>
		      <option value="" selected>medium</option>
		      <option value="750">high</option>
		      <option value="1000">max </option>
																		</select></td>
	      </tr>
	      <tr>
		<td nowrap>
		  Database Frequency
		</td>
		<td nowrap><select name=rdfreq>
		      <option value="0">off</option>
																			<option value="250">low</option>
		      <option value="" selected>medium</option>
		      <option value="750">high</option>
		      <option value="1000">max </option>
		    </select></td>
	      </tr>
	      <tr>
		<td nowrap>
		  Document Frequency
																</td>
		<td nowrap><select name=rwfreq>
		      <option value="0">off</option>
		      <option value="250">low</option>
		      <option value="" selected>medium</option>
		      <option value="750">high</option>
		      <option value="1000">max </option>
		    </select></td>
	      </tr>
	      <tr>
		<td nowrap>
		  Position in text
		</td>
		<td nowrap><select name=rlead>
																			<option value="0">off</option>
		      <option value="250">low</option>
		      <option value="" selected>medium</option>
		      <option value="750">high</option>
		      <option value="1000">max </option>
																		</select></td>
	      </tr>
	    </table>
	  </td>
	</tr>
      </table>
    </form>
      <p></p>
      <p>N.B. If you would like to search for terms, people and places in our XML-encoded version of the <em>Decameron</em>, use one of the text search options in the <a href="../texts/">encoded <em>Decameron</em></a>.</p>
<!-- End -->

<?php	include '../footer.php'; ?>