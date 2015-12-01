<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
		version="1.0">


<!-- strip leading and trailing whitespace from all elements ... -->
<xsl:strip-space elements="*"/>

<xsl:param name="targetString">foo</xsl:param>
<xsl:param name="langID">eng</xsl:param>

<xsl:output method="html" media-type="text/html"/>

<!-- ******************************************************* -->
<!-- ******************************************************* -->

<!-- root template: controls overall page layout --> 

<xsl:template match="/">
  <tr>
    <td align="left" valign="top"><!-- cell for main content -->
      <div>
         <xsl:for-each select="//text()[contains(.,$targetString)][not(ancestor::teiHeader) and not(ancestor::front)]">
          <xsl:variable name="beforeString" select="substring-before(.,$targetString)"/>
          <xsl:variable name="afterString" select="substring-after(.,$targetString)"/>
          <xsl:variable name="subAfterString" select="substring($afterString,1,30)"/>
          <xsl:variable name="chapID" select="ancestor::div1/@id"/>
          <xsl:variable name="chapHead" select="ancestor::div1/head"/>
          <xsl:variable name="sectionHead" select="ancestor::div2/head"/>
          <xsl:variable name="milestone" select="preceding::milestone[1]/@id"/>
          <p>
           [<a href="FiaShowText.php?myID={$chapID}&amp;lang={$langID}">
            <xsl:value-of select="$chapHead"/>
           </a>
           <xsl:text>  </xsl:text>
           <xsl:value-of select="$sectionHead"/>
           <xsl:text> - </xsl:text>
           <span class="greenText">
            <xsl:value-of select="substring($milestone, 7, 3)"/>
           </span>]
           <br/><xsl:value-of select="$beforeString"/>
           <span class="hilit">
            <xsl:value-of select="$targetString"/>
           </span>
           <xsl:value-of select="$subAfterString"/> [...]
          </p>
         </xsl:for-each>
      </div>
    </td>
  </tr>
</xsl:template>

<!-- ******************************************************* -->
<!-- ******************************************************* -->



<!-- COMMENTED OUT





 -->

</xsl:stylesheet>
