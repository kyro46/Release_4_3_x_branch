<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_miva extends HFile{
   function HFile_miva(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// Miva
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("<");
$this->unindent          	= array("</");

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("~", "!", "@", "$", "%", "^", "&", "*", "(", ")", "+", "|", "\\", "{", "}", "[", "]", ":", ";", "\"", "'", " ", "	", ",", ".", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("<MvComment>");
$this->blockcommentoff   	= array("</MvComment>");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"<MvFUNCTIONRETURN" => "1", 
			"<MvLET" => "1", 
			"<MvASSIGN" => "1", 
			"<MvELSE>" => "1", 
			"<MvWHILE" => "1", 
			"<MvWHILESTOP>" => "1", 
			"MvWHILE>" => "1", 
			"<MvEVALUATE" => "1", 
			"<MvEVAL" => "1", 
			"<MvCALL" => "1", 
			"MvCALL>" => "1", 
			"<MvCALLSTOP>" => "1", 
			"<MvEXIT>" => "1", 
			"<MvIF" => "1", 
			"MvIF>" => "1", 
			"<MvDO" => "1", 
			"</" => "1", 
			"&]" => "1", 
			"<MvCREATE" => "2", 
			"<MvREVEALSTRUCTURE" => "2", 
			"<MvOPEN" => "2", 
			"<MvCLOSE" => "2", 
			"<MvGO" => "2", 
			"<MvFIND" => "2", 
			"<MvSKIP" => "2", 
			"<MvADD" => "2", 
			"<MvUPDATE" => "2", 
			"<MvQUERY" => "2", 
			"<MvDELETE" => "2", 
			"<MvUNDELETE" => "2", 
			"<MvMAKEINDEX" => "2", 
			"<MvSETINDEX" => "2", 
			"<MvREINDEX" => "2", 
			"<MvPACK" => "2", 
			"<MvPRIMARY" => "2", 
			"<MvOPENVIEW" => "2", 
			"<MvCLOSEVIEW" => "2", 
			"{}" => "2", 
			"<MvFUNCTION" => "3", 
			"MvFUNCTION>" => "3", 
			"<MvEXPORT" => "3", 
			"<MvIMPORT" => "3", 
			"<MvIMPORTSTOP" => "3", 
			"MvIMPORT>" => "3", 
			"<MvSMTP" => "3", 
			"MvSMTP>" => "3", 
			"<MvPOP" => "3", 
			"<MvPOPDELETE>" => "3", 
			"MvPOP>" => "3", 
			"<A" => "4", 
			"</A>" => "4", 
			"<ABBR>" => "4", 
			"<ABBR" => "4", 
			"</ABBR>" => "4", 
			"<ABOVE>" => "4", 
			"<ACRONYM>" => "4", 
			"<ACRONYM" => "4", 
			"</ACRONYM>" => "4", 
			"<ADDRESS>" => "4", 
			"<ADDRESS" => "4", 
			"</ADDRESS>" => "4", 
			"<APPLET" => "4", 
			"</APPLET>" => "4", 
			"<ARRAY>" => "4", 
			"<AREA" => "4", 
			"</AREA" => "4", 
			"<B>" => "4", 
			"<B" => "4", 
			"</B>" => "4", 
			"<BASE" => "4", 
			"<BASEFONT" => "4", 
			"<BDO>" => "4", 
			"<BDO" => "4", 
			"</BDO>" => "4", 
			"<BGSOUND" => "4", 
			"<BIG>" => "4", 
			"<BIG" => "4", 
			"</BIG>" => "4", 
			"<BLINK>" => "4", 
			"</BLINK>" => "4", 
			"<BLOCKQUOTE>" => "4", 
			"<BLOCKQUOTE" => "4", 
			"</BLOCKQUOTE>" => "4", 
			"<BODY" => "4", 
			"<BODY>" => "4", 
			"</BODY>" => "4", 
			"<BOX>" => "4", 
			"<BR" => "4", 
			"<BR>" => "4", 
			"<BLINK" => "4", 
			"<BUTTON>" => "4", 
			"</BUTTON>" => "4", 
			"<CAPTION>" => "4", 
			"<CAPTION" => "4", 
			"</CAPTION>" => "4", 
			"<CENTER>" => "4", 
			"<CENTER" => "4", 
			"</CENTER>" => "4", 
			"<CITE>" => "4", 
			"<CITE" => "4", 
			"</CITE>" => "4", 
			"<CODE>" => "4", 
			"<CODE" => "4", 
			"</CODE>" => "4", 
			"<COL>" => "4", 
			"<COLGROUP>" => "4", 
			"</COLGROUP>" => "4", 
			"<COMMENT>" => "4", 
			"</COMMENT>" => "4", 
			"<DD>" => "4", 
			"<DD" => "4", 
			"</DD>" => "4", 
			"<DEL>" => "4", 
			"<DEL" => "4", 
			"</DEL>" => "4", 
			"<DFN>" => "4", 
			"<DFN" => "4", 
			"</DFN>" => "4", 
			"<DIR>" => "4", 
			"<DIR" => "4", 
			"</DIR>" => "4", 
			"<DIV>" => "4", 
			"<DIV" => "4", 
			"</DIV>" => "4", 
			"<DL>" => "4", 
			"<DL" => "4", 
			"</DL>" => "4", 
			"<DT>" => "4", 
			"<DT" => "4", 
			"</DT>" => "4", 
			"<EM>" => "4", 
			"<EM" => "4", 
			"</EM>" => "4", 
			"<EMBED" => "4", 
			"<FIELDSET>" => "4", 
			"<FIELDSET" => "4", 
			"</FIELDSET>" => "4", 
			"<FIG>" => "4", 
			"<FONT" => "4", 
			"</FONT>" => "4", 
			"<FORM>" => "4", 
			"<FORM" => "4", 
			"</FORM>" => "4", 
			"<FRAME" => "4", 
			"<FRAMESET" => "4", 
			"</FRAMESET>" => "4", 
			"<H1>" => "4", 
			"<H1" => "4", 
			"</H1>" => "4", 
			"<H2>" => "4", 
			"<H2" => "4", 
			"</H2>" => "4", 
			"<H3>" => "4", 
			"<H3" => "4", 
			"</H3>" => "4", 
			"<H4>" => "4", 
			"<H4" => "4", 
			"</H4>" => "4", 
			"<H5>" => "4", 
			"<H5" => "4", 
			"</H5>" => "4", 
			"<H6>" => "4", 
			"<H6" => "4", 
			"</H6>" => "4", 
			"<HEAD>" => "4", 
			"<HEAD" => "4", 
			"</HEAD>" => "4", 
			"<HR>" => "4", 
			"<HR" => "4", 
			"<HTML>" => "4", 
			"<HTML" => "4", 
			"</HTML>" => "4", 
			"<I>" => "4", 
			"<I" => "4", 
			"</I>" => "4", 
			"<IFRAME>" => "4", 
			"</IFRAME>" => "4", 
			"<ILAYER>" => "4", 
			"</ILAYER>" => "4", 
			"<IMG" => "4", 
			"<INPUT>" => "4", 
			"<INPUT" => "4", 
			"<INS>" => "4", 
			"<INS" => "4", 
			"</INS>" => "4", 
			"<ISINDEX>" => "4", 
			"<ISINDEX" => "4", 
			"<KBD>" => "4", 
			"<KBD" => "4", 
			"</KBD>" => "4", 
			"<LABEL>" => "4", 
			"<LABEL" => "4", 
			"</LABEL>" => "4", 
			"<LAYER>" => "4", 
			"<LAYER" => "4", 
			"</LAYER>" => "4", 
			"<LEGEND>" => "4", 
			"<LEGEND" => "4", 
			"</LEGEND>" => "4", 
			"<LI>" => "4", 
			"<LI" => "4", 
			"</LI>" => "4", 
			"<LINK" => "4", 
			"<LISTING>" => "4", 
			"</LISTING>" => "4", 
			"<MAP" => "4", 
			"</MAP>" => "4", 
			"<MARQUEE" => "4", 
			"</MARQUEE>" => "4", 
			"<MENU>" => "4", 
			"<MENU" => "4", 
			"</MENU>" => "4", 
			"<META" => "4", 
			"<MULTICOL>" => "4", 
			"</MULTICOL>" => "4", 
			"<NEXTID" => "4", 
			"<NOBR>" => "4", 
			"</NOBR>" => "4", 
			"<NOFRAMES>" => "4", 
			"</NOFRAMES>" => "4", 
			"<NOLAYER>" => "4", 
			"</NOLAYER>" => "4", 
			"<NOTE>" => "4", 
			"</NOTE>" => "4", 
			"<NOSCRIPT>" => "4", 
			"</NOSCRIPT>" => "4", 
			"<OBJECT>" => "4", 
			"<OBJECT" => "4", 
			"<OL>" => "4", 
			"<OL" => "4", 
			"</OL>" => "4", 
			"<OPTION>" => "4", 
			"<OPTION" => "4", 
			"</OPTION>" => "4", 
			"<OPTGROUP>" => "4", 
			"<OPTGROUP" => "4", 
			"</OPTGROUP>" => "4", 
			"<P" => "4", 
			"<P>" => "4", 
			"</P>" => "4", 
			"<PARAM" => "4", 
			"<PRE>" => "4", 
			"<PRE" => "4", 
			"</PRE>" => "4", 
			"<Q>" => "4", 
			"<Q" => "4", 
			"</Q>" => "4", 
			"<QUOTE>" => "4", 
			"<RANGE>" => "4", 
			"<ROOT>" => "4", 
			"<S>" => "4", 
			"<S" => "4", 
			"</S>" => "4", 
			"<SAMP>" => "4", 
			"<SAMP" => "4", 
			"</SAMP>" => "4", 
			"<SCRIPT" => "4", 
			"<SCRIPT>" => "4", 
			"</SCRIPT>" => "4", 
			"<SELECT" => "4", 
			"</SELECT>" => "4", 
			"<SMALL>" => "4", 
			"<SMALL" => "4", 
			"</SMALL>" => "4", 
			"<SOUND" => "4", 
			"<SPACER>" => "4", 
			"<SPAN>" => "4", 
			"<SPAN" => "4", 
			"</SPAN>" => "4", 
			"<SQRT>" => "4", 
			"<STRIKE>" => "4", 
			"<STRIKE" => "4", 
			"</STRIKE>" => "4", 
			"<STRONG>" => "4", 
			"<STRONG" => "4", 
			"</STRONG>" => "4", 
			"<STYLE>" => "4", 
			"<STYLE" => "4", 
			"</STYLE>" => "4", 
			"<SUB>" => "4", 
			"<SUB" => "4", 
			"</SUB>" => "4", 
			"<SUP>" => "4", 
			"<SUP" => "4", 
			"</SUP>" => "4", 
			"<TABLE>" => "4", 
			"<TABLE" => "4", 
			"</TABLE>" => "4", 
			"<TBODY>" => "4", 
			"<TBODY" => "4", 
			"</TBODY>" => "4", 
			"<TD" => "4", 
			"<TD>" => "4", 
			"</TD>" => "4", 
			"<TEXT>" => "4", 
			"<TEXTAREA" => "4", 
			"<TEXTAREA>" => "4", 
			"</TEXTAREA>" => "4", 
			"<TFOOT>" => "4", 
			"<TFOOT" => "4", 
			"</TFOOT>" => "4", 
			"<TH" => "4", 
			"<TH>" => "4", 
			"</TH>" => "4", 
			"<THEAD>" => "4", 
			"<THEAD" => "4", 
			"</THEAD>" => "4", 
			"<TITLE>" => "4", 
			"</TITLE>" => "4", 
			"<TR" => "4", 
			"<TR>" => "4", 
			"</TR>" => "4", 
			"<TT>" => "4", 
			"</TT>" => "4", 
			"<TT" => "4", 
			"<U>" => "4", 
			"<U" => "4", 
			"</U>" => "4", 
			"<UL>" => "4", 
			"<UL" => "4", 
			"</UL>" => "4", 
			"<VAR>" => "4", 
			"</VAR>" => "4", 
			"<VAR" => "4", 
			"<WBR>" => "4", 
			"<XMP>" => "4", 
			"</XMP>" => "4", 
			"ABBR=" => "5", 
			"ACCEPT-CHARSET=" => "5", 
			"ACCEPT=" => "5", 
			"ACCESSKEY=" => "5", 
			"ACTION=" => "5", 
			"ALIGN=" => "5", 
			"ALINK=" => "5", 
			"ALT=" => "5", 
			"ARCHIVE=" => "5", 
			"AXIS=" => "5", 
			"ABBR" => "5", 
			"ACCEPT-CHARSET" => "5", 
			"ACCEPT" => "5", 
			"ACCESSKEY" => "5", 
			"ACTION" => "5", 
			"ALIGN" => "5", 
			"ALINK" => "5", 
			"ALT" => "5", 
			"ARCHIVE" => "5", 
			"AXIS" => "5", 
			"BACKGROUND=" => "5", 
			"BEHAVIOR" => "5", 
			"BELOW" => "5", 
			"BGCOLOR=" => "5", 
			"BORDER=" => "5", 
			"BACKGROUND" => "5", 
			"BGCOLOR" => "5", 
			"BORDER" => "5", 
			"BOOL" => "5", 
			"CELLPADDING=" => "5", 
			"CELLSPACING=" => "5", 
			"CHAR=" => "5", 
			"CHAROFF=" => "5", 
			"CHARSET=" => "5", 
			"CHECKED" => "5", 
			"CITE=" => "5", 
			"CLASS=" => "5", 
			"CLASSID=" => "5", 
			"CLEAR=" => "5", 
			"CODE=" => "5", 
			"CODEBASE=" => "5", 
			"CODETYPE=" => "5", 
			"COLOR=" => "5", 
			"COLS=" => "5", 
			"COLSPAN=" => "5", 
			"COMPACT" => "5", 
			"CONTENT=" => "5", 
			"COORDS=" => "5", 
			"CC=" => "5", 
			"CELLPADDING" => "5", 
			"CELLSPACING" => "5", 
			"CHAR" => "5", 
			"CHAROFF" => "5", 
			"CHARSET" => "5", 
			"CITE" => "5", 
			"CLASS" => "5", 
			"CLASSID" => "5", 
			"CLEAR" => "5", 
			"CODE" => "5", 
			"CODEBASE" => "5", 
			"CODETYPE" => "5", 
			"COLOR" => "5", 
			"COLS" => "5", 
			"COLSPAN" => "5", 
			"CONTENT" => "5", 
			"COORDS" => "5", 
			"CC" => "5", 
			"DATA=" => "5", 
			"DATETIME=" => "5", 
			"DECLARE" => "5", 
			"DEFER" => "5", 
			"DIR=" => "5", 
			"DISABLED" => "5", 
			"DATABASE=" => "5", 
			"DELIMITER=" => "5", 
			"DIRECTORY=" => "5", 
			"DATA" => "5", 
			"DATETIME" => "5", 
			"DIR" => "5", 
			"DATABASE" => "5", 
			"DELIMITER" => "5", 
			"DIRECTORY" => "5", 
			"ENCTYPE=" => "5", 
			"EXPRESSION=" => "5", 
			"EXACT=" => "5", 
			"EXPR=" => "5", 
			"ENCTYPE" => "5", 
			"EXPRESSION" => "5", 
			"EXACT" => "5", 
			"ERROROUTPUTLEVEL" => "5", 
			"EXPR" => "5", 
			"FACE=" => "5", 
			"FOR=" => "5", 
			"FRAME=" => "5", 
			"FRAMEBORDER=" => "5", 
			"FRAMESPACING=" => "5", 
			"FIELDS=" => "5", 
			"FLAGS=" => "5", 
			"FILE=" => "5", 
			"FILTER=" => "5", 
			"FROM=" => "5", 
			"FACE" => "5", 
			"FOR" => "5", 
			"FRAME" => "5", 
			"FRAMEBORDER" => "5", 
			"FRAMESPACING" => "5", 
			"FIELDS" => "5", 
			"FLAGS" => "5", 
			"FILE" => "5", 
			"FILTER" => "5", 
			"FROM" => "5", 
			"HEADERS=" => "5", 
			"HEIGHT=" => "5", 
			"HIDDEN=" => "5", 
			"HREF=" => "5", 
			"HREFLANG=" => "5", 
			"HSPACE=" => "5", 
			"HTTP-EQUIV=" => "5", 
			"HEADERS" => "5", 
			"HEIGHT" => "5", 
			"HIDDEN" => "5", 
			"HREF" => "5", 
			"HREFLANG" => "5", 
			"HSPACE" => "5", 
			"HTTP-EQUIV" => "5", 
			"ID=" => "5", 
			"ISMAP=" => "5", 
			"INDEXES=" => "5", 
			"INDEXFILE=" => "5", 
			"ID" => "5", 
			"ISMAP" => "5", 
			"INDEXES" => "5", 
			"INDEXFILE" => "5", 
			"LABEL=" => "5", 
			"LANG=" => "5", 
			"LANGUAGE=" => "5", 
			"LINK=" => "5", 
			"LOOP=" => "5", 
			"LONGDESC=" => "5", 
			"LOGIN=" => "5", 
			"LABEL" => "5", 
			"LANG" => "5", 
			"LANGUAGE" => "5", 
			"LINK" => "5", 
			"LOOP" => "5", 
			"LONGDESC" => "5", 
			"LOGIN" => "5", 
			"MAILTO=" => "5", 
			"MARGINHEIGHT=" => "5", 
			"MARGINWIDTH=" => "5", 
			"MAXLENGTH=" => "5", 
			"MEDIA=" => "5", 
			"METHOD=" => "5", 
			"MULTIPLE" => "5", 
			"MAILHOST=" => "5", 
			"MAILTO" => "5", 
			"MARGINHEIGHT" => "5", 
			"MARGINWIDTH" => "5", 
			"MAXLENGTH" => "5", 
			"MEDIA" => "5", 
			"METHOD" => "5", 
			"MAILHOST" => "5", 
			"MEMO" => "5", 
			"NAME=" => "5", 
			"NOHREF" => "5", 
			"NORESIZE" => "5", 
			"NOSHADE" => "5", 
			"NAME" => "5", 
			"NUMBER" => "5", 
			"OBJECT=" => "5", 
			"ONBLUR=" => "5", 
			"ONCHANGE=" => "5", 
			"ONFOCUS=" => "5", 
			"ONKEYDOWN=" => "5", 
			"ONKEYPRESS=" => "5", 
			"ONKEYUP=" => "5", 
			"ONLOAD=" => "5", 
			"ONRESET=" => "5", 
			"ONSELECT=" => "5", 
			"ONSUBMIT=" => "5", 
			"ONUNLOAD=" => "5", 
			"ONCLICK=" => "5", 
			"ONDBLCLICK=" => "5", 
			"ONMOUSEDOWN=" => "5", 
			"ONMOUSEMOVE=" => "5", 
			"ONMOUSEOUT=" => "5", 
			"ONMOUSEOVER=" => "5", 
			"ONMOUSEUP=" => "5", 
			"OBJECT" => "5", 
			"ONBLUR" => "5", 
			"ONCHANGE" => "5", 
			"ONFOCUS" => "5", 
			"ONKEYDOWN" => "5", 
			"ONKEYPRESS" => "5", 
			"ONKEYUP" => "5", 
			"ONLOAD" => "5", 
			"ONRESET" => "5", 
			"ONSELECT" => "5", 
			"ONSUBMIT" => "5", 
			"ONUNLOAD" => "5", 
			"ONCLICK" => "5", 
			"ONDBLCLICK" => "5", 
			"ONMOUSEDOWN" => "5", 
			"ONMOUSEMOVE" => "5", 
			"ONMOUSEOUT" => "5", 
			"ONMOUSEOVER" => "5", 
			"ONMOUSEUP" => "5", 
			"PROFILE=" => "5", 
			"PROMPT=" => "5", 
			"PARAMETERS=" => "5", 
			"PASSWORD=" => "5", 
			"PROFILE" => "5", 
			"PROMPT" => "5", 
			"PARAMETERS" => "5", 
			"PASSWORD" => "5", 
			"QUERY=" => "5", 
			"QUERY" => "5", 
			"READONLY" => "5", 
			"REL=" => "5", 
			"REV=" => "5", 
			"ROWS=" => "5", 
			"ROWSPAN=" => "5", 
			"RULES=" => "5", 
			"ROW=" => "5", 
			"REL" => "5", 
			"REV" => "5", 
			"ROWS" => "5", 
			"ROWSPAN" => "5", 
			"RULES" => "5", 
			"ROW" => "5", 
			"SCHEME=" => "5", 
			"SCOPE=" => "5", 
			"SCROLLING=" => "5", 
			"SELECTED" => "5", 
			"SHAPE=" => "5", 
			"SIZE=" => "5", 
			"SPAN=" => "5", 
			"SRC=" => "5", 
			"STANDBY=" => "5", 
			"START=" => "5", 
			"STYLE=" => "5", 
			"SUMMARY=" => "5", 
			"SUBJECT=" => "5", 
			"SCHEME" => "5", 
			"SCOPE" => "5", 
			"SCROLLING" => "5", 
			"SHAPE" => "5", 
			"SIZE" => "5", 
			"SPAN" => "5", 
			"SRC" => "5", 
			"STANDBY" => "5", 
			"START" => "5", 
			"STYLE" => "5", 
			"SUMMARY" => "5", 
			"SUBJECT" => "5", 
			"STANDARDOUTPUTLEVEL" => "5", 
			"TABINDEX=" => "5", 
			"TARGET=" => "5", 
			"TEXT=" => "5", 
			"TITLE=" => "5", 
			"TOPMARGIN=" => "5", 
			"TYPE=" => "5", 
			"TO=" => "5", 
			"TABINDEX" => "5", 
			"TARGET" => "5", 
			"TEXT" => "5", 
			"TITLE" => "5", 
			"TOPMARGIN" => "5", 
			"TYPE" => "5", 
			"TO" => "5", 
			"URL=" => "5", 
			"USEMAP=" => "5", 
			"URL" => "5", 
			"USEMAP" => "5", 
			"VALIGN=" => "5", 
			"VALUE=" => "5", 
			"VALUETYPE=" => "5", 
			"VERSION=" => "5", 
			"VLINK=" => "5", 
			"VSPACE=" => "5", 
			"VIEW=" => "5", 
			"VALIGN" => "5", 
			"VALUE" => "5", 
			"VALUETYPE" => "5", 
			"VERSION" => "5", 
			"VLINK" => "5", 
			"VSPACE" => "5", 
			"VIEW" => "5", 
			"WIDTH=" => "5", 
			"WIDTH" => "5", 
			"=" => "5", 
			"$" => "6", 
			"AND" => "6", 
			"CIN" => "6", 
			"ECIN" => "6", 
			"EIN" => "6", 
			"EQ" => "6", 
			"GE" => "6", 
			"GT" => "6", 
			"IN" => "6", 
			"LE" => "6", 
			"LT" => "6", 
			"MOD" => "6", 
			"NE" => "6", 
			"NOT" => "6", 
			"OR" => "6", 
			"{" => "6", 
			"}" => "6");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
