<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
		version="1.0">


<!-- strip leading and trailing whitespace from all elements ... -->
<xsl:strip-space elements="*"/>

<xsl:param name="contentID">foo</xsl:param>
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
      <div>
        <xsl:apply-templates select="//div1[@id = $contentID]" mode="content"/>
      </div>
    </td>
  </tr>
</xsl:template>


<!-- ******************************************************* -->
<!-- ******************************************************* -->


<!-- template for table of contents -->



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

<!-- ******************************************************* -->
<!-- ******************************************************* -->


<!-- templates for mode=content -->

<xsl:template match="div1" mode="content">
 <xsl:variable name="nextID"><xsl:value-of select="following::div1[@id][position()= 1]/@id"/></xsl:variable>
 <xsl:apply-templates mode="content"/>
 <xsl:if test="@id!='C07'">
  <p>
   <a class="singleNav" href="FiaShowText.php?myID={$nextID}&amp;lang={$langID}">
    <img src="gfx/s_ar_right_navy.gif" alt="next" />
   </a>
  </p>
 </xsl:if>
</xsl:template>

<xsl:template match="argument" mode="content">
 <xsl:apply-templates mode="content"/>
</xsl:template>


<xsl:template match="head" mode="content">
 <h2>
  <xsl:apply-templates mode="content"/>
 </h2>
</xsl:template>


<xsl:template match="p" mode="content">
 <p>
  <xsl:apply-templates mode="content"/>
 </p>
</xsl:template>

<xsl:template match="q" mode="content">
 <xsl:text>"</xsl:text><xsl:apply-templates mode="content"/><xsl:text>"</xsl:text>
</xsl:template>

<xsl:template match="title" mode="content">
 <em>
  <xsl:apply-templates mode="content"/>
 </em>
</xsl:template>

<xsl:template match="milestone" mode="content">
 <xsl:variable name="selfID" select="@id"/>
  <span class="greenText">[<xsl:value-of select="substring($selfID, 7, 3)"/>]</span>
</xsl:template>



<!-- ******************************************************* -->
<!-- ******************************************************* -->



<!-- COMMENTED OUT





 -->

</xsl:stylesheet>
