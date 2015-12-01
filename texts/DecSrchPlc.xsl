<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
		version="1.0">

<!-- strip leading and trailing whitespace from all elements ... -->
<xsl:strip-space elements="*"/>

<xsl:param name="displayID">empty</xsl:param>
<xsl:param name="targetPlace">foo</xsl:param>
<xsl:param name="langID">eng</xsl:param>
<xsl:variable name="placeRefs" select="descendant::place[contains(translate(., 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz'), $targetPlace) or contains(translate(descendant::orig/@reg, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz'), $targetPlace)]/@id"/>

<xsl:output method="html" media-type="text/html"/>

<!-- ******************************************************* -->
<!-- ******************************************************* -->

<!-- root template: controls overall page layout --> 

<xsl:template match="/">
 <xsl:variable name="hitCounts" select="count(descendant::name[@type='place' and @placeref=$placeRefs])"/>
   <xsl:choose>
    <xsl:when test="$hitCounts!=0">
		<div id="search_results">
      <xsl:for-each select="$placeRefs">
        <xsl:variable name="ref" select="."/>
        <xsl:variable name="placeName" select="/descendant::place[@id=$ref]/text()"/>
        <xsl:variable name="hitCount" select="count(/descendant::name[@type='place' and @placeref=$ref])"/>
      <div>
       <h3><span class="highlight"><xsl:value-of select="$placeName"/></span> (Total: <xsl:value-of select="$hitCount"/>)</h3>
       <ul>
       <xsl:call-template name="hitList">
         <xsl:with-param name="placeRef" select="$ref"/>
       </xsl:call-template>
       </ul>
      </div>
      </xsl:for-each>
		</div>
      <xsl:choose>
       <xsl:when test="$displayID='none'">
        <xsl:apply-templates select="//div2[descendant::name/@placeref=$placeRefs]" mode="firstDisplay"/>
       </xsl:when>
       <xsl:otherwise>
        <xsl:apply-templates select="//div2[@id=$displayID]" mode="display"/>
       </xsl:otherwise>
      </xsl:choose>
    </xsl:when>
    <xsl:otherwise>
      <h3>
         <span class="highlight"><xsl:value-of select="$targetPlace"/></span> not found
      </h3>
    </xsl:otherwise>
   </xsl:choose>
</xsl:template>

<!-- ******************************************************* -->
<!-- ******************************************************* -->


<xsl:template name="hitList">
  <xsl:param name="placeRef"/>
  <xsl:for-each select="//div2[descendant::name/@placeref=$placeRef]">
   <xsl:variable name="div2ID" select="@id"/>
   
   <!-- convert references that are in words i.e. Novella Prima into numbers, for brevity -->
   <xsl:variable name="div2Head">
   <xsl:choose>
     <xsl:when test="child::head='Novella Prima'">1</xsl:when>
     <xsl:when test="child::head='Novella Seconda'">2</xsl:when>
     <xsl:when test="child::head='Novella Terza'">3</xsl:when>
     <xsl:when test="child::head='Novella Quarta'">4</xsl:when>
     <xsl:when test="child::head='Novella Quinta'">5</xsl:when>
     <xsl:when test="child::head='Novella Sesta'">6</xsl:when>
     <xsl:when test="child::head='Novella Settima'">7</xsl:when>
     <xsl:when test="child::head='Novella Ottava'">8</xsl:when>
     <xsl:when test="child::head='Novella Nona'">9</xsl:when>
     <xsl:when test="child::head='Novella Decima'">10</xsl:when>
     <xsl:when test="child::head='Introduzione'">Intr.</xsl:when>
     <xsl:when test="child::head='Conclusione'">Conc.</xsl:when>
     <xsl:otherwise><xsl:value-of select="child::head" /></xsl:otherwise>
    </xsl:choose>
    </xsl:variable>    
   <!-- same as above, but for the Days, not the novellas -->
   <xsl:variable name="div1Head">
   <xsl:choose>
     <xsl:when test="parent::div1/head='Prima Giornata'">I</xsl:when>
     <xsl:when test="parent::div1/head='Seconda Giornata'">II</xsl:when>
     <xsl:when test="parent::div1/head='Terza Giornata'">III</xsl:when>
     <xsl:when test="parent::div1/head='Quarta Giornata'">IV</xsl:when>
     <xsl:when test="parent::div1/head='Quinta Giornata'">V</xsl:when>
     <xsl:when test="parent::div1/head='Sesta Giornata'">VI</xsl:when>
     <xsl:when test="parent::div1/head='Settima Giornata'">VII</xsl:when>
     <xsl:when test="parent::div1/head='Ottava Giornata'">VIII</xsl:when>
     <xsl:when test="parent::div1/head='Nona Giornata'">IX</xsl:when>
     <xsl:when test="parent::div1/head='Decima Giornata'">X</xsl:when>
     <xsl:otherwise>
      <xsl:value-of select="parent::div1/head" /></xsl:otherwise>
      </xsl:choose>
      </xsl:variable>

   <xsl:variable name="hitsNum" select="count(descendant::name[@placeref=$placeRef])"/>
   <xsl:choose>
    <xsl:when test="position()=1 and $displayID='none'">
     <li><span class="current"><a href="search.php?q={$targetPlace}&amp;type=place&amp;display={$div2ID}&amp;work=Dec&amp;lang={$langID}"><xsl:value-of select="$div1Head"/>,<xsl:text>  </xsl:text><span class="current"><xsl:value-of select="$div2Head"/></span></a>: <xsl:value-of select="$hitsNum"/></span></li>
    </xsl:when>
    <xsl:when test="$displayID=$div2ID">
     <li><span class="current"><a href="search.php?q={$targetPlace}&amp;type=place&amp;display={$div2ID}&amp;work=Dec&amp;lang={$langID}"><xsl:value-of select="$div1Head"/>,<xsl:text>  </xsl:text><span class="current"><xsl:value-of select="$div2Head"/></span></a>: <xsl:value-of select="$hitsNum"/></span></li>
    </xsl:when>
    <xsl:otherwise>
     <li><a href="search.php?q={$targetPlace}&amp;type=place&amp;display={$div2ID}&amp;work=Dec&amp;lang={$langID}"><xsl:value-of select="$div1Head"/>,<xsl:text>  </xsl:text><xsl:value-of select="$div2Head"/></a>: <xsl:value-of select="$hitsNum"/></li>
    </xsl:otherwise>
   </xsl:choose>
  </xsl:for-each>
