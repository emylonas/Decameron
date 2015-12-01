<?php

// require "functions.php";
// 
// // This has to precede the inclusion of the header file.
// $langID = getLangID('it');
// require ('FiaHeader.html');
// $params = array(
// 		'foo' => 'bar',
// 		'langID' => $langID
// );

$selected = "texts";
$work = "Fia";
require "functions.php";

// This has to precede the inclusion of the header file.
 $langID = getLangID('it');

$params = array(
		'foo' => 'bar',
		'langID' => $langID
);

require ('../header.php');
require ('FiaNavigation.php');

echo '<div id="text">';

// Allocate a new XSLT processor
//$xh = xslt_create();
//xslt_set_encoding ($xh, 'UTF-8');

// Process the document, returning the result into the $result variable
//$result = xslt_process($xh, 'itFiammetta.xml', 'itFiaIndex.xsl');
 $result =  runXSLT ($langID . 'Fiammetta.xml', 'FiaIndex.xsl', $params);
if ($result) {
//    echo "<pre>\n";
//    echo $result;
//    echo "</pre>\n";
   echo $result;

} else {

   echo "Sorry, transformation could not be performed" . xslt_error($xh);
   echo " error code " . xslt_errno($xh);
}

//xslt_free($xh);
echo '</div>';
$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
include ('../footer.php');

?> 
