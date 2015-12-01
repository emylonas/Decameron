<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
		version="1.0">


<!-- strip leading and trailing whitespace from all elements ... -->
<xsl:strip-space elements="*"/>

<xsl:param name="targetString">foo</xsl:param>
<xsl:param name="targetVoice">bar</xsl:param>
<xsl:param name="langID">eng</xsl:param>

<xsl:output method="html" media-type="text/html"/>

<!-- ******************************************************* -->
<!-- ******************************************************* -->

<!-- root template: controls overall page layout --> 

<xsl:template match="/">
  <tr>
    <td align="left" valign="top"><!-- cell for main content -->
      <div>
       <xsl:choose>
        <xsl:when test="$targetVoice='anyone'">
         <xsl:for-each select="//text()[contains(.,$targetString)][not(ancestor::teiHeader)]">
          <xsl:variable name="beforeString" select="substring-before(.,$targetString)"/>
          <xsl:variable name="afterString" select="substring-after(.,$targetString)"/>
          <xsl:variable name="subAfterString" select="substring($afterString,1,30)"/>
          <xsl:variable name="nearID" select="ancestor::*[@id][1]/@id"/>
          <xsl:variable name="farID" select="ancestor::*[@id][2]/@id"/>
          <xsl:variable name="nearHead" select="ancestor::*[@id][1]/head"/>
          <xsl:variable name="farHead" select="ancestor::*[@id][2]/head"/>
          <xsl:variable name="milestone" select="preceding::milestone[1]/@id"/>
          <p>[<a href="DecShowText.php?myID={$nearID}&amp;expand={$farID}&amp;lang={$langID}"><xsl:value-of select="$farHead"/>, <xsl:value-of select="$nearHead"/></a> - <xsl:value-of select="substring($milestone, 7, 3)"/>]<br/> <xsl:value-of select="$beforeString"/><span class="hilit"><xsl:value-of select="$targetString"/></span><xsl:value-of select="$subAfterString"/> [...]
          </p>
         </xsl:for-each>
        </xsl:when>
        <xsl:otherwise>
         <xsl:for-each select="//text()[contains(.,$targetString)][not(ancestor::teiHeader)][ancestor::*/@who=$targetVoice]">
          <xsl:variable name="beforeString" select="substring-before(.,$targetString)"/>
          <xsl:variable name="afterString" select="substring-after(.,$targetString)"/>
          <xsl:variable name="subAfterString" select="substring($afterString,1,30)"/>
          <xsl:variable name="nearID" select="ancestor::*[@id][1]/@id"/>
          <xsl:variable name="farID" select="ancestor::*[@id][2]/@id"/>
          <xsl:variable name="nearHead" select="ancestor::*[@id][1]/head"/>
          <xsl:variable name="farHead" select="ancestor::*[@id][2]/head"/>
          <p>[<a href="DecShowText.php?myID={$nearID}&amp;expand={$farID}&amp;lang={$langID}"><xsl:value-of select="$farHead"/>, <xsl:value-of select="$nearHead"/></a>]<br/><xsl:value-of select="$beforeString"/><span class="hilit"><xsl:value-of select="$targetString"/></span><xsl:value-of select="$subAfterString"/> [...]
          </p>
         </xsl:for-each>
        </xsl:otherwise>
       </xsl:choose>
      </div>
    </td>
  </tr>
</xsl:template>

<!-- ******************************************************* -->
<!-- ******************************************************* -->



<!-- COMMENTED OUT





 -->

</xsl:stylesheet>
