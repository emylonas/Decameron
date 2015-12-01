<?php

$selected = "texts";
$work = "Cor";
require "functions.php";

// This has to precede the inclusion of the header file.
$langID = getLangID('it');

// require ('CorHeader.html');

$params = array (
       'contentID' => $_GET['myID'],
       'expandID'  => $_GET['expand'],
       'highlight' => $_GET['highlight'],
       'langID' => $langID
);

require ('../header.php');
require ('CorNavigation.php');

echo '<div id="text">';

// Allocate a new XSLT processor
//$xh = xslt_create();
//xslt_set_encoding ($xh, 'UTF-8');


// Process the document, returning the result into the $result variable
//$result = xslt_process($xh, 'itCorbaccio.xml', 'itCorShowText.xsl', NULL, array(), $params);
// $result = xslt_process($xh, 'itCorbaccio.xml', 'itCorShowText.xsl');
 $result =  runXSLT ($langID . 'Corbaccio.xml', 'CorShowText.xsl', $params);
if ($result) {
  // echo "<pre>\n";
   echo $result;
  // echo "</pre>\n";
} else {

   echo "Sorry, transformation could not be performed" . xslt_error($xh);
   echo " error code " . xslt_errno($xh);
}

//xslt_free($xh);

echo '</div>';

$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);

require ('../footer.php');

?>
