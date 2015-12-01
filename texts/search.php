<?php

$selected = "texts";

$no_options = false;
require "functions.php";

// This has to precede the inclusion of the header file.
$work = $_GET['work'];
#$langID = getLangID('it');
$lang= $_GET['lang'];
$langID = getLangID($lang);
require ('../header.php');


if ($_GET['type'] == "person") {
	$params = array (
		'displayID'  => $_GET['display'],
		'targetPerson'  => strtolower(utf8_encode(stripslashes(urldecode($_GET['q'])))),
		'langID' => $langID
	);
}
else if ($_GET['type'] == "place") {
	$params = array (
		'displayID'  => $_GET['display'],
		'targetPlace'  => strtolower(utf8_encode(stripslashes(urldecode($_GET['q'])))),
		'langID' => $langID
	);
}
else if ($_GET['type'] == "word") {
	$params = array (
		'targetString'  => utf8_encode(stripslashes(urldecode($_GET['q']))),
		'targetVoice'  => "anyone",
		'langID' => $langID
	);
}

if ($work == "Dec") {
require ('DecNavigation.php');

if ($_GET['type'] == "person")
 $result =  runXSLT ($langID . 'Decameron.xml', 'DecSrchChr.xsl', $params);
else if ($_GET['type'] == "place")
 $result =  runXSLT ($langID . 'Decameron.xml', 'DecSrchPlc.xsl', $params);
else if ($_GET['type'] == "word")
 $result =  runXSLT ($langID . 'Decameron.xml', 'DecSrchWrd.xsl', $params);
 
 }
 
 else if ($work == "Fia") {
 echo "Fiammetta";
  require ('FiaNavigation.php');
  $result =  runXSLT ($langID . 'Fiammetta.xml', 'FiaSrchWrd.xsl', $params);
 }
 
 else if ($work == Cor) {
  require ('CorNavigation.php');
   $result =  runXSLT ($langID . 'Corbaccio.xml', 'CorSrchWrd.xsl', $params);

 }


if ($result) {
   echo $result;
} else {

   echo "Sorry, transformation could not be performed" . xslt_error($xh);
   echo " error code " . xslt_errno($xh);
}

//xslt_free($xh);

require ('../footer.php');

?>
