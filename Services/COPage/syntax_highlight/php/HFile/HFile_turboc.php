<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_turboc extends HFile{
   function HFile_turboc(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// Turbo C++
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("{");
$this->unindent          	= array("}");

// String characters and delimiters

$this->stringchars       	= array("\"", "'");
$this->delimiters        	= array("~", "!", "@", "%", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("//");
$this->blockcommenton    	= array("/*");
$this->blockcommentoff   	= array("*/");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"#define" => "1", 
			"#elif" => "1", 
			"#else" => "1", 
			"#endif" => "1", 
			"#if" => "1", 
			"#ifdef" => "1", 
			"#ifndef" => "1", 
			"#include" => "1", 
			"#line" => "1", 
			"#pragma" => "1", 
			"#undef" => "1", 
			"auto" => "2", 
			"break" => "2", 
			"case" => "2", 
			"cdecl" => "2", 
			"char" => "2", 
			"const" => "2", 
			"continue" => "2", 
			"default" => "2", 
			"do" => "2", 
			"double" => "2", 
			"else" => "2", 
			"enum" => "2", 
			"extern" => "2", 
			"far" => "2", 
			"float" => "2", 
			"for" => "2", 
			"fortran" => "2", 
			"goto" => "2", 
			"huge" => "2", 
			"if" => "2", 
			"int" => "2", 
			"label" => "2", 
			"long" => "2", 
			"near" => "2", 
			"pascal" => "2", 
			"register" => "2", 
			"return" => "2", 
			"short" => "2", 
			"signed" => "2", 
			"sizeof" => "2", 
			"static" => "2", 
			"struct" => "2", 
			"switch" => "2", 
			"typedef" => "2", 
			"union" => "2", 
			"unsigned" => "2", 
			"void" => "2", 
			"volatile" => "2", 
			"while" => "2", 
			"FP_OFF" => "3", 
			"FP_SEG" => "3", 
			"MK_FP" => "3", 
			"_OvrInitEms" => "3", 
			"_OvrInitExt" => "3", 
			"___emit___" => "3", 
			"_chmod" => "3", 
			"_clear87" => "3", 
			"_close" => "3", 
			"_control87" => "3", 
			"_creat" => "3", 
			"_exit" => "3", 
			"_fpreset" => "3", 
			"_graphfreemem" => "3", 
			"_graphgetmem" => "3", 
			"_lrotl" => "3", 
			"_lrotr" => "3", 
			"_open" => "3", 
			"_read" => "3", 
			"_rtol" => "3", 
			"_rtor" => "3", 
			"_setcursortype" => "3", 
			"_status87" => "3", 
			"_strerror" => "3", 
			"_tolower" => "3", 
			"_toupper" => "3", 
			"_write" => "3", 
			"abort" => "3", 
			"abs" => "3", 
			"absread" => "3", 
			"abswrite" => "3", 
			"access" => "3", 
			"acos" => "3", 
			"alloc.h" => "3", 
			"allocmem" => "3", 
			"arc" => "3", 
			"arg" => "3", 
			"asctime" => "3", 
			"asin" => "3", 
			"assert" => "3", 
			"assert.h" => "3", 
			"atan" => "3", 
			"atan2" => "3", 
			"atexit" => "3", 
			"atof" => "3", 
			"atoi" => "3", 
			"atol" => "3", 
			"bar" => "3", 
			"bar3d" => "3", 
			"bcd" => "3", 
			"bcd.h" => "3", 
			"bdos" => "3", 
			"bdosptr" => "3", 
			"bios.h" => "3", 
			"bioscom" => "3", 
			"biosdisk" => "3", 
			"bioskey" => "3", 
			"biosmemory" => "3", 
			"biosprint" => "3", 
			"biostime" => "3", 
			"bisoequip" => "3", 
			"brk" => "3", 
			"bsearch" => "3", 
			"cabs" => "3", 
			"calloc" => "3", 
			"ceil" => "3", 
			"cgets" => "3", 
			"chdir" => "3", 
			"chmod" => "3", 
			"chsize" => "3", 
			"circle" => "3", 
			"cleardevice" => "3", 
			"clearerr" => "3", 
			"clearviewport" => "3", 
			"clock" => "3", 
			"close" => "3", 
			"closegraph" => "3", 
			"clreol" => "3", 
			"clrscr" => "3", 
			"complex" => "3", 
			"complex.h" => "3", 
			"conio.h" => "3", 
			"conj" => "3", 
			"coreleft" => "3", 
			"cos" => "3", 
			"cosh" => "3", 
			"country" => "3", 
			"cprintf" => "3", 
			"cputs" => "3", 
			"creat" => "3", 
			"creatnew" => "3", 
			"creattemp" => "3", 
			"cscanf" => "3", 
			"ctime" => "3", 
			"ctrlbrk" => "3", 
			"ctype.h" => "3", 
			"delay" => "3", 
			"delline" => "3", 
			"detectgraph" => "3", 
			"difftime" => "3", 
			"dir.h" => "3", 
			"disable" => "3", 
			"div" => "3", 
			"dos.h" => "3", 
			"dosexterr" => "3", 
			"dostounix" => "3", 
			"drawpoly" => "3", 
			"dup" => "3", 
			"dup2" => "3", 
			"ecvt" => "3", 
			"errno.h" => "3", 
			"execl" => "3", 
			"execle" => "3", 
			"execlp" => "3", 
			"execlpe" => "3", 
			"execv" => "3", 
			"execve" => "3", 
			"execvp" => "3", 
			"execvpe" => "3", 
			"exit" => "3", 
			"exp" => "3", 
			"fabs" => "3", 
			"farcalloc" => "3", 
			"farcoreleft" => "3", 
			"farfree" => "3", 
			"farheapcheck" => "3", 
			"farheapcheckfree" => "3", 
			"farheapchecknode" => "3", 
			"farheapfillfree" => "3", 
			"farheapwalk" => "3", 
			"farmalloc" => "3", 
			"farrealloc" => "3", 
			"fclose" => "3", 
			"fcloseall" => "3", 
			"fcntl.h" => "3", 
			"fcvt" => "3", 
			"fdopen" => "3", 
			"feof" => "3", 
			"ferror" => "3", 
			"fflush" => "3", 
			"fgetc" => "3", 
			"fgetchar" => "3", 
			"fgetpos" => "3", 
			"fgets" => "3", 
			"filelength" => "3", 
			"fileno" => "3", 
			"fillellipse" => "3", 
			"fillpoly" => "3", 
			"findfirst" => "3", 
			"findnext" => "3", 
			"float.h" => "3", 
			"floodfill" => "3", 
			"floor" => "3", 
			"flushall" => "3", 
			"fnmerge" => "3", 
			"fnsplit" => "3", 
			"fopen" => "3", 
			"fprintf" => "3", 
			"fputc" => "3", 
			"fputchar" => "3", 
			"fputs" => "3", 
			"fread" => "3", 
			"free" => "3", 
			"freemem" => "3", 
			"freopen" => "3", 
			"frexp" => "3", 
			"fscanf" => "3", 
			"fseek" => "3", 
			"fsetpos" => "3", 
			"fstat" => "3", 
			"fstream.h" => "3", 
			"ftell" => "3", 
			"ftime" => "3", 
			"fwrite" => "3", 
			"gcvt" => "3", 
			"generic.h" => "3", 
			"geninterrupt" => "3", 
			"getarccoords" => "3", 
			"getaspectratio" => "3", 
			"getbkcolor" => "3", 
			"getc" => "3", 
			"getcbrk" => "3", 
			"getch" => "3", 
			"getchar" => "3", 
			"getche" => "3", 
			"getcolor" => "3", 
			"getcurdir" => "3", 
			"getcwd" => "3", 
			"getdate" => "3", 
			"getdefaultpalette" => "3", 
			"getdfree" => "3", 
			"getdisk" => "3", 
			"getdrivername" => "3", 
			"getdta" => "3", 
			"getenv" => "3", 
			"getfat" => "3", 
			"getfatd" => "3", 
			"getfillpattern" => "3", 
			"getfillsettings" => "3", 
			"getmasy" => "3", 
			"getmaxcolor" => "3", 
			"getmaxmode" => "3", 
			"getmaxx" => "3", 
			"getmodename" => "3", 
			"getmoderange" => "3", 
			"getpalette" => "3", 
			"getpalettesize" => "3", 
			"getpass" => "3", 
			"getpid" => "3", 
			"getpixel" => "3", 
			"getpsp" => "3", 
			"gets" => "3", 
			"gettestinfo" => "3", 
			"gettext" => "3", 
			"gettextsettings" => "3", 
			"gettime" => "3", 
			"getvect" => "3", 
			"getverify" => "3", 
			"getviewsettings" => "3", 
			"getw" => "3", 
			"getx" => "3", 
			"gety" => "3", 
			"gmtime" => "3", 
			"gotoxy" => "3", 
			"graphdefaults" => "3", 
			"grapherrormsg" => "3", 
			"graphics.h" => "3", 
			"graphresult" => "3", 
			"harderr" => "3", 
			"hardresume" => "3", 
			"hardretn" => "3", 
			"heapcheck" => "3", 
			"heapcheckfree" => "3", 
			"heapchecknode" => "3", 
			"heapfillfree" => "3", 
			"heapwalk" => "3", 
			"highvideo" => "3", 
			"hypot" => "3", 
			"imag" => "3", 
			"imagesize" => "3", 
			"initgraph" => "3", 
			"inp" => "3", 
			"inport" => "3", 
			"inportb" => "3", 
			"insline" => "3", 
			"installuserdriver" => "3", 
			"installuserfont" => "3", 
			"int86" => "3", 
			"int86x" => "3", 
			"intdos" => "3", 
			"intdosx" => "3", 
			"intr" => "3", 
			"io.h" => "3", 
			"ioctl" => "3", 
			"iomanip.h" => "3", 
			"iostream.h" => "3", 
			"isalnum" => "3", 
			"isalpha" => "3", 
			"isascii" => "3", 
			"isatty" => "3", 
			"iscntrl" => "3", 
			"isdigit" => "3", 
			"isgraph" => "3", 
			"islower" => "3", 
			"isprint" => "3", 
			"ispunct" => "3", 
			"isspace" => "3", 
			"isupper" => "3", 
			"isxdigit" => "3", 
			"itoa" => "3", 
			"kbhit" => "3", 
			"keep" => "3", 
			"labs" => "3", 
			"ldexp" => "3", 
			"ldiv" => "3", 
			"lfind" => "3", 
			"limits.h" => "3", 
			"line" => "3", 
			"linerel" => "3", 
			"lineto" => "3", 
			"locale.h" => "3", 
			"localeconv" => "3", 
			"localtime" => "3", 
			"lock" => "3", 
			"log" => "3", 
			"log10" => "3", 
			"longjmp" => "3", 
			"lowvideo" => "3", 
			"lsearch" => "3", 
			"lseek" => "3", 
			"ltoa" => "3", 
			"malloc" => "3", 
			"math.h" => "3", 
			"matherr" => "3", 
			"max" => "3", 
			"mem.h" => "3", 
			"memccpy" => "3", 
			"memchr" => "3", 
			"memcmp" => "3", 
			"memcpy" => "3", 
			"memicmp" => "3", 
			"memmove" => "3", 
			"memset" => "3", 
			"min" => "3", 
			"mkdir" => "3", 
			"mktemp" => "3", 
			"mktime" => "3", 
			"modf" => "3", 
			"movedata" => "3", 
			"movemem" => "3", 
			"moverel" => "3", 
			"movetext" => "3", 
			"moveto" => "3", 
			"norm" => "3", 
			"normvideo" => "3", 
			"nosound" => "3", 
			"open" => "3", 
			"outp" => "3", 
			"outport" => "3", 
			"outportb" => "3", 
			"outtext" => "3", 
			"outtextxy" => "3", 
			"parsfnm" => "3", 
			"peek" => "3", 
			"peekb" => "3", 
			"perror" => "3", 
			"pieslice" => "3", 
			"poke" => "3", 
			"pokeb" => "3", 
			"polar" => "3", 
			"poly" => "3", 
			"pow" => "3", 
			"pow10" => "3", 
			"printf" => "3", 
			"process.h" => "3", 
			"putc" => "3", 
			"putch" => "3", 
			"putchar" => "3", 
			"putenv" => "3", 
			"putimage" => "3", 
			"putpixel" => "3", 
			"puts" => "3", 
			"puttext" => "3", 
			"putw" => "3", 
			"qsort" => "3", 
			"raise" => "3", 
			"rand" => "3", 
			"randbrd" => "3", 
			"randbwr" => "3", 
			"random" => "3", 
			"randomsize" => "3", 
			"read" => "3", 
			"real" => "3", 
			"realloc" => "3", 
			"rectangle" => "3", 
			"registerbgidriver" => "3", 
			"registerbgifont" => "3", 
			"remove" => "3", 
			"rename" => "3", 
			"restorecrtmode" => "3", 
			"rewind" => "3", 
			"rmdir" => "3", 
			"sbrk" => "3", 
			"scanf" => "3", 
			"searchpath" => "3", 
			"sector" => "3", 
			"segread" => "3", 
			"setactivepage" => "3", 
			"setallpalette" => "3", 
			"setaspectratio" => "3", 
			"setbkcolor" => "3", 
			"setblock" => "3", 
			"setbuf" => "3", 
			"setcbrk" => "3", 
			"setcolor" => "3", 
			"setdate" => "3", 
			"setdisk" => "3", 
			"setdta" => "3", 
			"setfillpattern" => "3", 
			"setfillstyle" => "3", 
			"setftime" => "3", 
			"setgraphbufsize" => "3", 
			"setgraphmode" => "3", 
			"setjmp" => "3", 
			"setjmp.h" => "3", 
			"setlinestyle" => "3", 
			"setlocale" => "3", 
			"setmem" => "3", 
			"setmode" => "3", 
			"setpalette" => "3", 
			"setrgbpalette" => "3", 
			"settextjustify" => "3", 
			"settextstyle" => "3", 
			"settime" => "3", 
			"setusercharsize" => "3", 
			"setvbuf" => "3", 
			"setvect" => "3", 
			"setverify" => "3", 
			"setviewport" => "3", 
			"setvisualpage" => "3", 
			"setwritemode" => "3", 
			"share.h" => "3", 
			"signal" => "3", 
			"signal.h" => "3", 
			"sin" => "3", 
			"sinh" => "3", 
			"sleep" => "3", 
			"sopen" => "3", 
			"spawn" => "3", 
			"spawnl" => "3", 
			"spawnle" => "3", 
			"spawnlp" => "3", 
			"spawnlpe" => "3", 
			"spawnv" => "3", 
			"spawnve" => "3", 
			"spawnvp" => "3", 
			"spawnvpe" => "3", 
			"sprintf" => "3", 
			"sqrt" => "3", 
			"srand" => "3", 
			"sscanf" => "3", 
			"stat" => "3", 
			"stat.h" => "3", 
			"stdarg.h" => "3", 
			"stddef.h" => "3", 
			"stdio.h" => "3", 
			"stdiostr.h" => "3", 
			"stdlib.h" => "3", 
			"stime" => "3", 
			"stpcpy" => "3", 
			"strcat" => "3", 
			"strchr" => "3", 
			"strcmp" => "3", 
			"strcmpi" => "3", 
			"strcoll" => "3", 
			"strcpy" => "3", 
			"strcspn" => "3", 
			"strdup" => "3", 
			"stream.h" => "3", 
			"strerror" => "3", 
			"strftime" => "3", 
			"stricmp" => "3", 
			"string.h" => "3", 
			"strlen" => "3", 
			"strlwr" => "3", 
			"strncat" => "3", 
			"strncmp" => "3", 
			"strncmpi" => "3", 
			"strncpy" => "3", 
			"strnicmp" => "3", 
			"strnset" => "3", 
			"strpbrk" => "3", 
			"strrchr" => "3", 
			"strrev" => "3", 
			"strset" => "3", 
			"strspn" => "3", 
			"strstr" => "3", 
			"strstrea.h" => "3", 
			"strtod" => "3", 
			"strtok" => "3", 
			"strtol" => "3", 
			"strtoul" => "3", 
			"strupr" => "3", 
			"strxfrm" => "3", 
			"swab" => "3", 
			"system" => "3", 
			"tan" => "3", 
			"tanh" => "3", 
			"tell" => "3", 
			"textattr" => "3", 
			"textbackground" => "3", 
			"textcolor" => "3", 
			"textheight" => "3", 
			"textmode" => "3", 
			"textwidth" => "3", 
			"time" => "3", 
			"time.h" => "3", 
			"timeb.h" => "3", 
			"tmpfile" => "3", 
			"tmpnam" => "3", 
			"toascii" => "3", 
			"tolower" => "3", 
			"toupper" => "3", 
			"types.h" => "3", 
			"tzset" => "3", 
			"ultoa" => "3", 
			"umask" => "3", 
			"ungetc" => "3", 
			"ungetch" => "3", 
			"unixtodos" => "3", 
			"unlink" => "3", 
			"unlock" => "3", 
			"va_arg" => "3", 
			"va_end" => "3", 
			"va_start" => "3", 
			"values.h" => "3", 
			"vfprintf" => "3", 
			"vfscanf" => "3", 
			"vprintf" => "3", 
			"vscanf" => "3", 
			"vsprintf" => "3", 
			"vsscanf" => "3", 
			"wherex" => "3", 
			"wherey" => "3", 
			"window" => "3", 
			"write" => "3", 
			"EOF" => "4", 
			"FILE" => "4", 
			"NULL" => "4", 
			"SEEK_CUR" => "4", 
			"SEEK_END" => "4", 
			"SEEK_SET" => "4", 
			"size_t" => "4", 
			"!" => "5", 
			"$" => "5", 
			"&" => "5", 
			"(" => "5", 
			")" => "5", 
			"*" => "5", 
			"+" => "5", 
			"," => "5", 
			"-" => "5", 
			"." => "5", 
			"//" => "5", 
			"/" => "5", 
			":" => "5", 
			";" => "5", 
			"<" => "5", 
			"=" => "5", 
			">" => "5", 
			"[" => "5", 
			"]" => "5", 
			"{" => "5", 
			"|" => "5", 
			"}" => "5", 
			"~" => "5");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
