<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<!-- strip leading and trailing whitespace from all elements ... -->
	<xsl:strip-space elements="*" />
	
	<!-- these do nothing, keep to avoid null -->
	<xsl:param name="expandID">empty</xsl:param>
	<xsl:param name="prevExpandID">empty</xsl:param>
	<xsl:param name="nextExpandID">empty</xsl:param>
	
	<xsl:param name="contentID">foo</xsl:param>
	<xsl:param name="langID">eng</xsl:param>
	<xsl:param name="highlight">none</xsl:param>
	
	<xsl:variable name="elementID" select="$contentID" />
	<xsl:variable name="elementName" select="name(//*[@id = $contentID])" />
	<xsl:variable name="elementType" select="//*[@id = $contentID]/@type" />
	
	
	<xsl:output method="html" media-type="text/html" />
<!-- ******************************************************* -->
<!-- ******************************************************* -->
<!-- root template: controls overall page layout -->
	<xsl:template match="/">
		<xsl:choose>
			<xsl:when test="$elementName = 'div1' and $elementType = 'Day'">
				<xsl:apply-templates select="//*[@id = $contentID]/argument" mode="argument" />
			</xsl:when>
			<xsl:when test="$elementName = 'div2'">
				<xsl:apply-templates select="//div2[@id = $contentID]" mode="content" />
			</xsl:when>
			<xsl:when test="$elementName = 'prologue'">
				<xsl:apply-templates select="//prologue" />
			</xsl:when>
			<xsl:otherwise>
				<xsl:apply-templates select="//epilogue" />
			</xsl:otherwise>
		</xsl:choose>
	</xsl:template>
	
	
<!-- templates for prologue, epilogue -->
	<xsl:template match="prologue">
	
		<xsl:variable name="nextID">
			<xsl:value-of select="following::div1[@id][position()= 1]/@id" />
		</xsl:variable>
<!-- 
  <xsl:variable name="nextExpandID" select="$nextID"/>
 -->
		<h3>[Voice: author]</h3> 
		<xsl:apply-templates select="preceding-sibling::argument/p" mode="argument" />
		<xsl:apply-templates mode="content" />
		<a href="DecShowText.php?myID={$nextID}&amp;expand={$nextExpandID}&amp;lang={$langID}" class="next_link">Next &#8594;</a> 
	</xsl:template>
	
	<xsl:template match="epilogue">
		<xsl:apply-templates mode="content" />
		<xsl:variable name="prevID">
			<xsl:value-of select="preceding::div2[@id][position()= 1]/@id" />
		</xsl:variable>
		<a href="DecShowText.php?myID={$prevID}&amp;expand=empty&amp;lang={$langID}" class="prev_link"> &#8592; Previous</a> 
	</xsl:template>
<!-- ******************************************************* -->
<!-- ******************************************************* -->
<!-- templates for mode=argument -->
<!-- arguments are the elements at the very beginning of each day, and also right
before the prologue. At the beginning of each day, the back arrow needs to go 
to the conclusion of the previous day. But if it's day 1, then it should go back to the prologue.-->
	<xsl:template match="argument" mode="argument">
	
		<xsl:variable name="prevID">
	
		<xsl:choose>
<!-- figure out if this is the first novella of first day -prev sibling of parent day -->
			<xsl:when test="preceding::div2">
			<xsl:value-of select="preceding::div2[@id][position()= 1]/@id" />
			</xsl:when>
			<xsl:otherwise>
			<xsl:value-of select="preceding::prologue/@id" />			
			</xsl:otherwise>
		</xsl:choose>
		
			</xsl:variable>

	
<!-- 
        <xsl:variable name="prevExpandID"><xsl:value-of select="preceding::div1[@id][position()= 1]/@id"/></xsl:variable> 
 -->
		<xsl:variable name="nextID">
			<xsl:value-of select="following::div2[@id][position()= 1]/@id" />
		</xsl:variable>
<!-- 
        <xsl:variable name="nextExpandID"><xsl:value-of select="parent::div1/@id"/></xsl:variable>
 -->
		<h2> 
			<xsl:value-of select="preceding-sibling::head" />
			<xsl:text>
				- Argument 
			</xsl:text>
		</h2> <h3>[Voice: author]</h3> 
		<xsl:apply-templates select="p" mode="argument" />
		<a href="DecShowText.php?myID={$prevID}&amp;expand={$prevExpandID}&amp;lang={$langID}" class="prev_link">&#8592; Previous</a> <a href="DecShowText.php?myID={$nextID}&amp;expand={$nextExpandID}&amp;lang={$langID}" class="next_link">Next &#8594;</a> 
	</xsl:template>
	<xsl:template match="p" mode="argument">
		<p class="framing">
			<xsl:apply-templates mode="content" />
		</p>
	</xsl:template>
<!-- ******************************************************* -->
<!-- ******************************************************* -->
<!-- templates for mode=content -->
	<xsl:template match="div2" mode="content">
	
	<xsl:variable name="prevID">
	
		<xsl:choose>
