<?xml version="1.0"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>
                    Programming Languages Paradise
                </title>
                <link rel="stylesheet" type="text/css" href="languages.css"/>
                <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
            </head>
            <body>
                <h1>
                    Programming Languages Paradise
                </h1>
                <br/>
                <h2>
                    Come and learn various languages with us
                </h2>
                <br/>
                <br/>
                <h1>
                    Languages That I Have Learned So Far
                </h1>
                <br/>
                <table>
                    <tbody>
                        <xsl:for-each select="LANGUAGES/LANGUAGE">
                            <tr>
                                <td>
                                    <a href="#{NAME}">
                                        <xsl:value-of select="NAME"/>
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <xsl:value-of select="SHORT_DESC"/>
                                </td>
                            </tr>
                        </xsl:for-each>
                    </tbody>
                </table>
                <br/><br/>
                <xsl:for-each select="LANGUAGES/LANGUAGE">
                    <h1 id="{NAME}">
                        <xsl:value-of select="NAME"/>
                    </h1>
                    <br/>
                    <p>
                        <xsl:value-of select="LONG_DESC"/>
                    </p>
                </xsl:for-each>
            </body>
            
        </html>
    </xsl:template>
</xsl:stylesheet>
