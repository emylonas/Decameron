<?php
$work = "Fia";
require "functions.php";

// This has to precede the inclusion of the header file.
$langID = getLangID('it');
require ('FiaHeader.html');



$params = array (
		 'targetString'  => $_GET['word'],
		 'langID' => $langID
);


// Allocate a new XSLT processor
//$xh = xslt_create();
//xslt_set_encoding ($xh, 'UTF-8');


// Process the document, returning the result into the $result variable
//$result = xslt_process($xh, 'itFiammetta.xml', 'itFiaSrchWrd.xsl', NULL, array(), $params);
// $result = xslt_process($xh, 'itFiammetta.xml', 'itFiaSrchWrd.xsl');
 $result =  runXSLT ($langID . 'Fiammetta.xml', 'FiaSrchWrd.xsl', $params);
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
