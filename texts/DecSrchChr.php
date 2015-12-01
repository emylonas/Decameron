<?php

$selected = "texts";
require "functions.php";

// This has to precede the inclusion of the header file.
$langID = getLangID('it');
require ('../header.php');



$params = array (
       'displayID'  => $_GET['display'],
       'targetPerson'  => strtolower(utf8_encode(stripslashes(urldecode($_GET['person'])))),
       'langID' => $langID
);

require ('DecNavigation.php');

// Allocate a new XSLT processor
//$xh = xslt_create();
//xslt_set_encoding ($xh, 'UTF-8');


// Process the document, returning the result into the $result variable
//$result = xslt_process($xh, 'itDecameron.xml', 'itDecSrchChr.xsl', NULL, array(), $params);
// $result = xslt_process($xh, 'itDecameron.xml', 'itDecSrchChr.xsl');
 $result =  runXSLT ($langID . 'Decameron.xml', 'DecSrchChr.xsl', $params);
if ($result) {
   echo $result;
} else {

   echo "Sorry, transformation could not be performed" . xslt_error($xh);
   echo " error code " . xslt_errno($xh);
}

//xslt_free($xh);

require ('../footer.php');

?>
