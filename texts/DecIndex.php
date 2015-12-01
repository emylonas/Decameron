<?php

$selected = "texts";
$work="Dec";
require "functions.php";

// This has to precede the inclusion of the header file.
$langID = getLangID($_GET['lang']);

$params = array(
		'foo' => 'bar',
		'langID' => $langID
);

require ('../header.php');
require ('DecNavigation.php');

echo '<div id="text">';

// Allocate a new XSLT processor
//$xh = xslt_create();
//xslt_set_encoding ($xh, 'UTF-8');

// Process the document, returning the result into the $result variable
//$result = xslt_process($xh, 'engDecameron.xml', 'engDecIndex.xsl');
 $result =  runXSLT ( $langID . 'Decameron.xml', 'DecIndex.xsl', $params);
if ($result) {
   echo $result;
} else {
   echo "Sorry, transformation could not be performed" . xslt_error($xh);
   echo " error code " . xslt_errno($xh);
}

//xslt_free($xh);

echo '</div>';

$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
include '../footer.php';
?>
