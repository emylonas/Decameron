<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
		version="1.0">


<!-- strip leading and trailing whitespace from all elements ... -->
<xsl:strip-space elements="*"/>

<xsl:param name="langID">eng</xsl:param>

<xsl:output method="html" media-type="text/html"/>

<!-- ******************************************************* -->
<!-- ******************************************************* -->

<!-- root template: controls overall page layout -->

<xsl:template match="/">
       <tr>
	<td width="25%" valign="top"><!-- cell for TOC -->
	  <table border="0" cellspacing="4" cellpadding="0">
           <tr><td><h2>
            <a href="CorIndex.php">Corbaccio</a>
           </h2></td></tr>
           <!-- <xsl:apply-templates select="//head" mode="toc"/> -->
          </table>
        </td>
        <td align="left" valign="top"><!-- cell for main content -->
         <h1>Corbaccio</h1>
         <p><strong>an XML-encoded version of Corbaccio<br/>based on the edition by Giorgio Padoan, 1994</strong></p>
        </td>
       </tr>
</xsl:template>



<xsl:template match="head" mode="toc">
  <xsl:variable name="parentID" select="parent::*/@id"/>
    <xsl:choose>
    <!-- take unwanted heads out of the picture -->
      <xsl:when test="not(parent::div1)">
      </xsl:when>
      <xsl:otherwise>
       <tr height="20">
        <td>
         <p class="toctitle">
          <a class="arrow" href="CorShowText.php?myID={$parentID}&amp;lang={$langID}">
           <xsl:value-of select="."/>
          </a>
         </p>
        </td>
       </tr>
      </xsl:otherwise>
    </xsl:choose>
</xsl:template>

</xsl:stylesheet>