<!-- figure out if this is the first novella of first day -prev sibling of parent day -->
			<xsl:when test="preceding::div2">
			<xsl:value-of select="preceding::div2[@id][position()= 1]/@id" />
			</xsl:when>
			<xsl:otherwise>
			<xsl:value-of select="preceding::prologue/@id" />			
			</xsl:otherwise>
		</xsl:choose>
		
			</xsl:variable>

		<xsl:variable name="nextID">
			<xsl:value-of select="following::div2[@id][position()= 1]/@id" />
		</xsl:variable>
<!-- 
  <xsl:variable name="nextExpandID"><xsl:value-of select="parent::div1/@id"/></xsl:variable>
 -->
		<xsl:apply-templates mode="content" />
		<a href="DecShowText.php?myID={$prevID}&amp;expand={$prevExpandID}&amp;lang={$langID}" class="prev_link">&#8592; Previous</a> <a href="DecShowText.php?myID={$nextID}&amp;expand={$nextExpandID}&amp;lang={$langID}" class="next_link">Next &#8594;</a> 
	</xsl:template>
	<xsl:template match="div3" mode="content">
		<div>
			<xsl:apply-templates mode="content" />
		</div>
	</xsl:template>
	<xsl:template match="argument" mode="content">
		<xsl:apply-templates mode="content" />
	</xsl:template>
	<xsl:template match="head" mode="content">
		<h2> 
			<xsl:if test="../preceding-sibling::head">
				<xsl:value-of select="../preceding-sibling::head" />
				- 
			</xsl:if>
			<xsl:apply-templates mode="content" />
		</h2> 
	</xsl:template>
	<xsl:template match="p" mode="content">
		<xsl:variable name="voice" select="ancestor::*[@who][position()= 1]/@who" />
		<h3>[Voice: 
			<xsl:value-of select="$voice" />
			]</h3> 
		<p>
			<xsl:apply-templates mode="content" />
		</p>
	</xsl:template>
	<xsl:template match="lg" mode="content">
		<xsl:if test="position()= 1">
			<h3>[Voice: 
				<xsl:value-of select="parent::div3/@who" />
				]</h3> 
		</xsl:if>
		<p>
			<xsl:apply-templates mode="content" />
		</p>
	</xsl:template>
	<xsl:template match="l" mode="content">
		<xsl:apply-templates mode="content" />
	</xsl:template>
	<xsl:template match="q" mode="content">
		<xsl:text>
			&#8220; 
		</xsl:text>
		<xsl:apply-templates mode="content" />
		<xsl:text>
			&#8221; 
		</xsl:text>
	</xsl:template>
	
	<xsl:template match="c" mode="content">
		<span class="{@rend}"><xsl:apply-templates mode="content" /></span>
	</xsl:template>
	<xsl:template match="note" mode="content">
	</xsl:template>
	<xsl:template match="title" mode="content">
		<em> 
			<xsl:apply-templates mode="content" />
		</em> 
	</xsl:template>
	<xsl:template match="milestone" mode="content">
		<xsl:variable name="ancestorID" select="ancestor::*[@id][1]/@id" />
		<xsl:variable name="selfID" select="@id" />
		<xsl:variable name="anchorID" select="substring($selfID, 7, 3)" />
		<xsl:choose>
			<xsl:when test="$highlight = $anchorID">
				<xsl:choose>
					<xsl:when test="$langID = 'eng'">
						<a class="highlight" name="{$anchorID}" href="DecShowText.php?myID={$contentID}&amp;expand={$expandID}&amp;lang=it&amp;highlight={$anchorID}#{$anchorID}">[ 
							<xsl:value-of select="$anchorID" />
							]</a> 
						<xsl:text>
						</xsl:text>
					</xsl:when>
					<xsl:otherwise>
						<a class="highlight" name="{$anchorID}" href="DecShowText.php?myID={$contentID}&amp;expand={$expandID}&amp;lang=eng&amp;highlight={$anchorID}#{$anchorID}">[ 
							<xsl:value-of select="$anchorID" />
							]</a> 
						<xsl:text>
						</xsl:text>
					</xsl:otherwise>
				</xsl:choose>
			</xsl:when>
			<xsl:otherwise>
				<xsl:choose>
					<xsl:when test="$langID = 'eng'">
						<a name="{$anchorID}" href="DecShowText.php?myID={$contentID}&amp;expand={$expandID}&amp;lang=it&amp;highlight={$anchorID}#{$anchorID}">[ 
							<xsl:value-of select="$anchorID" />
							]</a> 
						<xsl:text>
						</xsl:text>
					</xsl:when>
					<xsl:otherwise>
						<a name="{$anchorID}" href="DecShowText.php?myID={$contentID}&amp;expand={$expandID}&amp;lang=eng&amp;highlight={$anchorID}#{$anchorID}">[ 
							<xsl:value-of select="$anchorID" />
							]</a> 
						<xsl:text>
						</xsl:text>
					</xsl:otherwise>
				</xsl:choose>
			</xsl:otherwise>
		</xsl:choose>
	</xsl:template>
<!-- ******************************************************* -->
<!-- ******************************************************* -->
<!-- COMMENTED OUT

 -->
</xsl:stylesheet>