</xsl:template>


<!-- ******************************************************* -->
<!-- ******************************************************* -->

<!-- EM 2009/04/23 put <head> element right after div1Head information, so that there 
wouldn't be a line break between the Day and Novella header. Note that template for <head> below is commented out, but can be replaced if necessary-->

<xsl:template match="div2" mode="firstDisplay">
 <xsl:variable name="div1Head" select="parent::div1/head"/>
  <xsl:choose>
   <xsl:when test="position()=1">
     <h2><xsl:value-of select="$div1Head"/><xsl:text> - </xsl:text><xsl:value-of select="head"/></h2>
     <xsl:apply-templates mode="display"/>
   </xsl:when>
   <xsl:otherwise>
   </xsl:otherwise>
  </xsl:choose>
</xsl:template>

<xsl:template match="div2" mode="display">
 <xsl:variable name="div1Head" select="parent::div1/head"/>
   <h2><xsl:value-of select="$div1Head"/><xsl:text> - </xsl:text><xsl:value-of select="head"/></h2>
   <xsl:apply-templates mode="display"/>
</xsl:template>


<xsl:template match="div3" mode="display">
  <xsl:apply-templates mode="display"/>
</xsl:template>


<xsl:template match="argument" mode="display">
 <xsl:apply-templates mode="display"/>
</xsl:template>


<xsl:template match="head" mode="display">
 <!-- <h2><span class="current"><xsl:apply-templates mode="display"/></span></h2> -->
</xsl:template>


<xsl:template match="p" mode="display">
 <xsl:variable name="voice" select="ancestor::*[@who][position()= 1]/@who"/>
  <h3>[Voice: <xsl:value-of select="$voice"/>]</h3>
    <p><xsl:apply-templates mode="display"/></p>
</xsl:template>

<xsl:template match="name" mode="display">
 <xsl:choose>
  <xsl:when test="@placeref=$placeRefs">
   <span class="highlight"><xsl:apply-templates mode="display"/></span>
  </xsl:when>
  <xsl:otherwise>
   <xsl:apply-templates mode="display"/>
  </xsl:otherwise>
 </xsl:choose>
</xsl:template>

<xsl:template match="q" mode="display">
 <xsl:text>&#8220;</xsl:text><xsl:apply-templates mode="display"/><xsl:text>&#8221;</xsl:text>
</xsl:template>

<xsl:template match="title" mode="display">
 <em><xsl:apply-templates mode="display"/></em>
</xsl:template>

<xsl:template match="milestone" mode="display">
 <xsl:variable name="selfID" select="@id"/>
  [<xsl:value-of select="substring($selfID, 7, 3)"/>]
</xsl:template>


<!-- ******************************************************* -->
<!-- ******************************************************* -->

<!-- COMMENTED OUT






 -->

</xsl:stylesheet>
