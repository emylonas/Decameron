<?php
$filename = '../text_search.php';
$relativePath = '../';
$CurrentFile =  basename($_SERVER['PHP_SELF']);

while (!file_exists($filename)){
	$filename = '../'.$filename;
	$relativePath = '../'.$relativePath;	
}
?>

		<div id="text_search">
			<h3>Text Search:</h3>
			<form method="get" action="<?php echo $relativePath?>texts/search.php">
			<fieldset>
				<input type="text" id="search" name="q" size="15" />	
				<fieldset>
<?php				
if ($work == "Dec" && $langID == "it") {
if ($_GET['type'] == "person") {
echo			'<input type="radio" name="type" checked="checked" value="person">Person</input>';
}else{
echo                    '<input type="radio" name="type" value="person">Person</input>';
}

if ($_GET['type'] == "place") {
echo                    '<input type="radio" name="type" checked="checked" value="place">Place</input>';
}else{
echo                    '<input type="radio" name="type" value="place">Place</input>';
}


}
				
if ($_GET['type'] != "place" && $_GET['type'] != "person") {
echo	'<input type="radio" name="type" checked="checked" value="word">Word</input>';
}else{
echo	'<input type="radio" name="type" value="word">Word</input>';
}
?>
				</fieldset>
			<input type="hidden" name="display" value="none">
			<input type="hidden" name="work" value="<?php echo $work?>">
			<input type="hidden" name="lang" value="<?php echo $langID?>">
			</fieldset>
				<button>Search</button>
			</form>
			<!-- <a href="#">Advanced Search</a> -->
			<br />
			<?php if (!$no_options) {
				echo '<h3>Text Options:</h3>';
				
				if ($langID == "eng") {
					echo '<a href="DecShowText.php?myID='.$params[contentID].'&lang=it">Go to Italian text</a>';
				}
				else if ($langID == "it") { 
				echo '<a href="DecShowText.php?myID='.$params[contentID].'&lang=eng">Go to English text</a>';}
				echo '<a href="#" id="toggle_labels"></a>'; 
				}
			?>
		</div>

