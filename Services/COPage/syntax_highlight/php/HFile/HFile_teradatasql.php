<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_teradatasql extends HFile{
   function HFile_teradatasql(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// Teradata SQL
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "gray", "purple");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array();
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"ABORT" => "1", 
			"ABORTSESSION" => "1", 
			"ABS" => "1", 
			"ACCESS_LOCK" => "1", 
			"ACCOUNT" => "1", 
			"ADD" => "1", 
			"ADD_MONTHS" => "1", 
			"AFTER" => "1", 
			"ALIAS" => "1", 
			"ALL" => "1", 
			"ALTER" => "1", 
			"AMP" => "1", 
			"AND" => "1", 
			"ANSIDATE" => "1", 
			"ANY" => "1", 
			"AS" => "1", 
			"ASC" => "1", 
			"ASCII" => "1", 
			"AT" => "1", 
			"ATOMIC" => "1", 
			"AUTHORIZATION" => "1", 
			"AVE" => "1", 
			"AVERAGE" => "1", 
			"AVG" => "1", 
			"BACKUP" => "1", 
			"BEFORE" => "1", 
			"BEGIN" => "1", 
			"BETWEEN" => "1", 
			"BOTH" => "1", 
			"BT" => "1", 
			"BUT" => "1", 
			"BY" => "1", 
			"BYTE" => "1", 
			"BYTEINT" => "1", 
			"BYTES" => "1", 
			"CASE" => "1", 
			"CASESPECIFIC" => "1", 
			"CAST" => "1", 
			"CD" => "1", 
			"CHAR" => "1", 
			"CHAR2HEXINT" => "1", 
			"CHARACTER" => "1", 
			"CHARACTERS" => "1", 
			"CHARACTER_LENGTH" => "1", 
			"CHARS" => "1", 
			"CHAR_LENGTH" => "1", 
			"CHECK" => "1", 
			"CHECKPOINT" => "1", 
			"CHECKSUM" => "1", 
			"CLUSTER" => "1", 
			"CM" => "1", 
			"COALESCE" => "1", 
			"COLLATION" => "1", 
			"COLLECT" => "1", 
			"COLUMN" => "1", 
			"COMMENT" => "1", 
			"COMMIT" => "1", 
			"COMPRESS" => "1", 
			"CONSTRAINT" => "1", 
			"CONVERT" => "1", 
			"CONVERT_TABLE_HEADER" => "1", 
			"COUNT" => "1", 
			"CREATE" => "1", 
			"CROSS" => "1", 
			"CS" => "1", 
			"CSUM" => "1", 
			"CT" => "1", 
			"CURRENT" => "1", 
			"CURRENT_DATE" => "1", 
			"CURRENT_TIME" => "1", 
			"CURRENT_TIMESTAMP" => "1", 
			"CURSOR" => "1", 
			"CV" => "1", 
			"DATABASE" => "1", 
			"DATABLOCKSIZE" => "1", 
			"DATE" => "1", 
			"DATEFORM" => "1", 
			"DAY" => "1", 
			"DEC" => "1", 
			"DECIMAL" => "1", 
			"DEFAULT" => "1", 
			"DEL" => "1", 
			"DELETE" => "1", 
			"DESC" => "1", 
			"DESCRIPTOR" => "1", 
			"DIAGNOSTIC" => "1", 
			"DISABLED" => "1", 
			"DISTINCT" => "1", 
			"DOUBLE" => "1", 
			"DROP" => "1", 
			"DUAL" => "1", 
			"DUMP" => "1", 
			"EACH" => "1", 
			"EBCDIC" => "1", 
			"ECHO" => "1", 
			"ELSE" => "1", 
			"ENABLED" => "1", 
			"END" => "1", 
			"EQ" => "1", 
			"ERROR" => "1", 
			"ERRORFILES" => "1", 
			"ERRORTABLES" => "1", 
			"ESCAPE" => "1", 
			"ET" => "1", 
			"EXCEPT" => "1", 
			"EXCL" => "1", 
			"EXCLUSIVE" => "1", 
			"EXEC" => "1", 
			"EXECUTE" => "1", 
			"EXISTS" => "1", 
			"EXP" => "1", 
			"EXPLAIN" => "1", 
			"EXTRACT" => "1", 
			"FALLBACK" => "1", 
			"FASTEXPORT" => "1", 
			"FIRST" => "1", 
			"FLOAT" => "1", 
			"FOR" => "1", 
			"FOREIGN" => "1", 
			"FORMAT" => "1", 
			"FREESPACE" => "1", 
			"FROM" => "1", 
			"FULL" => "1", 
			"GE" => "1", 
			"GIVE" => "1", 
			"GLOBAL" => "1", 
			"GO" => "1", 
			"GOTO" => "1", 
			"GRANT" => "1", 
			"GRAPHIC" => "1", 
			"GROUP" => "1", 
			"GT" => "1", 
			"HASH" => "1", 
			"HASHAMP" => "1", 
			"HASHBAKAMP" => "1", 
			"HASHBUCKET" => "1", 
			"HASHROW" => "1", 
			"HAVING" => "1", 
			"HELP" => "1", 
			"HOUR" => "1", 
			"IMMEDIATE" => "1", 
			"IN" => "1", 
			"INCONSISTENT" => "1", 
			"INDEX" => "1", 
			"INDICATOR" => "1", 
			"INITIATE" => "1", 
			"INNER" => "1", 
			"INS" => "1", 
			"INSERT" => "1", 
			"INSTEAD" => "1", 
			"INT" => "1", 
			"INTEGER" => "1", 
			"INTEGERDATE" => "1", 
			"INTERSECT" => "1", 
			"INTERVAL" => "1", 
			"INTO" => "1", 
			"IS" => "1", 
			"JOIN" => "1", 
			"JOURNAL" => "1", 
			"KANJI1" => "1", 
			"KANJISJIS" => "1", 
			"KBYTES" => "1", 
			"KEY" => "1", 
			"KILOBYTES" => "1", 
			"LAST" => "1", 
			"LATIN" => "1", 
			"LE" => "1", 
			"LEADING" => "1", 
			"LEFT" => "1", 
			"LEVEL" => "1", 
			"LIKE" => "1", 
			"LN" => "1", 
			"LOADING" => "1", 
			"LOCAL" => "1", 
			"LOCK" => "1", 
			"LOCKING" => "1", 
			"LOG" => "1", 
			"LOGGING" => "1", 
			"LOGON" => "1", 
			"LONG" => "1", 
			"LOWER" => "1", 
			"LT" => "1", 
			"MACRO" => "1", 
			"MAVG" => "1", 
			"MAX" => "1", 
			"MAXIMUM" => "1", 
			"MCHARACTERS" => "1", 
			"MDIFF" => "1", 
			"MIN" => "1", 
			"MINDEX" => "1", 
			"MINIMUM" => "1", 
			"MINUS" => "1", 
			"MINUTE" => "1", 
			"MLINREG" => "1", 
			"MLOAD" => "1", 
			"MOD" => "1", 
			"MODE" => "1", 
			"MODIFY" => "1", 
			"MONITOR" => "1", 
			"MONRESOURCE" => "1", 
			"MONSESSION" => "1", 
			"MONTH" => "1", 
			"MSUBSTR" => "1", 
			"MSUM" => "1", 
			"MULTISET" => "1", 
			"NAMED" => "1", 
			"NATURAL" => "1", 
			"NE" => "1", 
			"NEW" => "1", 
			"NEW_TABLE" => "1", 
			"NO" => "1", 
			"NOT" => "1", 
			"NOWAIT" => "1", 
			"NULL" => "1", 
			"NULLIF" => "1", 
			"NULLIFZERO" => "1", 
			"NUMERIC" => "1", 
			"OCTET_LENGTH" => "1", 
			"OF" => "1", 
			"OFF" => "1", 
			"OLD" => "1", 
			"OLD_TABLE" => "1", 
			"ON" => "1", 
			"OPTION" => "1", 
			"OR" => "1", 
			"ORDER" => "1", 
			"OUTER" => "1", 
			"OVERLAP" => "1", 
			"OVERLAPS" => "1", 
			"OVERRIDE" => "1", 
			"PASSWORD" => "1", 
			"PERCENT" => "1", 
			"PERM" => "1", 
			"PERMANENT" => "1", 
			"PN" => "1", 
			"POSITION" => "1", 
			"PRECISION" => "1", 
			"PRESERVE" => "1", 
			"PRIMARY" => "1", 
			"PRIVATE" => "1", 
			"PRIVILEGES" => "1", 
			"PROTECTION" => "1", 
			"PUBLIC" => "1", 
			"QUALIFY" => "1", 
			"QUANTILE" => "1", 
			"RANK" => "1", 
			"READ" => "1", 
			"REAL" => "1", 
			"REFERENCES" => "1", 
			"REFERENCING" => "1", 
			"RELEASE" => "1", 
			"RENAME" => "1", 
			"REPLACE" => "1", 
			"REPLICATION" => "1", 
			"REPOVERRIDE" => "1", 
			"REQUEST" => "1", 
			"RESTART" => "1", 
			"RESTORE" => "1", 
			"RESUME" => "1", 
			"RET" => "1", 
			"RETRIEVE" => "1", 
			"REVALIDATE" => "1", 
			"REVOKE" => "1", 
			"RIGHT" => "1", 
			"RIGHTS" => "1", 
			"ROLE" => "1", 
			"ROLLBACK" => "1", 
			"ROLLFORWARD" => "1", 
			"ROW" => "1", 
			"ROWID" => "1", 
			"SAMPLE" => "1", 
			"SAMPLEID" => "1", 
			"SECOND" => "1", 
			"SEL" => "1", 
			"SELECT" => "1", 
			"SESSION" => "1", 
			"SET" => "1", 
			"SETRESRATE" => "1", 
			"SETSESSRATE" => "1", 
			"SHARE" => "1", 
			"SHOW" => "1", 
			"SMALLINT" => "1", 
			"SOME" => "1", 
			"SPOOL" => "1", 
			"SQRT" => "1", 
			"SS" => "1", 
			"STARTUP" => "1", 
			"STATEMENT" => "1", 
			"STATISTICS" => "1", 
			"STRING_CHK" => "1", 
			"STRING_CS" => "1", 
			"SUBSCRIBER" => "1", 
			"SUBSTR" => "1", 
			"SUBSTRING" => "1", 
			"SUM" => "1", 
			"SUSPEND" => "1", 
			"SYS_CALENDAR" => "1", 
			"TABLE" => "1", 
			"TBL_CS" => "1", 
			"TEMPORARY" => "1", 
			"TERMINATE" => "1", 
			"THEN" => "1", 
			"TIME" => "1", 
			"TIMESTAMP" => "1", 
			"TIMEZONE_HOUR" => "1", 
			"TIMEZONE_MINUTE" => "1", 
			"TITLE" => "1", 
			"TO" => "1", 
			"TRAILING" => "1", 
			"TRANSACTION" => "1", 
			"TRANSLATE" => "1", 
			"TRANSLATE_CHK" => "1", 
			"TRIGGER" => "1", 
			"TRIM" => "1", 
			"TYPE" => "1", 
			"UC" => "1", 
			"UNDEFINED" => "1", 
			"UNICODE" => "1", 
			"UNION" => "1", 
			"UNIQUE" => "1", 
			"UPD" => "1", 
			"UPDATE" => "1", 
			"UPPER" => "1", 
			"UPPERCASE" => "1", 
			"USER" => "1", 
			"USING" => "1", 
			"VALUES" => "1", 
			"VARBYTE" => "1", 
			"VARCHAR" => "1", 
			"VARGRAPHIC" => "1", 
			"VARYING" => "1", 
			"VIEW" => "1", 
			"VOLATILE" => "1", 
			"WAIT" => "1", 
			"WHEN" => "1", 
			"WHERE" => "1", 
			"WITH" => "1", 
			"WORK" => "1", 
			"WRITE" => "1", 
			"YEAR" => "1", 
			"ZEROIFNULL" => "1", 
			"ZONE" => "1", 
			"=" => "3", 
			"BTEQ" => "2", 
			"CHARSET" => "2", 
			"CMS" => "2", 
			"CONTROLS" => "2", 
			"DEFAULTS" => "2", 
			"ECHOREQ" => "2", 
			"ERRORLEVEL" => "2", 
			"ERROROUT" => "2", 
			"EXECUTION" => "2", 
			"EXIT" => "2", 
			"EXPORT" => "2", 
			"FOLDLINE" => "2", 
			"FOOTING" => "2", 
			"FORMCHAR" => "2", 
			"HALT" => "2", 
			"HANG" => "2", 
			"HEADING" => "2", 
			"IF" => "2", 
			"IMPORT" => "2", 
			"INDICDATA" => "2", 
			"LABEL" => "2", 
			"LOGOFF" => "2", 
			"MAXERROR" => "2", 
			"OMIT" => "2", 
			"PAGEBREAK" => "2", 
			"PAGELENGTH" => "2", 
			"QUIET" => "2", 
			"QUIT" => "2", 
			"RECORDMODE" => "2", 
			"REMARK" => "2", 
			"REPEAT" => "2", 
			"RETCANCEL" => "2", 
			"RETLIMIT" => "2", 
			"RETRY" => "2", 
			"RTITLE" => "2", 
			"RUN" => "2", 
			"SEPARATOR" => "2", 
			"SESSIONS" => "2", 
			"SIDETITLES" => "2", 
			"SKIPDOUBLE" => "2", 
			"SKIPLINE" => "2", 
			"SQLFLAG" => "2", 
			"SUPPRESS" => "2", 
			"TDP" => "2", 
			"TITLEDASHES" => "2", 
			"TSO" => "2", 
			"UNDERLINE" => "2", 
			"VERSIONS" => "2", 
			"WIDTH" => "2", 
			"!" => "3", 
			"\"" => "3", 
			"$" => "3", 
			"%" => "3", 
			"&" => "3", 
			"'" => "3", 
			"(" => "3", 
			")" => "3", 
			"*" => "3", 
			"+" => "3", 
			"," => "3", 
			"-" => "3", 
			"." => "3", 
			":" => "3", 
			";" => "3", 
			"<" => "3", 
			">" => "3", 
			"?" => "3", 
			"@" => "3", 
			"[" => "3", 
			"\\" => "3", 
			"]" => "3", 
			"^" => "3", 
			"{" => "3", 
			"|" => "3", 
			"}" => "3", 
			"~" => "3");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"3" => "donothing", 
			"2" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
