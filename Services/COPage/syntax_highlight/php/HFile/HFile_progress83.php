<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_progress83 extends HFile{
   function HFile_progress83(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// Progress 8.3
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("~", "!", "@", "$", "%", "^", "&", "*", "(", ")", "+", "=", "|", "\\", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("/*");
$this->blockcommentoff   	= array("*/");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"{" => "1", 
			"}" => "1", 
			"ACCUM" => "1", 
			"ACCUMULATE" => "1", 
			"ACTIVE-WINDOW" => "1", 
			"ADD" => "1", 
			"ALIAS" => "1", 
			"ALL" => "1", 
			"ALTER" => "1", 
			"AMBIG" => "1", 
			"AMBIGUOUS" => "1", 
			"ANALYZE" => "1", 
			"AND" => "1", 
			"ANY" => "1", 
			"APPLY" => "1", 
			"AS" => "1", 
			"ASC" => "1", 
			"ASCENDING" => "1", 
			"ASSIGN" => "1", 
			"AT" => "1", 
			"ATTR-SPACE" => "1", 
			"AUTHORIZATION" => "1", 
			"AUTO-RETURN" => "1", 
			"AVAIL" => "1", 
			"AVAILABLE" => "1", 
			"BACKGROUND" => "1", 
			"BEFORE-HIDE" => "1", 
			"BEGINS" => "1", 
			"BELL" => "1", 
			"BETWEEN" => "1", 
			"BLANK" => "1", 
			"BREAK" => "1", 
			"BTOS" => "1", 
			"BUFFER-COMPARE" => "1", 
			"BUFFER-COPY" => "1", 
			"BY" => "1", 
			"CALL" => "1", 
			"CAN-DO" => "1", 
			"CAN-FIND" => "1", 
			"CASE" => "1", 
			"CASE-SENSITIVE" => "1", 
			"CENTER" => "1", 
			"CENTERED" => "1", 
			"CHECK" => "1", 
			"CHR" => "1", 
			"CLEAR" => "1", 
			"CLIPBOARD" => "1", 
			"COL" => "1", 
			"COLON" => "1", 
			"COLOR" => "1", 
			"COLUMN" => "1", 
			"COLUMN-LABEL" => "1", 
			"COLUMNS" => "1", 
			"COMPILER" => "1", 
			"CONNECTED" => "1", 
			"CONTROL" => "1", 
			"COUNT-OF" => "1", 
			"CPSTREAM" => "1", 
			"CREATE" => "1", 
			"CTOS" => "1", 
			"CURRENT" => "1", 
			"CURRENT-CHANGED" => "1", 
			"CURRENT-LANG" => "1", 
			"CURRENT-LANGUAGE" => "1", 
			"CURRENT-WINDOW" => "1", 
			"CURSOR" => "1", 
			"DATABASE" => "1", 
			"DATASERVERS" => "1", 
			"DBCODEPAGE" => "1", 
			"DBCOLLATION" => "1", 
			"DBNAME" => "1", 
			"DBRESTRICTIONS" => "1", 
			"DBTYPE" => "1", 
			"DBVERSION" => "1", 
			"DDE" => "1", 
			"DEBLANK" => "1", 
			"DEBUG-LIST" => "1", 
			"DEBUGGER" => "1", 
			"DECIMALS" => "1", 
			"DECLARE" => "1", 
			"DEF" => "1", 
			"DEFAULT" => "1", 
			"DEFAULT-NOXLATE" => "1", 
			"DEFAULT-WINDOW" => "1", 
			"DEFINE" => "1", 
			"DELETE" => "1", 
			"DELIMITER" => "1", 
			"DESC" => "1", 
			"DESCENDING" => "1", 
			"DICT" => "1", 
			"DICTIONARY" => "1", 
			"DISABLE" => "1", 
			"DISCONNECT" => "1", 
			"DISP" => "1", 
			"DISPLAY" => "1", 
			"DISTINCT" => "1", 
			"DO" => "1", 
			"DOS" => "1", 
			"DOWN" => "1", 
			"DROP" => "1", 
			"EACH" => "1", 
			"EDITING" => "1", 
			"ELSE" => "1", 
			"ENABLE" => "1", 
			"ENCODE" => "1", 
			"END" => "1", 
			"ENTRY" => "1", 
			"ERROR-STATUS" => "1", 
			"ESCAPE" => "1", 
			"ETIME" => "1", 
			"EXCEPT" => "1", 
			"EXCLUSIVE" => "1", 
			"EXCLUSIVE-LOCK" => "1", 
			"EXISTS" => "1", 
			"EXPORT" => "1", 
			"FALSE" => "1", 
			"FETCH" => "1", 
			"FIELD" => "1", 
			"FIELDS" => "1", 
			"FILE-INFO" => "1", 
			"FILE-INFORMATION" => "1", 
			"FILL" => "1", 
			"FIND" => "1", 
			"FIND-CASE-SENSITIVE" => "1", 
			"FIND-GLOBAL" => "1", 
			"FIND-NEXT-OCCURRENCE" => "1", 
			"FIND-PREV-OCCURRENCE" => "1", 
			"FIND-SELECT" => "1", 
			"FIND-WRAP-AROUND" => "1", 
			"FIRST" => "1", 
			"FIRST-OF" => "1", 
			"FOCUS" => "1", 
			"FONT" => "1", 
			"FONT-BASED-GRID" => "1", 
			"FOR" => "1", 
			"FORM" => "1", 
			"FORMAT" => "1", 
			"FRAME" => "1", 
			"FRAME-COL" => "1", 
			"FRAME-DB" => "1", 
			"FRAME-DOWN" => "1", 
			"FRAME-FIELD" => "1", 
			"FRAME-FILE" => "1", 
			"FRAME-INDEX" => "1", 
			"FRAME-LINE" => "1", 
			"FRAME-NAME" => "1", 
			"FRAME-ROW" => "1", 
			"FRAME-VAL" => "1", 
			"FRAME-VALUE" => "1", 
			"FROM" => "1", 
			"FROM-CHARS" => "1", 
			"FROM-PIXELS" => "1", 
			"GATEWAYS" => "1", 
			"GET-BYTE" => "1", 
			"GET-CODEPAGES" => "1", 
			"GET-COLLATIONS" => "1", 
			"GET-KEY-VALUE" => "1", 
			"GETBYTE" => "1", 
			"GLOBAL" => "1", 
			"GO-ON" => "1", 
			"GO-PENDING" => "1", 
			"GRANT" => "1", 
			"GRAPHIC-EDGE" => "1", 
			"GROUP" => "1", 
			"HAVING" => "1", 
			"HEADER" => "1", 
			"HELP" => "1", 
			"HIDE" => "1", 
			"IF" => "1", 
			"IMPORT" => "1", 
			"IN" => "1", 
			"INDEX" => "1", 
			"INDICATOR" => "1", 
			"INPUT" => "1", 
			"INPUT-OUTPUT" => "1", 
			"INSERT" => "1", 
			"INTO" => "1", 
			"IS" => "1", 
			"IS-ATTR-SPACE" => "1", 
			"JOIN" => "1", 
			"KBLABEL" => "1", 
			"KEY-CODE" => "1", 
			"KEY-FUNCTION" => "1", 
			"KEY-LABEL" => "1", 
			"KEYCODE" => "1", 
			"KEYFUNCTION" => "1", 
			"KEYLABEL" => "1", 
			"KEYS" => "1", 
			"KEYWORD" => "1", 
			"LABEL" => "1", 
			"LAST" => "1", 
			"LAST-EVENT" => "1", 
			"LAST-KEY" => "1", 
			"LAST-OF" => "1", 
			"LASTKEY" => "1", 
			"LDBNAME" => "1", 
			"LEAVE" => "1", 
			"LIBRARY" => "1", 
			"LIKE" => "1", 
			"LINE-COUNT" => "1", 
			"LINE-COUNTER" => "1", 
			"LISTING" => "1", 
			"LOCKED" => "1", 
			"LOOKUP" => "1", 
			"MACHINE-CLASS" => "1", 
			"MAP" => "1", 
			"MEMBER" => "1", 
			"MESSAGE" => "1", 
			"MESSAGE-LINES" => "1", 
			"MOUSE" => "1", 
			"MPE" => "1", 
			"NEW" => "1", 
			"NEXT" => "1", 
			"NEXT-PROMPT" => "1", 
			"NO" => "1", 
			"NO-ATTR-SPACE" => "1", 
			"NO-ERROR" => "1", 
			"NO-FILL" => "1", 
			"NO-HELP" => "1", 
			"NO-HIDE" => "1", 
			"NO-LABEL" => "1", 
			"NO-LABELS" => "1", 
			"NO-LOCK" => "1", 
			"NO-MAP" => "1", 
			"NO-MESSAGE" => "1", 
			"NO-PAUSE" => "1", 
			"NO-PREFETCH" => "1", 
			"NO-UNDO" => "1", 
			"NO-VALIDATE" => "1", 
			"NO-WAIT" => "1", 
			"NOT" => "1", 
			"NULL" => "1", 
			"NUM-ALIASES" => "1", 
			"NUM-DBS" => "1", 
			"NUM-ENTRIES" => "1", 
			"OF" => "1", 
			"OFF" => "1", 
			"OLD" => "1", 
			"ON" => "1", 
			"OPEN" => "1", 
			"OPSYS" => "1", 
			"OPTION" => "1", 
			"OR" => "1", 
			"OS-APPEND" => "1", 
			"OS-COMMAND" => "1", 
			"OS-COPY" => "1", 
			"OS-CREATE-DIR" => "1", 
			"OS-DELETE" => "1", 
			"OS-DIR" => "1", 
			"OS-RENAME" => "1", 
			"OS2" => "1", 
			"OS400" => "1", 
			"OTHERWISE" => "1", 
			"OUTPUT" => "1", 
			"OVERLAY" => "1", 
			"PAGE" => "1", 
			"PAGE-BOTTOM" => "1", 
			"PAGE-NUM" => "1", 
			"PAGE-NUMBER" => "1", 
			"PAGE-TOP" => "1", 
			"PARAM" => "1", 
			"PARAMETER" => "1", 
			"PAUSE" => "1", 
			"PDBNAME" => "1", 
			"PERSISTENT" => "1", 
			"PIXELS" => "1", 
			"PREPROCESS" => "1", 
			"PRIVILEGES" => "1", 
			"PROC-HANDLE" => "1", 
			"PROC-STATUS" => "1", 
			"PROCESS" => "1", 
			"PROGRAM-NAME" => "1", 
			"PROGRESS" => "1", 
			"PROMPT" => "1", 
			"PROMPT-FOR" => "1", 
			"PROMSGS" => "1", 
			"PROPATH" => "1", 
			"PROVERSION" => "1", 
			"PUT" => "1", 
			"PUT-BYTE" => "1", 
			"PUT-KEY-VALUE" => "1", 
			"PUTBYTE" => "1", 
			"QUERY" => "1", 
			"QUERY-TUNING" => "1", 
			"QUIT" => "1", 
			"R-INDEX" => "1", 
			"RCODE-INFORMATION" => "1", 
			"READKEY" => "1", 
			"RECID" => "1", 
			"RECORD-LENGTH" => "1", 
			"RECTANGLE" => "1", 
			"RELEASE" => "1", 
			"REPEAT" => "1", 
			"REPOSITION" => "1", 
			"RETAIN" => "1", 
			"RETRY" => "1", 
			"RETURN" => "1", 
			"REVERT" => "1", 
			"REVOKE" => "1", 
			"RUN" => "1", 
			"SAVE" => "1", 
			"SCHEMA" => "1", 
			"SCREEN" => "1", 
			"SCREEN-IO" => "1", 
			"SCREEN-LINES" => "1", 
			"SCROLL" => "1", 
			"SDBNAME" => "1", 
			"SEARCH" => "1", 
			"SEEK" => "1", 
			"SELECT" => "1", 
			"SELF" => "1", 
			"SESSION" => "1", 
			"SET" => "1", 
			"SETUSERID" => "1", 
			"SHARE" => "1", 
			"SHARE-LOCK" => "1", 
			"SHARED" => "1", 
			"SHOW-STATS" => "1", 
			"SKIP" => "1", 
			"SOME" => "1", 
			"SPACE" => "1", 
			"STATUS" => "1", 
			"STREAM" => "1", 
			"STREAM-IO" => "1", 
			"STRING-XREF" => "1", 
			"SYSTEM-DIALOG" => "1", 
			"TABLE" => "1", 
			"TERM" => "1", 
			"TERMINAL" => "1", 
			"TEXT" => "1", 
			"TEXT-CURSOR" => "1", 
			"TEXT-SEG-GROWTH" => "1", 
			"THEN" => "1", 
			"THIS-PROCEDURE" => "1", 
			"TIME" => "1", 
			"TITLE" => "1", 
			"TO" => "1", 
			"TOP-ONLY" => "1", 
			"TRANS" => "1", 
			"TRANSACTION" => "1", 
			"TRIGGER" => "1", 
			"TRIGGERS" => "1", 
			"TRIM" => "1", 
			"TRUE" => "1", 
			"UNDERLINE" => "1", 
			"UNDO" => "1", 
			"UNFORMATTED" => "1", 
			"UNION" => "1", 
			"UNIQUE" => "1", 
			"UNIX" => "1", 
			"UP" => "1", 
			"UPDATE" => "1", 
			"USE-INDEX" => "1", 
			"USE-REVVIDEO" => "1", 
			"USE-UNDERLINE" => "1", 
			"USER" => "1", 
			"USERID" => "1", 
			"USING" => "1", 
			"V6FRAME" => "1", 
			"VALUE" => "1", 
			"VALUES" => "1", 
			"VIEW" => "1", 
			"VIEW-AS" => "1", 
			"VMS" => "1", 
			"WAIT-FOR" => "1", 
			"WHEN" => "1", 
			"WHERE" => "1", 
			"WHILE" => "1", 
			"WINDOW" => "1", 
			"WINDOW-MAXIMIZED" => "1", 
			"WINDOW-MINIMIZED" => "1", 
			"WINDOW-NORMAL" => "1", 
			"WITH" => "1", 
			"WORK-TABLE" => "1", 
			"WORKFILE" => "1", 
			"WRITE" => "1", 
			"XCODE" => "1", 
			"XREF" => "1", 
			"YES" => "1", 
			"_CBIT" => "1", 
			"_CONTROL" => "1", 
			"_DCM" => "1", 
			"_LIST" => "1", 
			"_MEMORY" => "1", 
			"_MSG" => "1", 
			"_PCONTROL" => "1", 
			"_SERIAL-NUM" => "1", 
			"_TRACE" => "1", 
			"ABS" => "2", 
			"ABSOLUTE" => "2", 
			"ACCELERATOR" => "2", 
			"ACROSS" => "2", 
			"ADD-FIRST" => "2", 
			"ADD-LAST" => "2", 
			"ADVISE" => "2", 
			"ALERT-BOX" => "2", 
			"ALLOW-REPLICATION" => "2", 
			"ANSI-ONLY" => "2", 
			"ANYWHERE" => "2", 
			"APPEND" => "2", 
			"APPL-ALERT" => "2", 
			"APPL-ALERT-BOXES" => "2", 
			"APPLICATION" => "2", 
			"AS-CURSOR" => "2", 
			"ASK-OVERWRITE" => "2", 
			"ATTACHMENT" => "2", 
			"AUTO-END-KEY" => "2", 
			"AUTO-ENDKEY" => "2", 
			"AUTO-GO" => "2", 
			"AUTO-INDENT" => "2", 
			"AUTO-RESIZE" => "2", 
			"AUTO-ZAP" => "2", 
			"AVAILABLE-FORMATS" => "2", 
			"AVERAGE" => "2", 
			"AVG" => "2", 
			"BACKWARDS" => "2", 
			"BASE-KEY" => "2", 
			"BATCH" => "2", 
			"BATCH-MODE" => "2", 
			"BGC" => "2", 
			"BGCOLOR" => "2", 
			"BINARY" => "2", 
			"BIND-WHERE" => "2", 
			"BLOCK-ITERATION-DISPLAY" => "2", 
			"BORDER-BOTTOM" => "2", 
			"BORDER-BOTTOM-CHARS" => "2", 
			"BORDER-BOTTOM-PIXELS" => "2", 
			"BORDER-LEFT" => "2", 
			"BORDER-LEFT-CHARS" => "2", 
			"BORDER-LEFT-PIXELS" => "2", 
			"BORDER-RIGHT" => "2", 
			"BORDER-RIGHT-CHARS" => "2", 
			"BORDER-RIGHT-PIXELS" => "2", 
			"BORDER-TOP" => "2", 
			"BORDER-TOP-CHARS" => "2", 
			"BORDER-TOP-PIXELS" => "2", 
			"BOTH" => "2", 
			"BOTTOM" => "2", 
			"BOX" => "2", 
			"BOX-SELECT" => "2", 
			"BOX-SELECTABLE" => "2", 
			"BROWSE" => "2", 
			"BROWSE-HEADER" => "2", 
			"BTN-DOWN-ARROW" => "2", 
			"BTN-LEFT-ARROW" => "2", 
			"BTN-RIGHT-ARROW" => "2", 
			"BTN-UP-ARROW" => "2", 
			"BUFFER" => "2", 
			"BUFFER-CHARS" => "2", 
			"BUFFER-LINES" => "2", 
			"BUTTON" => "2", 
			"BUTTONS" => "2", 
			"CACHE" => "2", 
			"CACHE-SIZE" => "2", 
			"CAN-QUERY" => "2", 
			"CAN-SET" => "2", 
			"CANCEL-BREAK" => "2", 
			"CANCEL-BUTTON" => "2", 
			"CAPS" => "2", 
			"CDECL" => "2", 
			"CHAR" => "2", 
			"CHARACTER" => "2", 
			"CHARACTER_LENGTH" => "2", 
			"CHARSET" => "2", 
			"CHECKED" => "2", 
			"CHOOSE" => "2", 
			"CLEAR-SELECT" => "2", 
			"CLEAR-SELECTION" => "2", 
			"CLOSE" => "2", 
			"CODE" => "2", 
			"CODEPAGE" => "2", 
			"CODEPAGE-CONVERT" => "2", 
			"COL-OF" => "2", 
			"COLON-ALIGN" => "2", 
			"COLON-ALIGNED" => "2", 
			"COLOR-TABLE" => "2", 
			"COLUMN-BGCOLOR" => "2", 
			"COLUMN-DCOLOR" => "2", 
			"COLUMN-FGCOLOR" => "2", 
			"COLUMN-FONT" => "2", 
			"COLUMN-LABEL-BGCOLOR" => "2", 
			"COLUMN-LABEL-DCOLOR" => "2", 
			"COLUMN-LABEL-FGCOLOR" => "2", 
			"COLUMN-LABEL-FONT" => "2", 
			"COLUMN-OF" => "2", 
			"COLUMN-SCROLLING" => "2", 
			"COM1" => "2", 
			"COM2" => "2", 
			"COM3" => "2", 
			"COM4" => "2", 
			"COM5" => "2", 
			"COM6" => "2", 
			"COM7" => "2", 
			"COM8" => "2", 
			"COM9" => "2", 
			"COMBO-BOX" => "2", 
			"COM-HANDLE" => "2", 
			"COMMAND" => "2", 
			"COMPILE" => "2", 
			"COMPLETE" => "2", 
			"CON" => "2", 
			"CONNECT" => "2", 
			"CONSTRAINED" => "2", 
			"CONTAINS" => "2", 
			"CONTENTS" => "2", 
			"CONTEXT" => "2", 
			"CONTEXT-POPUP" => "2", 
			"CONTROL-CONTAINER" => "2", 
			"CONVERT" => "2", 
			"CONVERT-TO-OFFSET" => "2", 
			"COUNT" => "2", 
			"CPCASE" => "2", 
			"CPCOLL" => "2", 
			"CPINTERNAL" => "2", 
			"CPLOG" => "2", 
			"CPPRINT" => "2", 
			"CPRCODEIN" => "2", 
			"CPRCODEOUT" => "2", 
			"CPTERM" => "2", 
			"CRC-VALUE" => "2", 
			"CREATE-CONTROL" => "2", 
			"CREATE-RESULT-LIST-ENTRY" => "2", 
			"CREATE-TEST-FILE" => "2", 
			"CURRENT-COLUMN" => "2", 
			"CURRENT-ITERATION" => "2", 
			"CURRENT-RESULT-ROW" => "2", 
			"CURRENT-ROW-MODIFIED" => "2", 
			"CURRENT-VALUE" => "2", 
			"CURRENT_DATE" => "2", 
			"CURSOR-CHAR" => "2", 
			"CURSOR-LINE" => "2", 
			"CURSOR-OFFSET" => "2", 
			"DATA-ENTRY-RETURN" => "2", 
			"DATA-TYPE" => "2", 
			"DATE" => "2", 
			"DATE-FORMAT" => "2", 
			"DAY" => "2", 
			"DB-REFERENCES" => "2", 
			"DCOLOR" => "2", 
			"DDE-ERROR" => "2", 
			"DDE-ID" => "2", 
			"DDE-ITEM" => "2", 
			"DDE-NAME" => "2", 
			"DDE-TOPIC" => "2", 
			"DEBUG" => "2", 
			"DEC" => "2", 
			"DECIMAL" => "2", 
			"DEFAULT-BUTTON" => "2", 
			"DEFAULT-EXTENSION" => "2", 
			"DEFINED" => "2", 
			"DELETE-CHAR" => "2", 
			"DELETE-CURRENT-ROW" => "2", 
			"DELETE-LINE" => "2", 
			"DELETE-SELECTED-ROW" => "2", 
			"DELETE-SELECTED-ROWS" => "2", 
			"DESELECT-FOCUSED-ROW" => "2", 
			"DESELECT-ROWS" => "2", 
			"DESELECT-SELECTED-ROW" => "2", 
			"DESIGN-MODE" => "2", 
			"DIALOG-BOX" => "2", 
			"DIALOG-HELP" => "2", 
			"DIR" => "2", 
			"DISABLED" => "2", 
			"DISPLAY-MESSAGE" => "2", 
			"DISPLAY-TYPE" => "2", 
			"DOUBLE" => "2", 
			"DRAG-ENABLED" => "2", 
			"DROP-DOWN" => "2", 
			"DROP-DOWN-LIST" => "2", 
			"DUMP" => "2", 
			"DYNAMIC" => "2", 
			"ECHO" => "2", 
			"EDGE" => "2", 
			"EDGE-CHARS" => "2", 
			"EDGE-PIXELS" => "2", 
			"EDITOR" => "2", 
			"EMPTY" => "2", 
			"END-KEY" => "2", 
			"ENDKEY" => "2", 
			"ENTERED" => "2", 
			"EQ" => "2", 
			"ERROR" => "2", 
			"ERROR-COL" => "2", 
			"ERROR-COLUMN" => "2", 
			"ERROR-ROW" => "2", 
			"EVENT-TYPE" => "2", 
			"EVENTS" => "2", 
			"EXECUTE" => "2", 
			"EXP" => "2", 
			"EXPAND" => "2", 
			"EXTENDED" => "2", 
			"EXTENT" => "2", 
			"EXTERNAL" => "2", 
			"EXTRACT" => "2", 
			"FETCH-SELECTED-ROW" => "2", 
			"FGC" => "2", 
			"FGCOLOR" => "2", 
			"FILE" => "2", 
			"FILE-NAME" => "2", 
			"FILE-OFFSET" => "2", 
			"FILE-TYPE" => "2", 
			"FILENAME" => "2", 
			"FILL-IN" => "2", 
			"FILLED" => "2", 
			"FILTERS" => "2", 
			"FIRST-CHILD" => "2", 
			"FIRST-COLUMN" => "2", 
			"FIRST-PROC" => "2", 
			"FIRST-PROCEDURE" => "2", 
			"FIRST-TAB-ITEM" => "2", 
			"FIXED-ONLY" => "2", 
			"FLOAT" => "2", 
			"FOCUSED-ROW" => "2", 
			"FONT-TABLE" => "2", 
			"FORCE-FILE" => "2", 
			"FOREGROUND" => "2", 
			"FORWARDS" => "2", 
			"FRAME-SPACING" => "2", 
			"FRAME-X" => "2", 
			"FRAME-Y" => "2", 
			"FREQUENCY" => "2", 
			"FROM-CURRENT" => "2", 
			"FULL-HEIGHT" => "2", 
			"FULL-HEIGHT-CHARS" => "2", 
			"FULL-HEIGHT-PIXELS" => "2", 
			"FULL-PATHNAME" => "2", 
			"FULL-WIDTH" => "2", 
			"FULL-WIDTH-CHARS" => "2", 
			"FULL-WIDTH-PIXELS" => "2", 
			"FUNCTION" => "2", 
			"GE" => "2", 
			"GET" => "2", 
			"GET-BLUE" => "2", 
			"GET-BLUE-VALUE" => "2", 
			"GET-CHAR-PROPERTY" => "2", 
			"GET-DOUBLE" => "2", 
			"GET-DYNAMIC" => "2", 
			"GET-FILE" => "2", 
			"GET-FLOAT" => "2", 
			"GET-GREEN" => "2", 
			"GET-GREEN-VALUE" => "2", 
			"GET-ITERATION" => "2", 
			"GET-LICENSE" => "2", 
			"GET-LONG" => "2", 
			"GET-MESSAGE" => "2", 
			"GET-NUMBER" => "2", 
			"GET-POINTER-VALUE" => "2", 
			"GET-RED" => "2", 
			"GET-RED-VALUE" => "2", 
			"GET-REPOSITIONED-ROW" => "2", 
			"GET-SELECTED" => "2", 
			"GET-SELECTED-WIDGET" => "2", 
			"GET-SHORT" => "2", 
			"GET-SIGNATURE" => "2", 
			"GET-SIZE" => "2", 
			"GET-STRING" => "2", 
			"GET-TAB-ITEM" => "2", 
			"GET-TEXT-HEIGHT" => "2", 
			"GET-TEXT-HEIGHT-CHARS" => "2", 
			"GET-TEXT-HEIGHT-PIXELS" => "2", 
			"GET-TEXT-WIDTH" => "2", 
			"GET-TEXT-WIDTH-CHARS" => "2", 
			"GET-TEXT-WIDTH-PIXELS" => "2", 
			"GET-UNSIGNED-SHORT" => "2", 
			"GRAYED" => "2", 
			"GRID-FACTOR-H" => "2", 
			"GRID-FACTOR-HORIZONTAL" => "2", 
			"GRID-FACTOR-V" => "2", 
			"GRID-FACTOR-VERTICAL" => "2", 
			"GRID-SET" => "2", 
			"GRID-SNAP" => "2", 
			"GRID-UNIT-HEIGHT" => "2", 
			"GRID-UNIT-HEIGHT-CHARS" => "2", 
			"GRID-UNIT-HEIGHT-PIXELS" => "2", 
			"GRID-UNIT-WIDTH" => "2", 
			"GRID-UNIT-WIDTH-CHARS" => "2", 
			"GRID-UNIT-WIDTH-PIXELS" => "2", 
			"GRID-VISIBLE" => "2", 
			"GT" => "2", 
			"HANDLE" => "2", 
			"HEIGHT" => "2", 
			"HEIGHT-CHARS" => "2", 
			"HEIGHT-PIXELS" => "2", 
			"HELP-CONTEXT" => "2", 
			"HIDDEN" => "2", 
			"HORIZONTAL" => "2", 
			"HWND" => "2", 
			"IMAGE" => "2", 
			"IMAGE-DOWN" => "2", 
			"IMAGE-INSENSITIVE" => "2", 
			"IMAGE-SIZE" => "2", 
			"IMAGE-SIZE-CHARS" => "2", 
			"IMAGE-SIZE-PIXELS" => "2", 
			"IMAGE-UP" => "2", 
			"IMMEDIATE-DISPLAY" => "2", 
			"INDEX-HINT" => "2", 
			"INDEXED-REPOSITION" => "2", 
			"INFO" => "2", 
			"INFORMATION" => "2", 
			"INIT" => "2", 
			"INITIAL" => "2", 
			"INITIAL-DIR" => "2", 
			"INITIAL-FILTER" => "2", 
			"INITIATE" => "2", 
			"INNER" => "2", 
			"INNER-CHARS" => "2", 
			"INNER-LINES" => "2", 
			"INSERT-BACKTAB" => "2", 
			"INSERT-FILE" => "2", 
			"INSERT-ROW" => "2", 
			"INSERT-STRING" => "2", 
			"INSERT-TAB" => "2", 
			"INT" => "2", 
			"INTEGER" => "2", 
			"INTERNAL-ENTRIES" => "2", 
			"IS-LEAD-BYTE" => "2", 
			"IS-ROW-SELECTED" => "2", 
			"IS-SELECTED" => "2", 
			"ITEM" => "2", 
			"ITEMS-PER-ROW" => "2", 
			"JOIN-BY-SQLDB" => "2", 
			"KEEP-FRAME-Z-ORDER" => "2", 
			"KEEP-MESSAGES" => "2", 
			"KEEP-TAB-ORDER" => "2", 
			"KEY" => "2", 
			"KEYWORD-ALL" => "2", 
			"LABEL-BGC" => "2", 
			"LABEL-BGCOLOR" => "2", 
			"LABEL-DC" => "2", 
			"LABEL-DCOLOR" => "2", 
			"LABEL-FGC" => "2", 
			"LABEL-FGCOLOR" => "2", 
			"LABEL-FONT" => "2", 
			"LABEL-PFC" => "2", 
			"LABEL-PFCOLOR" => "2", 
			"LABELS" => "2", 
			"LANGUAGES" => "2", 
			"LARGE" => "2", 
			"LARGE-TO-SMALL" => "2", 
			"LAST-CHILD" => "2", 
			"LAST-PROC" => "2", 
			"LAST-PROCEDURE" => "2", 
			"LAST-TAB-ITEM" => "2", 
			"LC" => "2", 
			"LE" => "2", 
			"LEADING" => "2", 
			"LEFT" => "2", 
			"LEFT-ALIGNED" => "2", 
			"LEFT-TRIM" => "2", 
			"LENGTH" => "2", 
			"LINE" => "2", 
			"LIST-EVENTS" => "2", 
			"LIST-ITEMS" => "2", 
			"LIST-QUERY-ATTRS" => "2", 
			"LIST-SET-ATTRS" => "2", 
			"LIST-WIDGETS" => "2", 
			"LOAD" => "2", 
			"LOAD-CONTROL" => "2", 
			"LOAD-ICON" => "2", 
			"LOAD-IMAGE" => "2", 
			"LOAD-IMAGE-DOWN" => "2", 
			"LOAD-IMAGE-INSENSITIVE" => "2", 
			"LOAD-IMAGE-UP" => "2", 
			"LOAD-MOUSE-POINTER" => "2", 
			"LOAD-SMALL-ICON" => "2", 
			"LOG" => "2", 
			"LOGICAL" => "2", 
			"LONG" => "2", 
			"LOOKAHEAD" => "2", 
			"LOWER" => "2", 
			"LPT0" => "2", 
			"LPT1" => "2", 
			"LPT2" => "2", 
			"LPT3" => "2", 
			"LPT4" => "2", 
			"LPT5" => "2", 
			"LPT6" => "2", 
			"LPT7" => "2", 
			"LPT8" => "2", 
			"LPT9" => "2", 
			"LT" => "2", 
			"MANUAL-HIGHLIGHT" => "2", 
			"MARGIN-EXTRA" => "2", 
			"MARGIN-HEIGHT" => "2", 
			"MARGIN-HEIGHT-CHARS" => "2", 
			"MARGIN-HEIGHT-PIXELS" => "2", 
			"MARGIN-WIDTH" => "2", 
			"MARGIN-WIDTH-CHARS" => "2", 
			"MARGIN-WIDTH-PIXELS" => "2", 
			"MATCHES" => "2", 
			"MAX" => "2", 
			"MAX-CHARS" => "2", 
			"MAX-DATA-GUESS" => "2", 
			"MAX-HEIGHT" => "2", 
			"MAX-HEIGHT-CHARS" => "2", 
			"MAX-HEIGHT-PIXELS" => "2", 
			"MAX-ROWS" => "2", 
			"MAX-SIZE" => "2", 
			"MAX-VALUE" => "2", 
			"MAX-WIDTH" => "2", 
			"MAX-WIDTH-CHARS" => "2", 
			"MAX-WIDTH-PIXELS" => "2", 
			"MAXIMIZE" => "2", 
			"MAXIMUM" => "2", 
			"MEMORY" => "2", 
			"MENU" => "2", 
			"MENU-BAR" => "2", 
			"MENU-ITEM" => "2", 
			"MENU-KEY" => "2", 
			"MENU-MOUSE" => "2", 
			"MENUBAR" => "2", 
			"MESSAGE-AREA" => "2", 
			"MESSAGE-AREA-FONT" => "2", 
			"MESSAGE-LINE" => "2", 
			"MIN" => "2", 
			"MIN-HEIGHT" => "2", 
			"MIN-HEIGHT-CHARS" => "2", 
			"MIN-HEIGHT-PIXELS" => "2", 
			"MIN-SIZE" => "2", 
			"MIN-VALUE" => "2", 
			"MIN-WIDTH" => "2", 
			"MIN-WIDTH-CHARS" => "2", 
			"MIN-WIDTH-PIXELS" => "2", 
			"MINIMUM" => "2", 
			"MOD" => "2", 
			"MODIFIED" => "2", 
			"MODULO" => "2", 
			"MONTH" => "2", 
			"MOUSE-POINTER" => "2", 
			"MOVABLE" => "2", 
			"MOVE-AFTER-TAB-ITEM" => "2", 
			"MOVE-BEFORE-TAB-ITEM" => "2", 
			"MOVE-COLUMN" => "2", 
			"MOVE-TO-BOTTOM" => "2", 
			"MOVE-TO-EOF" => "2", 
			"MOVE-TO-TOP" => "2", 
			"MULTIPLE" => "2", 
			"MULTIPLE-KEY" => "2", 
			"MULTITASKING-INTERVAL" => "2", 
			"MUST-EXIST" => "2", 
			"NAME" => "2", 
			"NATIVE" => "2", 
			"NE" => "2", 
			"NEW-ROW" => "2", 
			"NEXT-COLUMN" => "2", 
			"NEXT-SIBLING" => "2", 
			"NEXT-TAB-ITEM" => "2", 
			"NEXT-VALUE" => "2", 
			"NO-APPLY" => "2", 
			"NO-ASSIGN" => "2", 
			"NO-BIND-WHERE" => "2", 
			"NO-BOX" => "2", 
			"NO-COLUMN-SCROLLING" => "2", 
			"NO-CONVERT" => "2", 
			"NO-CURRENT-VALUE" => "2", 
			"NO-DEBUG" => "2", 
			"NO-DRAG" => "2", 
			"NO-ECHO" => "2", 
			"NO-INDEX-HINT" => "2", 
			"NO-JOIN-BY-SQLDB" => "2", 
			"NO-LOOKAHEAD" => "2", 
			"NO-ROW-MARKERS" => "2", 
			"NO-SCROLLING" => "2", 
			"NO-SEPARATE-CONNECTION" => "2", 
			"NO-SEPARATORS" => "2", 
			"NO-UNDERLINE" => "2", 
			"NO-WORD-WRAP" => "2", 
			"NUM-BUTTONS" => "2", 
			"NUM-COLUMNS" => "2", 
			"NUM-COPIES" => "2", 
			"NUM-FORMATS" => "2", 
			"NUM-ITEMS" => "2", 
			"NUM-ITERATIONS" => "2", 
			"NUM-LINES" => "2", 
			"NUM-LOCKED-COLUMNS" => "2", 
			"NUM-MESSAGES" => "2", 
			"NUM-RESULTS" => "2", 
			"NUM-SELECTED" => "2", 
			"NUM-SELECTED-ROWS" => "2", 
			"NUM-SELECTED-WIDGETS" => "2", 
			"NUM-TABS" => "2", 
			"NUM-TO-RETAIN" => "2", 
			"NUMERIC" => "2", 
			"NUMERIC-FORMAT" => "2", 
			"OCTET_LENGTH" => "2", 
			"OK" => "2", 
			"OK-CANCEL" => "2", 
			"ON-FRAME" => "2", 
			"ON-FRAME-BORDER" => "2", 
			"ORDINAL" => "2", 
			"ORIENTATION" => "2", 
			"OS-DRIVES" => "2", 
			"OS-ERROR" => "2", 
			"OS-GETENV" => "2", 
			"OUTER" => "2", 
			"OUTER-JOIN" => "2", 
			"OVERRIDE" => "2", 
			"OWNER" => "2", 
			"PAGE-SIZE" => "2", 
			"PAGE-WIDTH" => "2", 
			"PAGED" => "2", 
			"PARENT" => "2", 
			"PARTIAL-KEY" => "2", 
			"PASCAL" => "2", 
			"PATHNAME" => "2", 
			"PFC" => "2", 
			"PFCOLOR" => "2", 
			"PINNABLE" => "2", 
			"PIXELS-PER-COL" => "2", 
			"PIXELS-PER-COLUMN" => "2", 
			"PIXELS-PER-ROW" => "2", 
			"POPUP-MENU" => "2", 
			"POPUP-ONLY" => "2", 
			"POSITION" => "2", 
			"PRECISION" => "2", 
			"PRESELECT" => "2", 
			"PREV" => "2", 
			"PREV-COLUMN" => "2", 
			"PREV-SIBLING" => "2", 
			"PREV-TAB-ITEM" => "2", 
			"PRIMARY" => "2", 
			"PRINTER-CONTROL-HANDLE" => "2", 
			"PRINTER-SETUP" => "2", 
			"PRIVATE-DATA" => "2", 
			"PRN" => "2", 
			"PROCEDURE" => "2", 
			"PROGRESS-SOURCE" => "2", 
			"PUT-DOUBLE" => "2", 
			"PUT-FLOAT" => "2", 
			"PUT-LONG" => "2", 
			"PUT-SHORT" => "2", 
			"PUT-STRING" => "2", 
			"PUT-UNSIGNED-SHORT" => "2", 
			"QUERY-OFF-END" => "2", 
			"QUESTION" => "2", 
			"RADIO-BUTTONS" => "2", 
			"RADIO-SET" => "2", 
			"RANDOM" => "2", 
			"RAW" => "2", 
			"RAW-TRANSFER" => "2", 
			"READ-FILE" => "2", 
			"READ-ONLY" => "2", 
			"REAL" => "2", 
			"RECURSIVE" => "2", 
			"REFRESH" => "2", 
			"REFRESHABLE" => "2", 
			"REPLACE" => "2", 
			"REPLACE-SELECTION-TEXT" => "2", 
			"REPLICATION-CREATE" => "2", 
			"REPLICATION-DELETE" => "2", 
			"REPLICATION-WRITE" => "2", 
			"REQUEST" => "2", 
			"RESIZABLE" => "2", 
			"RESIZE" => "2", 
			"RETRY-CANCEL" => "2", 
			"RETURN-INSERTED" => "2", 
			"RETURN-TO-START-DIR" => "2", 
			"RETURN-VALUE" => "2", 
			"RIGHT" => "2", 
			"RIGHT-ALIGNED" => "2", 
			"RIGHT-TRIM" => "2", 
			"ROUND" => "2", 
			"ROW" => "2", 
			"ROW-MARKERS" => "2", 
			"ROW-OF" => "2", 
			"ROWID" => "2", 
			"RULE" => "2", 
			"RULE-ROW" => "2", 
			"RULE-Y" => "2", 
			"SAVE-AS" => "2", 
			"SAVE-FILE" => "2", 
			"SCREEN-VALUE" => "2", 
			"SCROLL-BARS" => "2", 
			"SCROLL-DELTA" => "2", 
			"SCROLL-HORIZ-VALUE" => "2", 
			"SCROLL-OFFSET" => "2", 
			"SCROLL-TO-CURRENT-ROW" => "2", 
			"SCROLL-TO-ITEM" => "2", 
			"SCROLL-TO-SELECTED-ROW" => "2", 
			"SCROLL-VERT-VALUE" => "2", 
			"SCROLLABLE" => "2", 
			"SCROLLBAR-H" => "2", 
			"SCROLLBAR-HORIZONTAL" => "2", 
			"SCROLLBAR-V" => "2", 
			"SCROLLBAR-VERTICAL" => "2", 
			"SCROLLED-ROW-POS" => "2", 
			"SCROLLED-ROW-POSITION" => "2", 
			"SCROLLING" => "2", 
			"SE-CHECK-POOLS" => "2", 
			"SE-ENABLE-OFF" => "2", 
			"SE-ENABLE-ON" => "2", 
			"SE-NUM-POOLS" => "2", 
			"SE-USE-MESSAGE" => "2", 
			"SECTION" => "2", 
			"SELECT-FOCUSED-ROW" => "2", 
			"SELECT-NEXT-ROW" => "2", 
			"SELECT-PREV-ROW" => "2", 
			"SELECT-REPOSITIONED-ROW" => "2", 
			"SELECT-ROW" => "2", 
			"SELECTABLE" => "2", 
			"SELECTED" => "2", 
			"SELECTED-ITEMS" => "2", 
			"SELECTION-END" => "2", 
			"SELECTION-LIST" => "2", 
			"SELECTION-START" => "2", 
			"SELECTION-TEXT" => "2", 
			"SEND" => "2", 
			"SENSITIVE" => "2", 
			"SEPARATE-CONNECTION" => "2", 
			"SEPARATORS" => "2", 
			"SET-BLUE" => "2", 
			"SET-BLUE-VALUE" => "2", 
			"SET-BREAK" => "2", 
			"SET-CELL-FOCUS" => "2", 
			"SET-CONTENTS" => "2", 
			"SET-DYNAMIC" => "2", 
			"SET-GREEN" => "2", 
			"SET-GREEN-VALUE" => "2", 
			"SET-LEAKPOINT" => "2", 
			"SET-POINTER-VALUE" => "2", 
			"SET-PROPERTY" => "2", 
			"SET-RED" => "2", 
			"SET-RED-VALUE" => "2", 
			"SET-REPOSITIONED-ROW" => "2", 
			"SET-SELECTION" => "2", 
			"SET-SIZE" => "2", 
			"SET-WAIT-STATE" => "2", 
			"SHORT" => "2", 
			"SIDE-LABEL-HANDLE" => "2", 
			"SIDE-LABELS" => "2", 
			"SILENT" => "2", 
			"SIMPLE" => "2", 
			"SINGLE" => "2", 
			"SIZE" => "2", 
			"SIZE-CHARS" => "2", 
			"SIZE-PIXELS" => "2", 
			"SLIDER" => "2", 
			"SMALLINT" => "2", 
			"SORT" => "2", 
			"SOURCE" => "2", 
			"SQL" => "2", 
			"SQRT" => "2", 
			"START" => "2", 
			"STATUS-AREA" => "2", 
			"STATUS-AREA-FONT" => "2", 
			"STATUS-BAR" => "2", 
			"STDCALL" => "2", 
			"STENCILED" => "2", 
			"STOP" => "2", 
			"STOPPED" => "2", 
			"STORED-PROCEDURE" => "2", 
			"STRING" => "2", 
			"SUB-AVERAGE" => "2", 
			"SUB-COUNT" => "2", 
			"SUB-MAX" => "2", 
			"SUB-MAXIMUM" => "2", 
			"SUB-MENU" => "2", 
			"SUB-MENU-HELP" => "2", 
			"SUB-MIN" => "2", 
			"SUB-MINIMUM" => "2", 
			"SUB-TOTAL" => "2", 
			"SUBSTITUTE" => "2", 
			"SUBSTR" => "2", 
			"SUBSTRING" => "2", 
			"SUBTYPE" => "2", 
			"SUM" => "2", 
			"SUPPRESS-WARNINGS" => "2", 
			"SYSTEM-ALERT-BOXES" => "2", 
			"SYSTEM-HELP" => "2", 
			"TAB-POSITION" => "2", 
			"TARGET" => "2", 
			"TEMP-DIR" => "2", 
			"TEMP-DIRECTORY" => "2", 
			"TEMP-TABLE" => "2", 
			"TERMINATE" => "2", 
			"TEXT-SELECTED" => "2", 
			"THREE-D" => "2", 
			"THROUGH" => "2", 
			"THRU" => "2", 
			"TIC-MARKS" => "2", 
			"TIME-SOURCE" => "2", 
			"TITLE-BGC" => "2", 
			"TITLE-BGCOLOR" => "2", 
			"TITLE-DC" => "2", 
			"TITLE-DCOLOR" => "2", 
			"TITLE-FGC" => "2", 
			"TITLE-FGCOLOR" => "2", 
			"TITLE-FONT" => "2", 
			"TO-ROWID" => "2", 
			"TODAY" => "2", 
			"TOGGLE-BOX" => "2", 
			"TOOL-BAR" => "2", 
			"TOP" => "2", 
			"TOPIC" => "2", 
			"TOTAL" => "2", 
			"TRAILING" => "2", 
			"TRUNC" => "2", 
			"TRUNCATE" => "2", 
			"TYPE" => "2", 
			"UNBUFFERED" => "2", 
			"UNLOAD" => "2", 
			"UPPER" => "2", 
			"USE" => "2", 
			"USE-DICT-EXPS" => "2", 
			"USE-FILENAME" => "2", 
			"USE-TEXT" => "2", 
			"V6DISPLAY" => "2", 
			"VALID-EVENT" => "2", 
			"VALID-HANDLE" => "2", 
			"VALIDATE" => "2", 
			"VALIDATE-CONDITION" => "2", 
			"VALIDATE-MESSAGE" => "2", 
			"VAR" => "2", 
			"VARIABLE" => "2", 
			"VERTICAL" => "2", 
			"VIRTUAL-HEIGHT" => "2", 
			"VIRTUAL-HEIGHT-CHARS" => "2", 
			"VIRTUAL-HEIGHT-PIXELS" => "2", 
			"VIRTUAL-WIDTH" => "2", 
			"VIRTUAL-WIDTH-CHARS" => "2", 
			"VIRTUAL-WIDTH-PIXELS" => "2", 
			"VISIBLE" => "2", 
			"WAIT" => "2", 
			"WARNING" => "2", 
			"WEEKDAY" => "2", 
			"WIDGET" => "2", 
			"WIDGET-ENTER" => "2", 
			"WIDGET-HANDLE" => "2", 
			"WIDGET-LEAVE" => "2", 
			"WIDGET-POOL" => "2", 
			"WIDTH" => "2", 
			"WIDTH-CHARS" => "2", 
			"WIDTH-PIXELS" => "2", 
			"WINDOW-NAME" => "2", 
			"WINDOW-STATE" => "2", 
			"WINDOW-SYSTEM" => "2", 
			"WORD-WRAP" => "2", 
			"X" => "2", 
			"X-OF" => "2", 
			"Y" => "2", 
			"Y-OF" => "2", 
			"YEAR" => "2", 
			"YES-NO" => "2", 
			"YES-NO-CANCEL" => "2", 
			"ABORT" => "3", 
			"ANY-KEY" => "3", 
			"ANY-PRINTABLE" => "3", 
			"APPEND-LINE" => "3", 
			"BACK-TAB" => "3", 
			"BACKSPACE" => "3", 
			"BLOCK" => "3", 
			"BLUE" => "3", 
			"BOTTOM-COLUMN" => "3", 
			"BREAK-LINE" => "3", 
			"BS" => "3", 
			"CANCEL" => "3", 
			"CANCEL-MOVE" => "3", 
			"CANCEL-PICK" => "3", 
			"CANCEL-RESIZE" => "3", 
			"CHOICES" => "3", 
			"CONTAINER-EVENT" => "3", 
			"COPY" => "3", 
			"CR" => "3", 
			"CTRL-ALT-DEL" => "3", 
			"CTRL-BREAK" => "3", 
			"CTRL-G" => "3", 
			"CTRL-J" => "3", 
			"CTRL-L" => "3", 
			"CURSOR-DOWN" => "3", 
			"CURSOR-LEFT" => "3", 
			"CURSOR-RIGHT" => "3", 
			"CURSOR-UP" => "3", 
			"CUT" => "3", 
			"DATA-REFRESH-LINE" => "3", 
			"DATA-REFRESH-PAGE" => "3", 
			"DDE-NOTIFY" => "3", 
			"DEFAULT-ACTION" => "3", 
			"DEFAULT-POP-UP" => "3", 
			"DEL" => "3", 
			"DEL-CHAR" => "3", 
			"DEL-LINE" => "3", 
			"DELETE-CHARACTER" => "3", 
			"DELETE-COLUMN" => "3", 
			"DELETE-END-LINE" => "3", 
			"DELETE-FIELD" => "3", 
			"DELETE-WORD" => "3", 
			"DESELECT" => "3", 
			"DESELECT-EXTEND" => "3", 
			"DESELECTION" => "3", 
			"DESELECTION-EXTEND" => "3", 
			"DISMISS-MENU" => "3", 
			"DOS-END" => "3", 
			"DOWN-ARROW" => "3", 
			"EDITOR-BACKTAB" => "3", 
			"EDITOR-TAB" => "3", 
			"EMPTY-SELECTION" => "3", 
			"END-BOX-SELECTION" => "3", 
			"END-ERROR" => "3", 
			"END-MOVE" => "3", 
			"END-RESIZE" => "3", 
			"END-SEARCH" => "3", 
			"ENTER" => "3", 
			"ENTER-MENUBAR" => "3", 
			"ERASE" => "3", 
			"ESC" => "3", 
			"EXIT" => "3", 
			"FF" => "3", 
			"FIND-NEXT" => "3", 
			"FIND-PREVIOUS" => "3", 
			"FOCUS-IN" => "3", 
			"FORMFEED" => "3", 
			"GO" => "3", 
			"GOTO" => "3", 
			"HELP-KEY" => "3", 
			"HOME" => "3", 
			"HORIZ-END" => "3", 
			"HORIZ-HOME" => "3", 
			"HORIZ-SCROLL-DRAG" => "3", 
			"INS" => "3", 
			"INS-CHAR" => "3", 
			"INS-LINE" => "3", 
			"INSERT-COLUMN" => "3", 
			"INSERT-FIELD" => "3", 
			"INSERT-FIELD-DATA" => "3", 
			"INSERT-FIELD-LABEL" => "3", 
			"INSERT-HERE" => "3", 
			"INSERT-MODE" => "3", 
			"ITERATION-CHANGED" => "3", 
			"LEFT-ARROW" => "3", 
			"LEFT-END" => "3", 
			"LEFT-MOUSE-CLICK" => "3", 
			"LEFT-MOUSE-DBLCLICK" => "3", 
			"LEFT-MOUSE-DOWN" => "3", 
			"LEFT-MOUSE-UP" => "3", 
			"LF" => "3", 
			"LINE-DEL" => "3", 
			"LINE-DOWN" => "3", 
			"LINE-ERASE" => "3", 
			"LINE-INS" => "3", 
			"LINE-LEFT" => "3", 
			"LINE-RIGHT" => "3", 
			"LINE-UP" => "3", 
			"LINEFEED" => "3", 
			"MAIN-MENU" => "3", 
			"MENU-DROP" => "3", 
			"MIDDLE-MOUSE-CLICK" => "3", 
			"MIDDLE-MOUSE-DBLCLICK" => "3", 
			"MIDDLE-MOUSE-DOWN" => "3", 
			"MIDDLE-MOUSE-UP" => "3", 
			"MOUSE-EXTEND-CLICK" => "3", 
			"MOUSE-EXTEND-DBLCLICK" => "3", 
			"MOUSE-EXTEND-DOWN" => "3", 
			"MOUSE-EXTEND-DRAG" => "3", 
			"MOUSE-EXTEND-UP" => "3", 
			"MOUSE-MENU-CLICK" => "3", 
			"MOUSE-MENU-DBLCLICK" => "3", 
			"MOUSE-MENU-DOWN" => "3", 
			"MOUSE-MENU-DRAG" => "3", 
			"MOUSE-MENU-UP" => "3", 
			"MOUSE-MOVE" => "3", 
			"MOUSE-MOVE-CLICK" => "3", 
			"MOUSE-MOVE-DBLCLICK" => "3", 
			"MOUSE-MOVE-DOWN" => "3", 
			"MOUSE-MOVE-DRAG" => "3", 
			"MOUSE-MOVE-UP" => "3", 
			"MOUSE-SELECT-CLICK" => "3", 
			"MOUSE-SELECT-DBLCLICK" => "3", 
			"MOUSE-SELECT-DOWN" => "3", 
			"MOUSE-SELECT-DRAG" => "3", 
			"MOUSE-SELECT-UP" => "3", 
			"MOVE" => "3", 
			"NEW-LINE" => "3", 
			"NEXT-ERROR" => "3", 
			"NEXT-FRAME" => "3", 
			"NEXT-PAGE" => "3", 
			"NEXT-SCRN" => "3", 
			"NEXT-WORD" => "3", 
			"OFF-END" => "3", 
			"OFF-HOME" => "3", 
			"OPEN-LINE-ABOVE" => "3", 
			"OPTIONS" => "3", 
			"OUT-OF-DATA" => "3", 
			"PAGE-DOWN" => "3", 
			"PAGE-ERASE" => "3", 
			"PAGE-LEFT" => "3", 
			"PAGE-RIGHT" => "3", 
			"PAGE-RIGHT-TEXT" => "3", 
			"PAGE-UP" => "3", 
			"PARENT-WINDOW-CLOSE" => "3", 
			"PASTE" => "3", 
			"PGDN" => "3", 
			"PGUP" => "3", 
			"PICK" => "3", 
			"PICK-AREA" => "3", 
			"PICK-BOTH" => "3", 
			"POPUP-MENU-KEY" => "3", 
			"PREV-FRAME" => "3", 
			"PREV-PAGE" => "3", 
			"PREV-SCRN" => "3", 
			"PREV-WORD" => "3", 
			"RECALL" => "3", 
			"RED" => "3", 
			"REMOVE" => "3", 
			"REPORTS" => "3", 
			"RESET" => "3", 
			"RESUME-DISPLAY" => "3", 
			"RIGHT-ARROW" => "3", 
			"RIGHT-END" => "3", 
			"RIGHT-MOUSE-CLICK" => "3", 
			"RIGHT-MOUSE-DBLCLICK" => "3", 
			"RIGHT-MOUSE-DOWN" => "3", 
			"RIGHT-MOUSE-UP" => "3", 
			"ROW-DISPLAY" => "3", 
			"ROW-ENTRY" => "3", 
			"ROW-LEAVE" => "3", 
			"SCROLL-LEFT" => "3", 
			"SCROLL-MODE" => "3", 
			"SCROLL-NOTIFY" => "3", 
			"SCROLL-RIGHT" => "3", 
			"SCROLLBAR-DRAG" => "3", 
			"SELECT-EXTEND" => "3", 
			"SELECTION" => "3", 
			"SELECTION-EXTEND" => "3", 
			"SETTINGS" => "3", 
			"SHIFT-TAB" => "3", 
			"START-BOX-SELECTION" => "3", 
			"START-EXTEND-BOX-SELECTION" => "3", 
			"START-MOVE" => "3", 
			"START-RESIZE" => "3", 
			"START-SEARCH" => "3", 
			"STOP-DISPLAY" => "3", 
			"TAB" => "3", 
			"TOP-COLUMN" => "3", 
			"U1" => "3", 
			"U10" => "3", 
			"U2" => "3", 
			"U3" => "3", 
			"U4" => "3", 
			"U5" => "3", 
			"U6" => "3", 
			"U7" => "3", 
			"U8" => "3", 
			"U9" => "3", 
			"UNIX-END" => "3", 
			"UP-ARROW" => "3", 
			"VALUE-CHANGED" => "3", 
			"WHITE" => "3", 
			"WINDOW-CLOSE" => "3", 
			"WINDOW-RESIZED" => "3", 
			"WINDOW-RESTORED" => "3", 
			"ANALYZE-RESUME" => "4", 
			"ANALYZE-SUSPEND" => "4", 
			"ELSEIF" => "4", 
			"ENDIF" => "4", 
			"GLOB" => "4", 
			"GLOBAL-DEFINE" => "4", 
			"LINE-NUMBER" => "4", 
			"SCOP" => "4", 
			"SCOPED" => "4", 
			"SCOPED-DEFINE" => "4", 
			"SEQUENCE" => "4", 
			"TEXT-HEIGHT" => "4", 
			"UNDEFINE" => "4");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
