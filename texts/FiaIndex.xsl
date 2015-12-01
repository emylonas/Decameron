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
       <tr>
	<td width="25%" valign="top"><!-- cell for TOC -->
	  <table border="0" cellspacing="4" cellpadding="0">
           <tr><td><h2>
            <a href="FiaIndex.php">Fiammetta</a>
           </h2></td></tr>
           <!-- <xsl:apply-templates select="//head" mode="toc"/> -->
          </table>
        </td>
        <td align="left" valign="top"><!-- cell for main content -->
         <h1>Elegia di Madonna Fiammetta</h1>
         <p><strong>an XML-encoded version<br/>based on the edition by Carlo Delcorno, Milan, 1994</strong></p>
        </td>
       </tr>
</xsl:template>



<xsl:template match="head" mode="toc">
 <xsl:choose>
 <!-- take unwanted heads out of the picture -->
   <xsl:when test="parent::div1[@type='chapter']">
    <xsl:variable name="parentID" select="parent::div1/@id"/>
      <tr height="20">
       <td>
        <p class="toctitle">
         <a class="arrow" href="FiaShowText.php?myID={$parentID}&amp;lang={$langID}">
          <xsl:value-of select="."/>
         </a>
        </p>
       </td>
      </tr>
    </xsl:when>
    <xsl:otherwise>
    </xsl:otherwise>
 </xsl:choose>
</xsl:template>

</xsl:stylesheet>
