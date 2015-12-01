<?php 
	if ($params[contentID] != "") {
		$current = $params[contentID];
	}
	else if ($params[displayID] != "") {
		$current = $params[displayID];	
	}
	$chapter;
		
	 if (substr($current, 0, 1) == "C") {
		$chapter = substr($current, 1,2);
	}
		
$chapters_it = array("Proemio-Incipit", "Cornice", "Sogno (Inferno)", "Sogno (Dialogo)", "Sogno (Purgatorio)", "Cornice", "Conclusione-Explicit");

	if ($params[langID] == "it") {
		$chapters = $chapters_it;
	}
	else {
		$chapters = $chapters_eng;
	}
?>

<div id="text_functions">
<form name="text_navigation">
	<fieldset>
	<select name="chapter">
		<option value="01"<?php if ($chapter == "01") echo ' selected="selected"' ?>><?php echo $chapters[0] ?></option>
		<option value="02"<?php if ($chapter == "02") echo ' selected="selected"' ?>><?php echo $chapters[1] ?></option>
		<option value="03"<?php if ($chapter == "03") echo ' selected="selected"' ?>><?php echo $chapters[2] ?></option>
		<option value="04"<?php if ($chapter == "04") echo ' selected="selected"' ?>><?php echo $chapters[3] ?></option>
		<option value="05"<?php if ($chapter == "05") echo ' selected="selected"' ?>><?php echo $chapters[4] ?></option>
		<option value="06"<?php if ($chapter == "06") echo ' selected="selected"' ?>><?php echo $chapters[5] ?></option>
		<option value="07"<?php if ($chapter == "07") echo ' selected="selected"' ?>><?php echo $chapters[6] ?></option>
	</select>
		<input type="button" value="Go" onclick="CorGenerateURL('<?php echo $params[langID] ?>')" >
	
	</fieldset>
</form>
</div>
<ul id="breadcrumbs">
	<li>Main</li>
	<?php if ($params[langID] == "it") {
		echo '<li>Texts (Italian)</li>';
	}
	else {
		echo '<li>Texts (English)</li>';
	} ?>	
</ul>
