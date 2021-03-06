<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_fame extends HFile{
   function HFile_fame(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// FAME
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "brown", "purple", "gray", "blue", "purple", "gray", "brown");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array("\"");
$this->delimiters        	= array();
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("-- //");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"ABORT" => "1", 
			"ACCELERATOR" => "1", 
			"ACCESS" => "1", 
			"ALIAS" => "4", 
			"ALMON" => "1", 
			"APPEND" => "1", 
			"AREA" => "1", 
			"ARGUMENTS" => "1", 
			"ARIMACONSTANT" => "1", 
			"ARROW" => "1", 
			"ASSIST" => "1", 
			"ASTIME" => "1", 
			"AXIS" => "1", 
			"BACKGROUND" => "1", 
			"BAND" => "1", 
			"BASE" => "1", 
			"BASIS" => "4", 
			"BATCH" => "1", 
			"BEHAVIORAL" => "1", 
			"BOOLEAN" => "1", 
			"BOTTOM" => "1", 
			"BOX" => "1", 
			"BRING" => "1", 
			"BROWN" => "1", 
			"BUTTON" => "1", 
			"CACHE" => "1", 
			"CALENDAR" => "1", 
			"CAPTION" => "1", 
			"CASE" => "1", 
			"CELL" => "1", 
			"CENTURY" => "1", 
			"CHANNEL" => "1", 
			"CHARACTER" => "1", 
			"CHSET" => "1", 
			"CLASS" => "1", 
			"COLOR" => "1", 
			"COLUMN" => "1", 
			"COMMAS" => "1", 
			"CONFIRM" => "1", 
			"CONSTRAIN" => "1", 
			"CONTENTS" => "1", 
			"CONVERT" => "1", 
			"CRITERION" => "1", 
			"DATE" => "1", 
			"DECIMAL" => "1", 
			"DEPIC" => "1", 
			"DEPICT" => "1", 
			"DESCRIPTION" => "4", 
			"DEVICE" => "1", 
			"DIMENSION" => "4", 
			"DISABLE" => "1", 
			"DIVISION" => "1", 
			"ECHO" => "1", 
			"EJECT" => "1", 
			"ERROR" => "1", 
			"EXPAND" => "1", 
			"EXPLODE" => "1", 
			"FETCH" => "1", 
			"FIELD" => "1", 
			"FINISH" => "1", 
			"FON" => "1", 
			"FORCE" => "1", 
			"FORECAST" => "1", 
			"FORMS" => "1", 
			"FRACTION" => "1", 
			"FRAME" => "1", 
			"FRDB" => "1", 
			"FREQUENCY" => "1", 
			"FUTURE" => "1", 
			"GENERATE" => "1", 
			"GLUE" => "1", 
			"GRID" => "1", 
			"HISTORY" => "1", 
			"HOLDOUT" => "1", 
			"HOLIDAY" => "1", 
			"IGNORE" => "1", 
			"IMAGE" => "1", 
			"INDENT" => "1", 
			"INDEX" => "1", 
			"INFLUENCE" => "1", 
			"INFOBAR" => "1", 
			"INTERCEPT" => "1", 
			"INTERRUPT" => "1", 
			"ITEM" => "1", 
			"JUSTIFY" => "1", 
			"KEEP" => "1", 
			"KIND" => "1", 
			"LABEL" => "1", 
			"LANGUAGE" => "1", 
			"LEFT" => "1", 
			"LEFTMARGIN" => "1", 
			"LEGEND" => "1", 
			"LENGTH" => "1", 
			"LIMIT" => "1", 
			"LINES" => "1", 
			"LINK" => "1", 
			"LPREFIX" => "1", 
			"MAP" => "1", 
			"MARGINS" => "1", 
			"MARK" => "1", 
			"MATCH" => "1", 
			"MEMORY" => "1", 
			"METHOD" => "1", 
			"MISSINGVALUES" => "1", 
			"NAME" => "1", 
			"NEGATIVE" => "1", 
			"NUMBER" => "1", 
			"OBJECT" => "1", 
			"OBSERVED" => "4", 
			"OFFSET" => "1", 
			"ORDER" => "1", 
			"OVERWRITE" => "1", 
			"PACK" => "1", 
			"PAGE" => "1", 
			"PARTIAL" => "1", 
			"PAST" => "1", 
			"PAUSE" => "1", 
			"PGCELL" => "1", 
			"PIERCE" => "1", 
			"PLACEMENT" => "1", 
			"PLOT" => "1", 
			"POSITION" => "1", 
			"POSITIVE" => "1", 
			"PREFIX" => "1", 
			"RANGE" => "1", 
			"REMARKS" => "1", 
			"RENDER" => "1", 
			"REORDER" => "1", 
			"REPLACE" => "1", 
			"REPORT" => "1", 
			"RESPONSE" => "1", 
			"RESTORE" => "1", 
			"REVIEW" => "1", 
			"RIGHT" => "1", 
			"ROBITERLIMIT" => "1", 
			"SCALAR" => "1", 
			"SCATTER" => "1", 
			"SEASONAL" => "1", 
			"SEE" => "1", 
			"SERIES" => "1", 
			"SHILLER" => "1", 
			"SHOW" => "1", 
			"SIZE" => "1", 
			"SPEED" => "1", 
			"SQUEEZE" => "1", 
			"STORE" => "1", 
			"STRINGLENGTH" => "4", 
			"STYLE" => "1", 
			"SUFFIX" => "1", 
			"SUSPEND" => "1", 
			"SYMBOLIZE" => "1", 
			"TAG" => "1", 
			"TECHNIQUE" => "1", 
			"TEXT" => "1", 
			"THICKNESS" => "1", 
			"THREED" => "1", 
			"TICK" => "1", 
			"TIME" => "1", 
			"TITLE" => "1", 
			"TOP" => "1", 
			"TRACE" => "1", 
			"TRANSFORM" => "1", 
			"TRIGGER" => "1", 
			"TRIMVALUE" => "1", 
			"TUNE" => "1", 
			"TURN" => "1", 
			"TYPE" => "1", 
			"UCHARACTER" => "1", 
			"UNDERLINE" => "1", 
			"UNIT" => "1", 
			"VERIFY" => "1", 
			"VIEW" => "1", 
			"WEDGE" => "1", 
			"WEIGHTS" => "1", 
			"WIDTH" => "1", 
			"WINDOW" => "1", 
			"XYSET" => "1", 
			"YEAR" => "1", 
			"ZEROVALUES" => "1", 
			"ABS" => "2", 
			"ACF" => "2", 
			"AGGR" => "2", 
			"AGR" => "2", 
			"ALL" => "2", 
			"ALPHA" => "2", 
			"AMORT" => "2", 
			"ANNPCT" => "2", 
			"ANY" => "2", 
			"AR" => "2", 
			"ARIMA" => "2", 
			"ARMA" => "2", 
			"ATAN" => "2", 
			"AVE" => "2", 
			"BIWK" => "2", 
			"BOOLFMT" => "2", 
			"CASEORDER" => "2", 
			"CAVE" => "2", 
			"CHANNELS" => "2", 
			"CHANNELTYPE" => "2", 
			"CHECKACCESS" => "2", 
			"CMAX" => "2", 
			"CMIN" => "2", 
			"CONNAME" => "2", 
			"CORR" => "2", 
			"COS" => "2", 
			"CPROD" => "2", 
			"CREATED" => "2", 
			"CROSSLIST" => "2", 
			"CSUM" => "2", 
			"CTOT" => "2", 
			"DATEFMT" => "2", 
			"DATEOF" => "2", 
			"DATEORDER" => "2", 
			"DAY" => "2", 
			"DB" => "2", 
			"DBCREATED" => "2", 
			"DBUPDATED" => "2", 
			"DIFF" => "2", 
			"DTY" => "2", 
			"EOF" => "2", 
			"ERRORTEXT" => "2", 
			"EVAL" => "2", 
			"EXISTS" => "2", 
			"EXP" => "2", 
			"EXTRACT" => "2", 
			"FILE" => "2", 
			"FILESPEC" => "2", 
			"FIRST" => "2", 
			"FIRSTCASE" => "2", 
			"FIRSTDATE" => "2", 
			"FIRSTVALUE" => "2", 
			"FONT" => "2", 
			"FPERIOD" => "2", 
			"FYEAR" => "2", 
			"GETENV" => "2", 
			"GETID" => "2", 
			"GROWTH" => "2", 
			"HOUR" => "2", 
			"ID" => "2", 
			"INISCAN" => "2", 
			"INTERP" => "2", 
			"IRR" => "2", 
			"LARGEST" => "2", 
			"LAST" => "2", 
			"LASTCASE" => "2", 
			"LASTDATE" => "2", 
			"LASTERROR" => "2", 
			"LASTVALUE" => "2", 
			"LAVE" => "2", 
			"LENGTHCASE" => "2", 
			"LENGTHDATE" => "2", 
			"LIST" => "2", 
			"LISTACCESS" => "2", 
			"LMAX" => "2", 
			"LMEDIAN" => "2", 
			"LMIN" => "2", 
			"LOCATION" => "2", 
			"LOG" => "2", 
			"LOG10" => "2", 
			"LOOKUP" => "2", 
			"LOWER" => "2", 
			"LPROD" => "2", 
			"LSTDDEV" => "2", 
			"LSUM" => "2", 
			"LTRIM" => "2", 
			"LVAR" => "2", 
			"MA" => "2", 
			"MAGIC" => "2", 
			"MAKE" => "2", 
			"MAKEDATE" => "2", 
			"MAVE" => "2", 
			"MAVEC" => "2", 
			"MAX" => "2", 
			"MAXCASE" => "2", 
			"MAXDATE" => "2", 
			"MCORR" => "2", 
			"MEAN" => "2", 
			"MEDIAN" => "2", 
			"MERGE" => "2", 
			"MIN" => "2", 
			"MINCASE" => "2", 
			"MINDATE" => "2", 
			"MINUTE" => "2", 
			"MIRROR" => "2", 
			"MISSING" => "2", 
			"MMAX" => "2", 
			"MMEDIAN" => "2", 
			"MMIN" => "2", 
			"MONTH" => "2", 
			"MPROD" => "2", 
			"MSTDDEV" => "2", 
			"MSUM" => "2", 
			"MVAR" => "2", 
			"NAMELOC" => "2", 
			"NL" => "2", 
			"NORMAL" => "2", 
			"NOW" => "2", 
			"NPV" => "2", 
			"NUMFMT" => "2", 
			"OVERLAY" => "2", 
			"PACF" => "2", 
			"PAD" => "2", 
			"PAYBACK" => "2", 
			"PCT" => "2", 
			"PENDING" => "2", 
			"PERIOD" => "2", 
			"PIXELS" => "2", 
			"POINTS" => "2", 
			"PRECFMT" => "2", 
			"PROD" => "2", 
			"REALNAME" => "2", 
			"REMEVAL" => "2", 
			"REPEAT" => "2", 
			"REVERSE" => "2", 
			"ROBLOC" => "2", 
			"ROBVAR" => "2", 
			"ROUND" => "2", 
			"RTRIM" => "2", 
			"SANNPCT" => "2", 
			"SARIMA" => "2", 
			"SCAN" => "2", 
			"SCREENINFO" => "2", 
			"SCRIPT" => "2", 
			"SECOND" => "2", 
			"SELECTNAMES" => "2", 
			"SHIFT" => "2", 
			"SHIFTMTN" => "2", 
			"SHIFTYR" => "2", 
			"SIGN" => "2", 
			"SIN" => "2", 
			"SL" => "2", 
			"SLICE" => "2", 
			"SMALLEST" => "2", 
			"SORTDATA" => "2", 
			"SORTINDEX" => "2", 
			"SORTNAME" => "2", 
			"SOURCE" => "2", 
			"SPECIAL" => "2", 
			"SQRT" => "2", 
			"STDDEV" => "2", 
			"STRING" => "2", 
			"STUFF" => "2", 
			"SUBSTRING" => "2", 
			"SUM" => "2", 
			"SYSTEM" => "2", 
			"SYSTEMERROR" => "2", 
			"THISDAY" => "2", 
			"TODAY" => "2", 
			"TRIM" => "2", 
			"TRUNC" => "2", 
			"UNIFORM" => "2", 
			"UNIQUE" => "2", 
			"UPDATED" => "2", 
			"UPPER" => "2", 
			"VAR" => "2", 
			"WEEKDAY" => "2", 
			"WILDLIST" => "2", 
			"WILDNAMES" => "2", 
			"WINFRAMEINFO" => "2", 
			"WININFO" => "2", 
			"WRITEACCT" => "2", 
			"YTD" => "2", 
			"YTYDIFF" => "2", 
			"YTYPCT" => "2", 
			"ACCEPT" => "3", 
			"ACTIVATE" => "3", 
			"ADJUST" => "3", 
			"APPLY" => "3", 
			"ARGUMENT" => "3", 
			"ASSOCIATE" => "4", 
			"ATTRIBUTE" => "3", 
			"BACKTO" => "3", 
			"BEST" => "3", 
			"BLANK" => "3", 
			"BLOCK" => "3", 
			"BUFFER" => "3", 
			"CANCEL" => "3", 
			"CATALOG" => "3", 
			"CATCH" => "3", 
			"CD" => "3", 
			"CHECK" => "3", 
			"CLEAR" => "3", 
			"CLOSE" => "3", 
			"COMPILE" => "3", 
			"CONCEAL" => "3", 
			"CONNECT" => "3", 
			"COPY" => "3", 
			"CORRELATE" => "3", 
			"CREATE" => "3", 
			"DATA" => "3", 
			"DBSTATUS" => "3", 
			"DEACTIVATED" => "3", 
			"DELETE" => "3", 
			"DISCONNECT" => "3", 
			"DISPLAY" => "3", 
			"DOCUMENTATION" => "4", 
			"DOWN" => "3", 
			"DRAW" => "3", 
			"EDIT" => "3", 
			"ELSE" => "3", 
			"END" => "3", 
			"ENDOGENIZE" => "3", 
			"ENTER" => "3", 
			"ENTRY" => "3", 
			"ESCAPE" => "3", 
			"EXECUTE" => "3", 
			"EXHIBIT" => "3", 
			"EXIT" => "3", 
			"EXOGENIZE" => "3", 
			"EXTRADOTS" => "4", 
			"EXTRAPOLATE" => "3", 
			"FIND" => "3", 
			"FIT" => "3", 
			"FOOTING" => "3", 
			"FORM" => "3", 
			"FORMULA" => "3", 
			"FUNCTION" => "3", 
			"GET" => "3", 
			"GHOST" => "3", 
			"GLFORMULA" => "3", 
			"GLNAME" => "3", 
			"GOTO" => "3", 
			"GRAPH" => "3", 
			"HEADING" => "3", 
			"HELP" => "3", 
			"HIDE" => "3", 
			"IF" => "3", 
			"INCLUDE" => "3", 
			"INFO" => "3", 
			"INITIALIZE" => "3", 
			"INPUT" => "3", 
			"INSERT" => "3", 
			"LEAVE" => "3", 
			"LINE" => "3", 
			"LOAD" => "3", 
			"LOCAL" => "3", 
			"LOOP" => "3", 
			"MARKING" => "3", 
			"MENU" => "3", 
			"MESSAGE" => "3", 
			"MODEL" => "3", 
			"MODIFY" => "3", 
			"MOVE" => "3", 
			"NEW" => "3", 
			"NEWPAGE" => "3", 
			"NEXT" => "3", 
			"NOTE" => "3", 
			"OPEN" => "3", 
			"OUTPUT" => "3", 
			"OTHERWISE" => "3", 
			"PICTURE" => "3", 
			"PIE" => "3", 
			"POST" => "3", 
			"PRINT" => "3", 
			"PROCEDURE" => "3", 
			"PROMPT" => "3", 
			"QUIT" => "3", 
			"RABORT" => "3", 
			"RASSERT" => "3", 
			"RATTRIBUTE" => "3", 
			"RCOMMIT" => "3", 
			"RCOPY" => "3", 
			"RDELETE" => "3", 
			"READ" => "3", 
			"RECALCULATE" => "3", 
			"REDO" => "3", 
			"REENTER" => "3", 
			"REFILE" => "3", 
			"REFRESH" => "3", 
			"REGION" => "3", 
			"RENAME" => "3", 
			"REOPEN" => "3", 
			"RESET" => "3", 
			"RESIGNAL" => "3", 
			"RETURN" => "3", 
			"REVEAL" => "3", 
			"RRENAME" => "3", 
			"RSET" => "3", 
			"RUN" => "3", 
			"SAVE" => "3", 
			"SCORE" => "3", 
			"SEARCH" => "3", 
			"SELECT" => "3", 
			"SET" => "3", 
			"SETENV" => "3", 
			"SIGNAL" => "3", 
			"SLEEP" => "3", 
			"STEST" => "3", 
			"STROKE" => "3", 
			"SUBSTITUTE" => "3", 
			"SUMMARIZE" => "3", 
			"TERMINATE" => "3", 
			"TRY" => "3", 
			"THEN" => "3", 
			"UNGHOST" => "3", 
			"UNLOAD" => "3", 
			"UNSAVE" => "3", 
			"UNSETENV" => "3", 
			"UP" => "3", 
			"UPDATE" => "3", 
			"VALIDATE" => "3", 
			"VALPRINT" => "3", 
			"WHATS" => "3", 
			"WHICH" => "3", 
			"WRITE" => "3", 
			"XYGET" => "3", 
			"AMRT" => "5", 
			"AND" => "6", 
			"DIV" => "6", 
			"EQ" => "6", 
			"EQL" => "6", 
			"EXCEPT" => "6", 
			"GT" => "6", 
			"GE" => "6", 
			"INTERSECT" => "6", 
			"LT" => "6", 
			"LE" => "6", 
			"MOD" => "6", 
			"NE" => "6", 
			"NEL" => "6", 
			"NOT" => "6", 
			"OR" => "6", 
			"SUBSET" => "6", 
			"UNION" => "6", 
			"FALSE" => "7", 
			"NO" => "7", 
			"OFF" => "7", 
			"ON" => "7", 
			"TRUE" => "7", 
			"YES" => "7", 
			"AS" => "8", 
			"ANNUAL" => "8", 
			"APRIL" => "8", 
			"AUGUST" => "8", 
			"ASUNDAY" => "8", 
			"AMONDAY" => "8", 
			"ATUESDAY" => "8", 
			"AWEDNESDAY" => "8", 
			"ATHURSDAY" => "8", 
			"AFRIDAY" => "8", 
			"ASATURDAY" => "8", 
			"AUTO" => "8", 
			"BUSINESS" => "8", 
			"BIWEEKLY" => "8", 
			"BSUNDAY" => "8", 
			"BMONDAY" => "8", 
			"BTUESDAY" => "8", 
			"BWEDNESDAY" => "8", 
			"BTHURSDAY" => "8", 
			"BFRIDAY" => "8", 
			"BSATURDAY" => "8", 
			"BIMONTHLY" => "8", 
			"BY" => "8", 
			"BREAK" => "8", 
			"CIRCLE" => "8", 
			"COMPLETE" => "8", 
			"DAILY" => "8", 
			"DOT" => "8", 
			"DECEMBER" => "8", 
			"DASH" => "8", 
			"DIALOG" => "8", 
			"DMAX" => "8", 
			"DMIN" => "8", 
			"FEBURARY" => "8", 
			"FOR" => "8", 
			"FULL" => "8", 
			"HOURLY" => "8", 
			"HORIZONTAL" => "8", 
			"INDEXED" => "8", 
			"IN" => "8", 
			"INFINITY" => "8", 
			"JANUARY" => "8", 
			"JUNE" => "8", 
			"JULY" => "8", 
			"KEYBOARD" => "8", 
			"MAJOR" => "8", 
			"MONTHLY" => "8", 
			"MARCH" => "8", 
			"MAY" => "8", 
			"MINUTELY" => "8", 
			"NOVEMBER" => "8", 
			"NC" => "8", 
			"NA" => "8", 
			"ND" => "8", 
			"NEWLINE" => "8", 
			"NUMERIC" => "8", 
			"NAMELIST" => "8", 
			"N" => "8", 
			"NEGINFINITY" => "8", 
			"NOARG" => "8", 
			"NONE" => "8", 
			"NOTHING" => "8", 
			"NULL" => "8", 
			"OCTOBER" => "8", 
			"PPY" => "8", 
			"PRECISION" => "8", 
			"QUARTERLY" => "8", 
			"QUOTE" => "8", 
			"SEMIANNUAL" => "8", 
			"SEPTEMBER" => "8", 
			"SECONDLY" => "8", 
			"SHARED" => "8", 
			"STARMAGICDATE" => "8", 
			"TENDAY" => "8", 
			"TWICEMONTH" => "8", 
			"TO" => "8", 
			"TRIANGLE" => "8", 
			"TERMINAL" => "8", 
			"WARNING" => "8", 
			"WEEKLY(MONDAY)" => "8", 
			"WEEKLY(TUESDAY)" => "8", 
			"WEEKLY(WEDNESDAY)" => "8", 
			"WEEKLY(THURSDAY)" => "8", 
			"WEEKLY(FRIDAY)" => "8", 
			"WEEKLY(SATURDAY)" => "8", 
			"WEEKLY(SUNDAY)" => "8", 
			"WORK" => "8", 
			"YPP" => "8");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"4" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing", 
			"7" => "donothing", 
			"8" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
