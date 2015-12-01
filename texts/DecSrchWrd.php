<?php

require "functions.php";

// This has to precede the inclusion of the header file.
$langID = getLangID($_GET['lang']);
require ('DecHeader.html');

$params = array (
       'targetString'  => $_GET['word'],
       'targetVoice'  => $_GET['voice'],
       'langID' => $langID
);


// Allocate a new XSLT processor
//$xh = xslt_create();
//xslt_set_encoding ($xh, 'UTF-8');


// Process the document, returning the result into the $result variable
//$result = xslt_process($xh, 'itDecameron.xml', 'itDecSrchWrd.xsl', NULL, array(), $params);
// $result = xslt_process($xh, 'itDecameron.xml', 'itDecSrchWrd.xsl');
 $result =  runXSLT ($langID . 'Decameron.xml', 'DecSrchWrd.xsl', $params);
if ($result) {
   echo "<pre>\n";
   echo $result;
   echo "</pre>\n";
} else {

   echo "Sorry, transformation could not be performed" . xslt_error($xh);
   echo " error code " . xslt_errno($xh);
}

//xslt_free($xh);

require ('footer.html');

?>
