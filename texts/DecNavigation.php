<?php 
	if ($params[contentID] != "") {
		$current = $params[contentID];
	}
	else if ($params[displayID] != "") {
		$current = $params[displayID];	
	}
	$day;
	$nov;
		
	if ($current == "proem") {
		$day = "proem";
	}
	else if ($current == "epilogue") {
		$day = "epilogue";
	}
	else if (substr($current, 0, 3) == "day") {
		$day = substr($current, -2);
	}
	else if (substr($current, 0, 3) == "nov") {
		$day = substr($current, -4, 2);
		$nov = substr($current, -2);
	}
	else if (substr($current, 0, 1) == "d") {
		$day = substr($current, 1, 2);
		if (substr($current, -1) == "o") {
			$nov = "introduction";
		}
		else if (substr($current, -1) == "u") {
			$nov = "conclusion";
		}
	}
		
	$days_eng = array("Proem.", "First Day", "Second Day", "Third Day", "Fourth Day", "Fifth Day", "Sixth Day", "Seventh Day", "Eighth Day", "Ninth Day", "Tenth Day", "Author's Epilogue");
	$nov_eng = array("Introduction", "Novel I", "Novel II", "Novel III", "Novel IV", "Novel V", "Novel VI", "Novel VII", "Novel VIII", "Novel IX", "Novel X", "Conclusion");
	
	$days_it = array("Proemio", "Prima Giornata", "Seconda Giornata", "Terza Giornata", "Quarta Giornata", "Quinta Giornata", "Sesta Giornata", "Settima Giornata", "Ottava Giornata", "Nona Giornata", "Decima Giornata", "Conclusione dell'autore");
	$nov_it = array("Introduzione", "Novella Prima", "Novella Seconda", "Novella Terza", "Novella Quarta", "Novella Quinta", "Novella Sesta", "Novella Settima", "Novella Ottava", "Novella Nona", "Novella Decima", "Conclusione");

	if ($params[langID] == "it") {
		$days = $days_it;
		$novs = $nov_it;
	}
	else {
		$days = $days_eng;
		$novs = $nov_eng;
	}
?>

<div id="text_functions">
<form name="text_navigation">
	<fieldset>
	<select name="day">
		<option value="proem"<?php if ($day == "proem") echo ' selected="selected"' ?>><?php echo $days[0] ?></option>
		<option value="01"<?php if ($day == "01") echo ' selected="selected"' ?>><?php echo $days[1] ?></option>
		<option value="02"<?php if ($day == "02") echo ' selected="selected"' ?>><?php echo $days[2] ?></option>
		<option value="03"<?php if ($day == "03") echo ' selected="selected"' ?>><?php echo $days[3] ?></option>
		<option value="04"<?php if ($day == "04") echo ' selected="selected"' ?>><?php echo $days[4] ?></option>
		<option value="05"<?php if ($day == "05") echo ' selected="selected"' ?>><?php echo $days[5] ?></option>
		<option value="06"<?php if ($day == "06") echo ' selected="selected"' ?>><?php echo $days[6] ?></option>
		<option value="07"<?php if ($day == "07") echo ' selected="selected"' ?>><?php echo $days[7] ?></option>
		<option value="08"<?php if ($day == "08") echo ' selected="selected"' ?>><?php echo $days[8] ?></option>
		<option value="09"<?php if ($day == "09") echo ' selected="selected"' ?>><?php echo $days[9] ?></option>
		<option value="10"<?php if ($day == "10") echo ' selected="selected"' ?>><?php echo $days[10] ?></option>
		<option value="epilogue"<?php if ($day == "epilogue") echo ' selected="selected"' ?>><?php echo $days[11] ?></option>		
	</select>
	
	<select name="nov">
		<option value="blank"></option>
		<option value="intro"<?php if ($nov == "introduction") echo ' selected="selected"' ?>><?php echo $novs[0] ?></option>
		<option value="01"<?php if ($nov == "01") echo ' selected="selected"' ?>><?php echo $novs[1] ?></option>
		<option value="02"<?php if ($nov == "02") echo ' selected="selected"' ?>><?php echo $novs[2] ?></option>
		<option value="03"<?php if ($nov == "03") echo ' selected="selected"' ?>><?php echo $novs[3] ?></option>
		<option value="04"<?php if ($nov == "04") echo ' selected="selected"' ?>><?php echo $novs[4] ?></option>
		<option value="05"<?php if ($nov == "05") echo ' selected="selected"' ?>><?php echo $novs[5] ?></option>
		<option value="06"<?php if ($nov == "06") echo ' selected="selected"' ?>><?php echo $novs[6] ?></option>
		<option value="07"<?php if ($nov == "07") echo ' selected="selected"' ?>><?php echo $novs[7] ?></option>
		<option value="08"<?php if ($nov == "08") echo ' selected="selected"' ?>><?php echo $novs[8] ?></option>
		<option value="09"<?php if ($nov == "09") echo ' selected="selected"' ?>><?php echo $novs[9] ?></option>
		<option value="10"<?php if ($nov == "10") echo ' selected="selected"' ?>><?php echo $novs[10] ?></option>
		<option value="conclu"<?php if ($nov == "conclusion") echo ' selected="selected"' ?>><?php echo $novs[11] ?></option>
	</select>
	<input type="button" value="Go" onclick="DecGenerateURL('<?php echo $params[langID] ?>')" />
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
