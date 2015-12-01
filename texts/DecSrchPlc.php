<?php

require "functions.php";

// This has to precede the inclusion of the header file.
$langID = getLangID('it');
require ('DecHeader.html');



$params = array (
       'displayID'  => $_GET['display'],
       'targetPlace'  => strtolower(utf8_encode(stripslashes(urldecode($_GET['place'])))),
       'langID' => $langID
);


// Allocate a new XSLT processor
//$xh = xslt_create();
//xslt_set_encoding ($xh, 'UTF-8');


// Process the document, returning the result into the $result variable
//$result = xslt_process($xh, 'itDecameron.xml', 'itDecSrchPlc.xsl', NULL, array(), $params);
// $result = xslt_process($xh, 'itDecameron.xml', 'itDecSrchPlc.xsl');
 $result =  runXSLT ($langID . 'Decameron.xml', 'DecSrchPlc.xsl', $params);
if ($result) {
   echo "<pre>\n";
   echo $result;
   echo "</pre>\n";
} else {

   echo "Sorry, transformation could not be performed" . xslt_error($xh);
   echo " error code " . xslt_errno($xh);
}

//($xh);

require ('footer.html');

?>
