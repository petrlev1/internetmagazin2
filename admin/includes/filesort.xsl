<?xml version="1.0"?> 
<files>
  <xsl:for-each order-by="" select="file" xmlns:xsl="http://www.w3.org/TR/WD-xsl">
    <file>
      <type><xsl:value-of select="type"/></type>      
      <icon><xsl:value-of select="icon"/></icon>      
      <object><xsl:value-of select="object"/></object>      
      <size><xsl:value-of select="size"/></size>      
      <sizeLabel><xsl:value-of select="sizeLabel"/></sizeLabel>      
      <lastmod><xsl:value-of select="lastmod"/></lastmod>      
    </file>
  </xsl:for-each>
</files>