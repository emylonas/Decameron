<?php

/* --------------------------------------------------------------------
* Function: runXSLT
*
*   Use Sablotron XSLT to grab some kind of content from the XML file(s)
*
* Input Parameters: $xml, File containing XML input
*                                $xsl, appropriate stylesheet
*                                $params, stylesheet params to be passed in; an array
*
* Function return value: Most likely, CDATA content of an element
* ----------------------------------------------------------------- */

function runXSLT ($xml, $xsl, $params){
	$loadfile = new DOMDocument();
	$processor = new XSLTProcessor();

	$loadfile->load($xsl);
	$processor->importStyleSheet($loadfile);
	
	foreach($params as $key=>$value){
		$processor->setParameter('', $key, $value);
	}
	
	$loadfile->load($xml);
	return $processor->transformToXML($loadfile);
}

//Deprecated, used in PHP4.
/*function runXSLT ($xml, $xsl, $params) {
	// Allocate a new XSLT processor
	$xh = xslt_create();
	xslt_set_encoding ($xh, 'UTF-8');

	$trimmedXmlFN = rtrim($xml);
	$finalXMLFileName = ltrim($trimmedXmlFN);

	$len = strlen($trimmedXmlFN);

    //	print "<p>debug, $trimmedXmlFN versus $xml plus $len</p>";

	// Process the document, putting the result into the $result variable
	//$filesize = filesize($xml);
	//if ( file_exists($xml) ) {
		$result = xslt_process($xh, $finalXMLFileName, $xsl, NULL, array(), $params); 
	//}
	xslt_free($xh);
	if ($result) {
		return $result;
	} else {
		//return "Transformation could not be performed" . xslt_error($xh)
		//. " error code " . xslt_errno($xh);
	}
}*/

/* --------------------------------------------------------------------
* Function: printHeader
*
*   prints HTML decl, HEAD, and part of BODY common to all files
*
* Input Parameters: $humanTitle, per-file html/head/title content
*                             $css, file-specific filename for css for html/head/link
*
* Function return value: None
* ----------------------------------------------------------------- */
function printHeader($humanTitle, $css, $lang) {

header("Last-Modified: " . date("D, d M Y H:i:s", getlastmod()));

print <<<TOP_STUFF
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
TOP_STUFF;

print "
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"$lang\">
    <head>
	<title>$humanTitle</title>
	<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
	<meta name=\"generator\" content=\"BBEdit 8.2\" />
	<meta name=\"author\" content=\"Scholarly Technology Group\" />
	<meta name=\"description\" content=\"Luise K. Gottsched: Her Life and Work\" />
	<meta name=\"keywords\" content=\"Luise Gottsched, women writers, textual culture, Germany, eighteenth century\" />
	<link href=\"/projects/Gottsched/includes/$css\" type=\"text/css\" rel=\"stylesheet\" />
";

print <<<MORE_STUFF1
</head>
  <body class="framework">
    <div class="mainBox"><table width="100%" height="100%" border="1" summary="table used for layout only">
      <tr><td valign="top">
        <table class="navBox" height="10" width="100%" cellspacing="0" cellpadding="1" border="0" summary="table used for layout only">
          <tr>
            <td valign="bottom"><p class="header">
              <span class="head">Luise K. Gottsched: </span>
              <span class="description">A biography</span>
            </p></td>
            <td valign="bottom" colspan="2" align="right">
              <p class="nav">
MORE_STUFF1;

if (preg_match("/Home/", $humanTitle)) {
	print "<span class=\"selectedNav\"><a class=\"navhead\" href=\"/projects/Gottsched/index.php\">Home</a></span> ";
} else {
	print "<a class=\"nav\" href=\"/projects/Gottsched/index.php\">Home</a> ";
}

print "| <a class=\"nav\" href=\"/projects/Gottsched/topicsSimple.php?selected=main&amp;div2=&amp;div3=&amp;div4=&amp;div5=&amp;div6=\">Topics</a> ";
                             
if (preg_match("/Primary Texts/", $humanTitle)) {
	print "| <span class=\"selectedNav\"><a class=\"navhead\" href=\"/projects/Gottsched/primaryTexts.php\">Primary Texts</a></span> ";
} else {
	print "| <a class=\"nav\" href=\"/projects/Gottsched/primaryTexts.php\">Primary Texts</a> ";
}

if (preg_match("/About/", $humanTitle)) {
	print "| <span class=\"selectedNav\"><a class=\"navhead\" href=\"/projects/Gottsched/about.php\">About</a></span> ";
} else {
	print "| <a class=\"nav\" href=\"/projects/Gottsched/about.php\">About</a> ";
}

print <<<MORE_STUFF
             </p>
            </td>
          </tr><tr>
            <td valign="bottom" type="div2" class="timelineOne" width="33%">
              <p class="timeNav">
                [<a class="timeNavA" href="chronSimple.php?time=childhood&amp;subtime=childhoodIntro">
                  <span style="border: 0.5px solid #7D3602;">1713-1729: Childhood/Adolescence</span>
                </a>] 
              </p>
            </td>
            <td valign="bottom" type="div2" class="timelineThree" width="33%" align="center">
              <p class="timeNav">
                [<a class="timeNavA" href="chronSimple.php?time=courtship&amp;subtime=courtshipIntro">
                  <span style="border: 0.5px solid #7D3602;">1729-1734: Courtship</span>
                </a>] 
              </p>
            </td>
            <td valign="bottom" type="div2" class="timelineFive" width="33%" align="right">
              <p class="timeNav">
                [<a class="timeNavA" href="chronSimple.php?time=engagement&amp;subtime=engagementIntro">
                  <span style="border: 0.5px solid #7D3602;">1734-1735: Engagement</span>
                </a>] 
              </p>
            </td>
          </tr>
        </table>
        <p></p>
        <table style="background: #FFEBCD;" width="100%" cellspacing="15" summary="table used for layout only" border="0">
          <tr>
MORE_STUFF;
}

/* --------------------------------------------------------------------
* Function: getLangID
*
*   Gets the language ID which can be appended to the XML filenames.
*
* Input Parameters: $lang, The language paramater passed in the request.
*
* Function return value: The language ID which can be appended
* directly to the XML filenames. It should be in lower cases. If the
* language parameter is invalid, default to English.
* ----------------------------------------------------------------- */

function getLangID($lang) {
  switch(strtolower($lang)) {
  case "eng":
    return "eng";
  case "it":
    return "it";
  default:
    return "eng";
  }
}

?>
