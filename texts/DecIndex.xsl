<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
		version="1.0">

<!-- strip leading and trailing whitespace from all elements ... -->
<xsl:strip-space elements="*"/>

<xsl:param name="expandID">empty</xsl:param>
<xsl:param name="langID">eng</xsl:param>

<xsl:output method="html" media-type="text/html"/>

<!-- ******************************************************* -->
<!-- ******************************************************* -->

<!-- root template: controls overall page layout -->

<xsl:template match="/">
	  
           <h2>
           
           <xsl:choose>
           <xsl:when test="$langID = 'eng'">
            <a href="DecIndex.php">The Decameron</a>
             </xsl:when>
    <xsl:otherwise>
    <a href="DecIndex.php?lang=it">Il Decamerone</a>
    </xsl:otherwise>
    </xsl:choose>
    
           </h2>
           
         
  <xsl:choose>
    <xsl:when test="$langID = 'eng'">
         <p>an XML-encoded English translation of the Italian text based on THE DECAMERON OF GIOVANNI BOCCACCIO faithfully translated by J.M. Rigg, London, 1921 (first printed 1903)</p>
		<p>Use the drop-down menu above to navigate through the text</p>
    </xsl:when>
    <xsl:otherwise>
         <p>An XML-encoded version of the Italian text based on V. Branca, 1992</p>
         <p>Use the drop-down menu above to navigate through the text</p>
    </xsl:otherwise>
  </xsl:choose>
</xsl:template>



</xsl:stylesheet>
