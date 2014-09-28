<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_phphtml extends HFile{
   function HFile_phphtml(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// PHP
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple", "gray");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("{", "<?phpphp", "<?php");
$this->unindent          	= array("}", "?>");

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("~", "!", "@", "%", "^", "&", "*", "(", ")", "-", "+", "|", "\\", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?", " ");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("//");
$this->blockcommenton    	= array("/*");
$this->blockcommentoff   	= array("*/");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"__FILE__" => "1", 
			"__LINE__" => "1", 
			"array" => "1", 
			"break" => "1", 
			"case" => "1", 
			"default" => "1", 
			"define" => "1", 
			"delete" => "1", 
			"double" => "1", 
			"E_ERROR" => "1", 
			"E_WARNING" => "1", 
			"E_PARSE" => "1", 
			"E_NOTICE" => "1", 
			"E_ALL" => "1", 
			"echo" => "1", 
			"else" => "1", 
			"elseif" => "1", 
			"end" => "1", 
			"endif" => "1", 
			"endwhile" => "1", 
			"endswitch" => "1", 
			"exit" => "1", 
			"FALSE" => "1", 
			"float" => "1", 
			"for" => "1", 
			"global" => "1", 
			"if" => "1", 
			"include" => "1", 
			"int" => "1", 
			"integer" => "1", 
			"object" => "1", 
			"PHP_VERSION" => "1", 
			"PHP_OS" => "1", 
			"real" => "1", 
			"string" => "1", 
			"switch" => "1", 
			"TRUE" => "1", 
			"while" => "1", 
			"+" => "2", 
			"++" => "2", 
			"+=" => "2", 
			"." => "2", 
			".=" => "2", 
			"*" => "2", 
			"*=" => "2", 
			"-" => "2", 
			"--" => "2", 
			"-=" => "2", 
			"=" => "2", 
			"==" => "2", 
			"===" => "2", 
			"//" => "2", 
			"/" => "2", 
			"%" => "2", 
			"&" => "2", 
			"&&" => "2", 
			">" => "2", 
			">=" => "2", 
			">>" => "2", 
			"<" => "2", 
			"<=" => "2", 
			"<<" => "2", 
			"^" => "2", 
			"~" => "2", 
			"!" => "2", 
			"!=" => "2", 
			"|" => "2", 
			"||" => "2", 
			"new" => "2", 
			"and" => "2", 
			"or" => "2", 
			"xor" => "2", 
			"class" => "3", 
			"function" => "3", 
			"abs" => "4", 
			"acos" => "4", 
			"ada_afetch" => "4", 
			"ada_autocommit" => "4", 
			"ada_close" => "4", 
			"ada_commit" => "4", 
			"ada_connect" => "4", 
			"ada_exec" => "4", 
			"ada_fetchrow" => "4", 
			"ada_fieldname" => "4", 
			"ada_fieldnum" => "4", 
			"ada_fieldtype" => "4", 
			"ada_freeresult" => "4", 
			"ada_numfields" => "4", 
			"ada_numrows" => "4", 
			"ada_result" => "4", 
			"ada_resultall" => "4", 
			"ada_rollback" => "4", 
			"addslashes" => "4", 
			"apache_lookup_uri" => "4", 
			"apache_note" => "4", 
			"array_keys" => "4", 
			"array_merge" => "4", 
			"array_pop" => "4", 
			"array_push" => "4", 
			"array_shift" => "4", 
			"array_slice" => "4", 
			"array_splice" => "4", 
			"array_unshift" => "4", 
			"array_values" => "4", 
			"array_walk" => "4", 
			"arsort" => "4", 
			"asin" => "4", 
			"asort" => "4", 
			"aspell_check" => "4", 
			"aspell_check_raw" => "4", 
			"aspell_new" => "4", 
			"aspell_suggest" => "4", 
			"atan" => "4", 
			"atan2" => "4", 
			"base64_decode" => "4", 
			"base64_encode" => "4", 
			"base_convert" => "4", 
			"basename" => "4", 
			"bcadd" => "4", 
			"bccomp" => "4", 
			"bcdiv" => "4", 
			"bcmod" => "4", 
			"bcmul" => "4", 
			"bcpow" => "4", 
			"bcscale" => "4", 
			"bcsqrt" => "4", 
			"bcsub" => "4", 
			"bin2hex" => "4", 
			"bindec" => "4", 
			"ceil" => "4", 
			"chdir" => "4", 
			"checkdate" => "4", 
			"checkdnsrr" => "4", 
			"chgrp" => "4", 
			"chmod" => "4", 
			"chop" => "4", 
			"chown" => "4", 
			"chr" => "4", 
			"chunk_split" => "4", 
			"clearstatcache" => "4", 
			"closedir" => "4", 
			"closelog" => "4", 
			"compact" => "4", 
			"connection_aborted" => "4", 
			"connection_status" => "4", 
			"connection_timeout" => "4", 
			"convert_cyr_string" => "4", 
			"copy" => "4", 
			"cos" => "4", 
			"count" => "4", 
			"cpdf_add_annotation" => "4", 
			"cpdf_add_outline" => "4", 
			"cpdf_arc" => "4", 
			"cpdf_begin_text" => "4", 
			"cpdf_circle" => "4", 
			"cpdf_clip" => "4", 
			"cpdf_close" => "4", 
			"cpdf_closepath" => "4", 
			"cpdf_closepath_fill_stroke" => "4", 
			"cpdf_closepath_stroke" => "4", 
			"cpdf_continue_text" => "4", 
			"cpdf_curveto" => "4", 
			"cpdf_end_text" => "4", 
			"cpdf_endpath" => "4", 
			"cpdf_fill" => "4", 
			"cpdf_fill_stroke" => "4", 
			"cpdf_finalize" => "4", 
			"cpdf_finalize_page" => "4", 
			"cpdf_import_jpeg" => "4", 
			"cpdf_lineto" => "4", 
			"cpdf_moveto" => "4", 
			"cpdf_open" => "4", 
			"cpdf_output_buffer" => "4", 
			"cpdf_page_init" => "4", 
			"cpdf_place_inline_image" => "4", 
			"cpdf_rect" => "4", 
			"cpdf_restore" => "4", 
			"cpdf_rlineto" => "4", 
			"cpdf_rmoveto" => "4", 
			"cpdf_rotate" => "4", 
			"cpdf_save" => "4", 
			"cpdf_save_to_file" => "4", 
			"cpdf_scale" => "4", 
			"cpdf_set_char_spacing" => "4", 
			"cpdf_set_creator" => "4", 
			"cpdf_set_current_page" => "4", 
			"cpdf_set_font" => "4", 
			"cpdf_set_horiz_scaling" => "4", 
			"cpdf_set_keywords" => "4", 
			"cpdf_set_leading" => "4", 
			"cpdf_set_page_animation" => "4", 
			"cpdf_set_subject" => "4", 
			"cpdf_set_text_matrix" => "4", 
			"cpdf_set_text_pos" => "4", 
			"cpdf_set_text_rendering" => "4", 
			"cpdf_set_text_rise" => "4", 
			"cpdf_set_title" => "4", 
			"cpdf_set_word_spacing" => "4", 
			"cpdf_setdash" => "4", 
			"cpdf_setflat" => "4", 
			"cpdf_setgray" => "4", 
			"cpdf_setgray_fill" => "4", 
			"cpdf_setgray_stroke" => "4", 
			"cpdf_setlinecap" => "4", 
			"cpdf_setlinejoin" => "4", 
			"cpdf_setlinewidth" => "4", 
			"cpdf_setmiterlimit" => "4", 
			"cpdf_setrgbcolor" => "4", 
			"cpdf_setrgbcolor_fill" => "4", 
			"cpdf_setrgbcolor_stroke" => "4", 
			"cpdf_show" => "4", 
			"cpdf_show_xy" => "4", 
			"cpdf_stringwidth" => "4", 
			"cpdf_stroke" => "4", 
			"cpdf_text" => "4", 
			"cpdf_translate" => "4", 
			"crypt" => "4", 
			"current" => "4", 
			"date" => "4", 
			"dba_close" => "4", 
			"dba_delete" => "4", 
			"dba_exists" => "4", 
			"dba_fetch" => "4", 
			"dba_firstkey" => "4", 
			"dba_insert" => "4", 
			"dba_nextkey" => "4", 
			"dba_open" => "4", 
			"dba_optimize" => "4", 
			"dba_popen" => "4", 
			"dba_replace" => "4", 
			"dba_sync" => "4", 
			"dbase_add_record" => "4", 
			"dbase_close" => "4", 
			"dbase_create" => "4", 
			"dbase_delete_record" => "4", 
			"dbase_get_record" => "4", 
			"dbase_get_record_with_names" => "4", 
			"dbase_numfields" => "4", 
			"dbase_numrecords" => "4", 
			"dbase_open" => "4", 
			"dbase_pack" => "4", 
			"dbase_replace_record" => "4", 
			"dblist" => "4", 
			"dbmclose" => "4", 
			"dbmdelete" => "4", 
			"dbmexists" => "4", 
			"dbmfetch" => "4", 
			"dbmfirstkey" => "4", 
			"dbminsert" => "4", 
			"dbmnextkey" => "4", 
			"dbmopen" => "4", 
			"dbmreplace" => "4", 
			"debugger_off" => "4", 
			"debugger_on" => "4", 
			"decbin" => "4", 
			"dechex" => "4", 
			"decoct" => "4", 
			"die" => "4", 
			"dir" => "4", 
			"dirname" => "4", 
			"diskfreespace" => "4", 
			"dl" => "4", 
			"doubleval" => "4", 
			"each" => "4", 
			"easter_date" => "4", 
			"easter_days" => "4", 
			"empty" => "4", 
			"ereg" => "4", 
			"ereg_replace" => "4", 
			"eregi" => "4", 
			"eregi_replace" => "4", 
			"error_log" => "4", 
			"error_reporting" => "4", 
			"escapeshellcmd" => "4", 
			"eval" => "4", 
			"exec" => "4", 
			"exp" => "4", 
			"explode" => "4", 
			"extension_loaded" => "4", 
			"extract" => "4", 
			"fclose" => "4", 
			"fdf_close" => "4", 
			"fdf_create" => "4", 
			"fdf_get_file" => "4", 
			"fdf_get_status" => "4", 
			"fdf_get_value" => "4", 
			"fdf_next_field_name" => "4", 
			"fdf_open" => "4", 
			"fdf_save" => "4", 
			"fdf_set_ap" => "4", 
			"fdf_set_file" => "4", 
			"fdf_set_status" => "4", 
			"fdf_set_value" => "4", 
			"feof" => "4", 
			"fgetc" => "4", 
			"fgetcsv" => "4", 
			"fgets" => "4", 
			"fgetss" => "4", 
			"file" => "4", 
			"file_exists" => "4", 
			"fileatime" => "4", 
			"filectime" => "4", 
			"filegroup" => "4", 
			"fileinode" => "4", 
			"filemtime" => "4", 
			"fileowner" => "4", 
			"fileperms" => "4", 
			"filepro" => "4", 
			"filepro_fieldcount" => "4", 
			"filepro_fieldname" => "4", 
			"filepro_fieldtype" => "4", 
			"filepro_fieldwidth" => "4", 
			"filepro_retrieve" => "4", 
			"filepro_rowcount" => "4", 
			"filesize" => "4", 
			"filetype" => "4", 
			"flock" => "4", 
			"floor" => "4", 
			"flush" => "4", 
			"fopen" => "4", 
			"fpassthru" => "4", 
			"fputs" => "4", 
			"fread" => "4", 
			"frenchtojd" => "4", 
			"fseek" => "4", 
			"fsockopen" => "4", 
			"ftell" => "4", 
			"function_exists" => "4", 
			"fwrite" => "4", 
			"get_cfg_var" => "4", 
			"get_current_user" => "4", 
			"get_magic_quotes_gpc" => "4", 
			"get_magic_quotes_runtime" => "4", 
			"get_meta_tags" => "4", 
			"getallheaders" => "4", 
			"getdate" => "4", 
			"getenv" => "4", 
			"gethostbyaddr" => "4", 
			"gethostbyname" => "4", 
			"gethostbynamel" => "4", 
			"getimagesize" => "4", 
			"getlastmod" => "4", 
			"getmxrr" => "4", 
			"getmyinode" => "4", 
			"getmypid" => "4", 
			"getmyuid" => "4", 
			"getrandmax" => "4", 
			"getrusage" => "4", 
			"gettimeofday" => "4", 
			"gettype" => "4", 
			"gmdate" => "4", 
			"gmmktime" => "4", 
			"gmstrftime" => "4", 
			"gregoriantojd" => "4", 
			"gzclose" => "4", 
			"gzeof" => "4", 
			"gzfile" => "4", 
			"gzgetc" => "4", 
			"gzgets" => "4", 
			"gzgetss" => "4", 
			"gzopen" => "4", 
			"gzpassthru" => "4", 
			"gzputs" => "4", 
			"gzread" => "4", 
			"gzrewind" => "4", 
			"gzseek" => "4", 
			"gztell" => "4", 
			"gzwrite" => "4", 
			"header" => "4", 
			"hexdec" => "4", 
			"htmlentities" => "4", 
			"htmlspecialchars" => "4", 
			"hw_children" => "4", 
			"hw_childrenobj" => "4", 
			"hw_close" => "4", 
			"hw_connect" => "4", 
			"hw_cp" => "4", 
			"hw_deleteobject" => "4", 
			"hw_docbyanchor" => "4", 
			"hw_docbyanchorobj" => "4", 
			"hw_documentattributes" => "4", 
			"hw_documentbodytag" => "4", 
			"hw_documentcontent" => "4", 
			"hw_documentsetcontent" => "4", 
			"hw_documentsize" => "4", 
			"hw_edittext" => "4", 
			"hw_error" => "4", 
			"hw_errormsg" => "4", 
			"hw_free_document" => "4", 
			"hw_getanchors" => "4", 
			"hw_getanchorsobj" => "4", 
			"hw_getandlock" => "4", 
			"hw_getchildcoll" => "4", 
			"hw_getchildcollobj" => "4", 
			"hw_getchilddoccoll" => "4", 
			"hw_getchilddoccollobj" => "4", 
			"hw_getobject" => "4", 
			"hw_getobjectbyquery" => "4", 
			"hw_getobjectbyquerycoll" => "4", 
			"hw_getobjectbyquerycollobj" => "4", 
			"hw_getobjectbyqueryobj" => "4", 
			"hw_getparents" => "4", 
			"hw_getparentsobj" => "4", 
			"hw_getremote" => "4", 
			"hw_getremotechildren" => "4", 
			"hw_getsrcbydestobj" => "4", 
			"hw_gettext" => "4", 
			"hw_getusername" => "4", 
			"hw_identify" => "4", 
			"hw_incollections" => "4", 
			"hw_info" => "4", 
			"hw_inscoll" => "4", 
			"hw_insdoc" => "4", 
			"hw_insertdocument" => "4", 
			"hw_insertobject" => "4", 
			"hw_modifyobject" => "4", 
			"hw_mv" => "4", 
			"hw_new_document" => "4", 
			"hw_objrec2array" => "4", 
			"hw_outputdocument" => "4", 
			"hw_pconnect" => "4", 
			"hw_pipedocument" => "4", 
			"hw_root" => "4", 
			"hw_unlock" => "4", 
			"hw_who" => "4", 
			"ibase_bind" => "4", 
			"ibase_close" => "4", 
			"ibase_connect" => "4", 
			"ibase_execute" => "4", 
			"ibase_fetch_row" => "4", 
			"ibase_free_query" => "4", 
			"ibase_free_result" => "4", 
			"ibase_pconnect" => "4", 
			"ibase_prepare" => "4", 
			"ibase_query" => "4", 
			"ibase_timefmt" => "4", 
			"icap_close" => "4", 
			"icap_delete_event" => "4", 
			"icap_fetch_event" => "4", 
			"icap_list_alarms" => "4", 
			"icap_t_events" => "4", 
			"icap_open" => "4", 
			"icap_snooze" => "4", 
			"icap_store_event" => "4", 
			"ifx_affected_rows" => "4", 
			"ifx_blobinfile_mode" => "4", 
			"ifx_byteasvarchar" => "4", 
			"ifx_close" => "4", 
			"ifx_connect" => "4", 
			"ifx_copy_blob" => "4", 
			"ifx_create_blob" => "4", 
			"ifx_create_char" => "4", 
			"ifx_do" => "4", 
			"ifx_error" => "4", 
			"ifx_errormsg" => "4", 
			"ifx_fetch_row" => "4", 
			"ifx_fieldproperties" => "4", 
			"ifx_fieldtypes" => "4", 
			"ifx_free_blob" => "4", 
			"ifx_free_char" => "4", 
			"ifx_free_result" => "4", 
			"ifx_get_blob" => "4", 
			"ifx_get_char" => "4", 
			"ifx_getsqlca" => "4", 
			"ifx_htmltbl_result" => "4", 
			"ifx_nullformat" => "4", 
			"ifx_num_fields" => "4", 
			"ifx_num_rows" => "4", 
			"ifx_pconnect" => "4", 
			"ifx_prepare" => "4", 
			"ifx_query" => "4", 
			"ifx_textasvarchar" => "4", 
			"ifx_update_blob" => "4", 
			"ifx_update_char" => "4", 
			"ifxus_close_slob" => "4", 
			"ifxus_create_slob" => "4", 
			"ifxus_free_slob" => "4", 
			"ifxus_open_slob" => "4", 
			"ifxus_read_slob" => "4", 
			"ifxus_seek_slob" => "4", 
			"ifxus_tell_slob" => "4", 
			"ifxus_write_slob" => "4", 
			"ignore_user_abort" => "4", 
			"imagearc" => "4", 
			"imagechar" => "4", 
			"imagecharup" => "4", 
			"imagecolorallocate" => "4", 
			"imagecolorat" => "4", 
			"imagecolorclosest" => "4", 
			"imagecolorexact" => "4", 
			"imagecolorresolve" => "4", 
			"imagecolorset" => "4", 
			"imagecolorsforindex" => "4", 
			"imagecolorstotal" => "4", 
			"imagecolortransparent" => "4", 
			"imagecopyresized" => "4", 
			"imagecreate" => "4", 
			"imagecreatefromgif" => "4", 
			"imagedashedline" => "4", 
			"imagedestroy" => "4", 
			"imagefill" => "4", 
			"imagefilledpolygon" => "4", 
			"imagefilledrectangle" => "4", 
			"imagefilltoborder" => "4", 
			"imagefontheight" => "4", 
			"imagefontwidth" => "4", 
			"imagegif" => "4", 
			"imageinterlace" => "4", 
			"imageline" => "4", 
			"imageloadfont" => "4", 
			"imagepolygon" => "4", 
			"imagepsbbox" => "4", 
			"imagepsencodefont" => "4", 
			"imagepsfreefont" => "4", 
			"imagepsloadfont" => "4", 
			"imagepstext" => "4", 
			"imagerectangle" => "4", 
			"imagesetpixel" => "4", 
			"imagestring" => "4", 
			"imagestringup" => "4", 
			"imagesx" => "4", 
			"imagesy" => "4", 
			"imagettfbbox" => "4", 
			"imagettftext" => "4", 
			"imap_8bit" => "4", 
			"imap_alerts" => "4", 
			"imap_append" => "4", 
			"imap_base64" => "4", 
			"imap_binary" => "4", 
			"imap_body" => "4", 
			"imap_check" => "4", 
			"imap_clearflag_full" => "4", 
			"imap_close" => "4", 
			"imap_createmailbox" => "4", 
			"imap_delete" => "4", 
			"imap_deletemailbox" => "4", 
			"imap_errors" => "4", 
			"imap_expunge" => "4", 
			"imap_fetchbody" => "4", 
			"imap_fetchheader" => "4", 
			"imap_fetchstructure" => "4", 
			"imap_getmailboxes" => "4", 
			"imap_getsubscribed" => "4", 
			"imap_header" => "4", 
			"imap_headers" => "4", 
			"imap_last_error" => "4", 
			"imap_listmailbox" => "4", 
			"imap_listsubscribed" => "4", 
			"imap_mail_copy" => "4", 
			"imap_mail_move" => "4", 
			"imap_mailboxmsginfo" => "4", 
			"imap_msgno" => "4", 
			"imap_num_msg" => "4", 
			"imap_num_recent" => "4", 
			"imap_open" => "4", 
			"imap_ping" => "4", 
			"imap_qprint" => "4", 
			"imap_renamemailbox" => "4", 
			"imap_reopen" => "4", 
			"imap_rfc822_parse_adrlist" => "4", 
			"imap_rfc822_write_address" => "4", 
			"imap_scanmailbox" => "4", 
			"imap_search" => "4", 
			"imap_setflag_full" => "4", 
			"imap_sort" => "4", 
			"imap_status" => "4", 
			"imap_subscribe" => "4", 
			"imap_uid" => "4", 
			"imap_undelete" => "4", 
			"imap_unsubscribe" => "4", 
			"implode" => "4", 
			"in_array" => "4", 
			"intval" => "4", 
			"iptcparse" => "4", 
			"is_array" => "4", 
			"is_dir" => "4", 
			"is_double" => "4", 
			"is_executable" => "4", 
			"is_file" => "4", 
			"is_float" => "4", 
			"is_int" => "4", 
			"is_integer" => "4", 
			"is_link" => "4", 
			"is_long" => "4", 
			"is_object" => "4", 
			"is_readable" => "4", 
			"is_real" => "4", 
			"is_string" => "4", 
			"is_writeable" => "4", 
			"isset" => "4", 
			"jddayofweek" => "4", 
			"jdmonthname" => "4", 
			"jdtofrench" => "4", 
			"jdtogregorian" => "4", 
			"jdtojewish" => "4", 
			"jdtojulian" => "4", 
			"jewishtojd" => "4", 
			"join" => "4", 
			"juliantojd" => "4", 
			"key" => "4", 
			"ksort" => "4", 
			"ldap_add" => "4", 
			"ldap_bind" => "4", 
			"ldap_close" => "4", 
			"ldap_connect" => "4", 
			"ldap_count_entries" => "4", 
			"ldap_delete" => "4", 
			"ldap_dn2ufn" => "4", 
			"ldap_explode_dn" => "4", 
			"ldap_first_attribute" => "4", 
			"ldap_first_entry" => "4", 
			"ldap_free_result" => "4", 
			"ldap_get_attributes" => "4", 
			"ldap_get_dn" => "4", 
			"ldap_get_entries" => "4", 
			"ldap_get_values" => "4", 
			"ldap_list" => "4", 
			"ldap_mod_add" => "4", 
			"ldap_mod_del" => "4", 
			"ldap_mod_replace" => "4", 
			"ldap_modify" => "4", 
			"ldap_next_attribute" => "4", 
			"ldap_next_entry" => "4", 
			"ldap_read" => "4", 
			"ldap_search" => "4", 
			"ldap_unbind" => "4", 
			"leak" => "4", 
			"link" => "4", 
			"linkinfo" => "4", 
			"list" => "4", 
			"log" => "4", 
			"log10" => "4", 
			"lstat" => "4", 
			"ltrim" => "4", 
			"mail" => "4", 
			"max" => "4", 
			"mcrypt_cbc" => "4", 
			"mcrypt_cfb" => "4", 
			"mcrypt_create_iv" => "4", 
			"mcrypt_ecb" => "4", 
			"mcrypt_get_block_size" => "4", 
			"mcrypt_get_cipher_name" => "4", 
			"mcrypt_get_key_size" => "4", 
			"mcrypt_ofb" => "4", 
			"md5" => "4", 
			"mhash" => "4", 
			"mhash_count" => "4", 
			"mhash_get_block_size" => "4", 
			"mhash_get_hash_name" => "4", 
			"microtime" => "4", 
			"min" => "4", 
			"mkdir" => "4", 
			"mktime" => "4", 
			"msql" => "4", 
			"msql_affected_rows" => "4", 
			"msql_close" => "4", 
			"msql_connect" => "4", 
			"msql_create_db" => "4", 
			"msql_createdb" => "4", 
			"msql_data_seek" => "4", 
			"msql_dbname" => "4", 
			"msql_drop_db" => "4", 
			"msql_dropdb" => "4", 
			"msql_error" => "4", 
			"msql_fetch_array" => "4", 
			"msql_fetch_field" => "4", 
			"msql_fetch_object" => "4", 
			"msql_fetch_row" => "4", 
			"msql_field_seek" => "4", 
			"msql_fieldflags" => "4", 
			"msql_fieldlen" => "4", 
			"msql_fieldname" => "4", 
			"msql_fieldtable" => "4", 
			"msql_fieldtype" => "4", 
			"msql_free_result" => "4", 
			"msql_freeresult" => "4", 
			"msql_list_dbs" => "4", 
			"msql_list_fields" => "4", 
			"msql_list_tables" => "4", 
			"msql_listdbs" => "4", 
			"msql_listfields" => "4", 
			"msql_listtables" => "4", 
			"msql_num_fields" => "4", 
			"msql_num_rows" => "4", 
			"msql_numfields" => "4", 
			"msql_numrows" => "4", 
			"msql_pconnect" => "4", 
			"msql_query" => "4", 
			"msql_regcase" => "4", 
			"msql_result" => "4", 
			"msql_select_db" => "4", 
			"msql_selectdb" => "4", 
			"msql_tablename" => "4", 
			"mssql_affected_rows" => "4", 
			"mssql_close" => "4", 
			"mssql_connect" => "4", 
			"mssql_data_seek" => "4", 
			"mssql_fetch_array" => "4", 
			"mssql_fetch_field" => "4", 
			"mssql_fetch_object" => "4", 
			"mssql_fetch_row" => "4", 
			"mssql_field_seek" => "4", 
			"mssql_free_result" => "4", 
			"mssql_num_fields" => "4", 
			"mssql_num_rows" => "4", 
			"mssql_pconnect" => "4", 
			"mssql_query" => "4", 
			"mssql_result" => "4", 
			"mssql_select_db" => "4", 
			"mt_getrandmax" => "4", 
			"mt_rand" => "4", 
			"mt_srand" => "4", 
			"mysql_affected_rows" => "4", 
			"mysql_close" => "4", 
			"mysql_connect" => "4", 
			"mysql_create_db" => "4", 
			"mysql_data_seek" => "4", 
			"mysql_db_query" => "4", 
			"mysql_drop_db" => "4", 
			"mysql_errno" => "4", 
			"mysql_error" => "4", 
			"mysql_fetch_array" => "4", 
			"mysql_fetch_field" => "4", 
			"mysql_fetch_lengths" => "4", 
			"mysql_fetch_object" => "4", 
			"mysql_fetch_row" => "4", 
			"mysql_field_flags" => "4", 
			"mysql_field_len" => "4", 
			"mysql_field_name" => "4", 
			"mysql_field_seek" => "4", 
			"mysql_field_table" => "4", 
			"mysql_field_type" => "4", 
			"mysql_free_result" => "4", 
			"mysql_insert_id" => "4", 
			"mysql_list_dbs" => "4", 
			"mysql_list_fields" => "4", 
			"mysql_list_tables" => "4", 
			"mysql_num_fields" => "4", 
			"mysql_num_rows" => "4", 
			"mysql_pconnect" => "4", 
			"mysql_query" => "4", 
			"mysql_result" => "4", 
			"mysql_select_db" => "4", 
			"mysql_tablename" => "4", 
			"next" => "4", 
			"nl2br" => "4", 
			"number_format" => "4", 
			"ocibindbyname" => "4", 
			"ocicolumnisnull" => "4", 
			"ocicolumnname" => "4", 
			"ocicolumnsize" => "4", 
			"ocicolumntype" => "4", 
			"ocicommit" => "4", 
			"ocidefinebyname" => "4", 
			"ocierror" => "4", 
			"ociexecute" => "4", 
			"ocifetch" => "4", 
			"ocifetchinto" => "4", 
			"ocifetchstatement" => "4", 
			"ocifreecursor" => "4", 
			"ocifreestatement" => "4", 
			"ociinternaldebug" => "4", 
			"ocilogoff" => "4", 
			"ocilogon" => "4", 
			"ocinewcursor" => "4", 
			"ocinewdescriptor" => "4", 
			"ocinlogon" => "4", 
			"ocinumcols" => "4", 
			"ocinumrows" => "4", 
			"ociparse" => "4", 
			"ociplogon" => "4", 
			"ociresult" => "4", 
			"ocirollback" => "4", 
			"ocirowcount" => "4", 
			"ociserverversion" => "4", 
			"ocistatementtype" => "4", 
			"octdec" => "4", 
			"odbc_autocommit" => "4", 
			"odbc_binmode" => "4", 
			"odbc_close" => "4", 
			"odbc_close_all" => "4", 
			"odbc_commit" => "4", 
			"odbc_connect" => "4", 
			"odbc_cursor" => "4", 
			"odbc_do" => "4", 
			"odbc_exec" => "4", 
			"odbc_execute" => "4", 
			"odbc_fetch_into" => "4", 
			"odbc_fetch_row" => "4", 
			"odbc_field_len" => "4", 
			"odbc_field_name" => "4", 
			"odbc_field_type" => "4", 
			"odbc_free_result" => "4", 
			"odbc_longreadlen" => "4", 
			"odbc_num_fields" => "4", 
			"odbc_num_rows" => "4", 
			"odbc_pconnect" => "4", 
			"odbc_prepare" => "4", 
			"odbc_result" => "4", 
			"odbc_result_all" => "4", 
			"odbc_rollback" => "4", 
			"odbc_setoption" => "4", 
			"opendir" => "4", 
			"openlog" => "4", 
			"ora_bind" => "4", 
			"ora_close" => "4", 
			"ora_columnname" => "4", 
			"ora_columntype" => "4", 
			"ora_commit" => "4", 
			"ora_commitoff" => "4", 
			"ora_commiton" => "4", 
			"ora_error" => "4", 
			"ora_errorcode" => "4", 
			"ora_exec" => "4", 
			"ora_fetch" => "4", 
			"ora_getcolumn" => "4", 
			"ora_logoff" => "4", 
			"ora_logon" => "4", 
			"ora_open" => "4", 
			"ora_parse" => "4", 
			"ora_rollback" => "4", 
			"ord" => "4", 
			"pack" => "4", 
			"parse_str" => "4", 
			"parse_url" => "4", 
			"passthru" => "4", 
			"pclose" => "4", 
			"pdf_add_annotation" => "4", 
			"pdf_add_outline" => "4", 
			"pdf_arc" => "4", 
			"pdf_begin_page" => "4", 
			"pdf_circle" => "4", 
			"pdf_clip" => "4", 
			"pdf_close" => "4", 
			"pdf_close_image" => "4", 
			"pdf_closepath" => "4", 
			"pdf_closepath_fill_stroke" => "4", 
			"pdf_closepath_stroke" => "4", 
			"pdf_continue_text" => "4", 
			"pdf_curveto" => "4", 
			"pdf_end_page" => "4", 
			"pdf_endpath" => "4", 
			"pdf_execute_image" => "4", 
			"pdf_fill" => "4", 
			"pdf_fill_stroke" => "4", 
			"pdf_get_info" => "4", 
			"pdf_lineto" => "4", 
			"pdf_moveto" => "4", 
			"pdf_open" => "4", 
			"pdf_open_gif" => "4", 
			"pdf_open_jpeg" => "4", 
			"pdf_open_memory_image" => "4", 
			"pdf_place_image" => "4", 
			"pdf_put_image" => "4", 
			"pdf_rect" => "4", 
			"pdf_restore" => "4", 
			"pdf_rotate" => "4", 
			"pdf_save" => "4", 
			"pdf_scale" => "4", 
			"pdf_set_char_spacing" => "4", 
			"pdf_set_duration" => "4", 
			"pdf_set_font" => "4", 
			"pdf_set_horiz_scaling" => "4", 
			"pdf_set_info_author" => "4", 
			"pdf_set_info_creator" => "4", 
			"pdf_set_info_keywords" => "4", 
			"pdf_set_info_subject" => "4", 
			"pdf_set_info_title" => "4", 
			"pdf_set_leading" => "4", 
			"pdf_set_text_matrix" => "4", 
			"pdf_set_text_pos" => "4", 
			"pdf_set_text_rendering" => "4", 
			"pdf_set_text_rise" => "4", 
			"pdf_set_transition" => "4", 
			"pdf_set_word_spacing" => "4", 
			"pdf_setdash" => "4", 
			"pdf_setflat" => "4", 
			"pdf_setgray" => "4", 
			"pdf_setgray_fill" => "4", 
			"pdf_setgray_stroke" => "4", 
			"pdf_setlinecap" => "4", 
			"pdf_setlinejoin" => "4", 
			"pdf_setlinewidth" => "4", 
			"pdf_setmiterlimit" => "4", 
			"pdf_setrgbcolor" => "4", 
			"pdf_setrgbcolor_fill" => "4", 
			"pdf_setrgbcolor_stroke" => "4", 
			"pdf_show" => "4", 
			"pdf_show_xy" => "4", 
			"pdf_stringwidth" => "4", 
			"pdf_stroke" => "4", 
			"pdf_translate" => "4", 
			"pfsockopen" => "4", 
			"pg_close" => "4", 
			"pg_cmdtuples" => "4", 
			"pg_connect" => "4", 
			"pg_dbname" => "4", 
			"pg_errormessage" => "4", 
			"pg_exec" => "4", 
			"pg_fetch_array" => "4", 
			"pg_fetch_object" => "4", 
			"pg_fetch_row" => "4", 
			"pg_fieldisnull" => "4", 
			"pg_fieldname" => "4", 
			"pg_fieldnum" => "4", 
			"pg_fieldprtlen" => "4", 
			"pg_fieldsize" => "4", 
			"pg_fieldtype" => "4", 
			"pg_freeresult" => "4", 
			"pg_getlastoid" => "4", 
			"pg_host" => "4", 
			"pg_loclose" => "4", 
			"pg_locreate" => "4", 
			"pg_loopen" => "4", 
			"pg_loread" => "4", 
			"pg_loreadall" => "4", 
			"pg_lounlink" => "4", 
			"pg_lowrite" => "4", 
			"pg_numfields" => "4", 
			"pg_numrows" => "4", 
			"pg_options" => "4", 
			"pg_pconnect" => "4", 
			"pg_port" => "4", 
			"pg_result" => "4", 
			"pg_tty" => "4", 
			"phpinfo" => "4", 
			"phpversion" => "4", 
			"pi" => "4", 
			"popen" => "4", 
			"pos" => "4", 
			"pow" => "4", 
			"preg_grep" => "4", 
			"preg_match" => "4", 
			"preg_match_all" => "4", 
			"preg_quote" => "4", 
			"preg_replace" => "4", 
			"preg_split" => "4", 
			"prev" => "4", 
			"print" => "4", 
			"printf" => "4", 
			"putenv" => "4", 
			"quoted_printable_decode" => "4", 
			"quotemeta" => "4", 
			"rand" => "4", 
			"range" => "4", 
			"rawurldecode" => "4", 
			"rawurlencode" => "4", 
			"readdir" => "4", 
			"readfile" => "4", 
			"readgzfile" => "4", 
			"readlink" => "4", 
			"register_shutdown_function" => "4", 
			"rename" => "4", 
			"require" => "4", 
			"reset" => "4", 
			"return" => "4", 
			"rewind" => "4", 
			"rewinddir" => "4", 
			"rmdir" => "4", 
			"round" => "4", 
			"rsort" => "4", 
			"sem_acquire" => "4", 
			"sem_get" => "4", 
			"sem_release" => "4", 
			"serialize" => "4", 
			"session_decode" => "4", 
			"session_destroy" => "4", 
			"session_encode" => "4", 
			"session_id" => "4", 
			"session_is_registered" => "4", 
			"session_module_name" => "4", 
			"session_name" => "4", 
			"session_register" => "4", 
			"session_save_path" => "4", 
			"session_start" => "4", 
			"session_unregister" => "4", 
			"set_file_buffer" => "4", 
			"set_magic_quotes_runtime" => "4", 
			"set_socket_blocking" => "4", 
			"set_time_limit" => "4", 
			"setcookie" => "4", 
			"setlocale" => "4", 
			"settype" => "4", 
			"shm_attach" => "4", 
			"shm_detach" => "4", 
			"shm_get_var" => "4", 
			"shm_put_var" => "4", 
			"shm_remove" => "4", 
			"shm_remove_var" => "4", 
			"shuffle" => "4", 
			"similar_text" => "4", 
			"sin" => "4", 
			"sizeof" => "4", 
			"sleep" => "4", 
			"snmp_get_quick_print" => "4", 
			"snmp_set_quick_print" => "4", 
			"snmpget" => "4", 
			"snmpset" => "4", 
			"snmpwalk" => "4", 
			"snmpwalkoid" => "4", 
			"solid_close" => "4", 
			"solid_connect" => "4", 
			"solid_exec" => "4", 
			"solid_fetchrow" => "4", 
			"solid_fieldname" => "4", 
			"solid_fieldnum" => "4", 
			"solid_freeresult" => "4", 
			"solid_numfields" => "4", 
			"solid_numrows" => "4", 
			"solid_result" => "4", 
			"sort" => "4", 
			"soundex" => "4", 
			"split" => "4", 
			"sprintf" => "4", 
			"sql_regcase" => "4", 
			"sqrt" => "4", 
			"srand" => "4", 
			"stat" => "4", 
			"str_replace" => "4", 
			"strchr" => "4", 
			"strcmp" => "4", 
			"strcspn" => "4", 
			"strftime" => "4", 
			"strip_tags" => "4", 
			"stripslashes" => "4", 
			"strlen" => "4", 
			"strpos" => "4", 
			"strrchr" => "4", 
			"strrev" => "4", 
			"strrpos" => "4", 
			"strspn" => "4", 
			"strstr" => "4", 
			"strtok" => "4", 
			"strtolower" => "4", 
			"strtoupper" => "4", 
			"strtr" => "4", 
			"strval" => "4", 
			"substr" => "4", 
			"sybase_affected_rows" => "4", 
			"sybase_close" => "4", 
			"sybase_connect" => "4", 
			"sybase_data_seek" => "4", 
			"sybase_fetch_array" => "4", 
			"sybase_fetch_field" => "4", 
			"sybase_fetch_object" => "4", 
			"sybase_fetch_row" => "4", 
			"sybase_field_seek" => "4", 
			"sybase_free_result" => "4", 
			"sybase_num_fields" => "4", 
			"sybase_num_rows" => "4", 
			"sybase_pconnect" => "4", 
			"sybase_query" => "4", 
			"sybase_result" => "4", 
			"sybase_select_db" => "4", 
			"symlink" => "4", 
			"syslog" => "4", 
			"system" => "4", 
			"tan" => "4", 
			"tempnam" => "4", 
			"time" => "4", 
			"touch" => "4", 
			"trim" => "4", 
			"uasort" => "4", 
			"ucfirst" => "4", 
			"ucwords" => "4", 
			"uksort" => "4", 
			"umask" => "4", 
			"uniqid" => "4", 
			"unlink" => "4", 
			"unpack" => "4", 
			"unserialize" => "4", 
			"unset" => "4", 
			"urldecode" => "4", 
			"urlencode" => "4", 
			"usleep" => "4", 
			"usort" => "4", 
			"utf8_decode" => "4", 
			"utf8_encode" => "4", 
			"virtual" => "4", 
			"vm_addalias" => "4", 
			"vm_adduser" => "4", 
			"vm_delalias" => "4", 
			"vm_deluser" => "4", 
			"vm_passwd" => "4", 
			"wddx_add_vars" => "4", 
			"wddx_deserialize" => "4", 
			"wddx_packet_end" => "4", 
			"wddx_packet_start" => "4", 
			"wddx_serialize_value" => "4", 
			"wddx_serialize_vars" => "4", 
			"xml_error_string" => "4", 
			"xml_get_current_byte_index" => "4", 
			"xml_get_current_column_number" => "4", 
			"xml_get_current_line_number" => "4", 
			"xml_get_error_code" => "4", 
			"xml_parse" => "4", 
			"xml_parser_create" => "4", 
			"xml_parser_free" => "4", 
			"xml_parser_get_option" => "4", 
			"xml_parser_set_option" => "4", 
			"xml_set_character_data_handler" => "4", 
			"xml_set_default_handler" => "4", 
			"xml_set_element_handler" => "4", 
			"xml_set_external_entity_ref_handler" => "4", 
			"xml_set_notation_decl_handler" => "4", 
			"xml_set_processing_instruction_handler" => "4", 
			"xml_set_unparsed_entity_decl_handler" => "4", 
			"yp_err_string" => "4", 
			"yp_errno" => "4", 
			"yp_first" => "4", 
			"yp_get_default_domain" => "4", 
			"yp_master" => "4", 
			"yp_match" => "4", 
			"yp_next" => "4", 
			"yp_order" => "4", 
			"<A" => "5", 
			"</A>" => "5", 
			"<ABBR>" => "5", 
			"<ABBR" => "5", 
			"</ABBR>" => "5", 
			"<ABOVE>" => "5", 
			"<ACRONYM>" => "5", 
			"<ACRONYM" => "5", 
			"</ACRONYM>" => "5", 
			"<ADDRESS>" => "5", 
			"<ADDRESS" => "5", 
			"</ADDRESS>" => "5", 
			"<APPLET" => "5", 
			"</APPLET>" => "5", 
			"<ARRAY>" => "5", 
			"<AREA" => "5", 
			"</AREA" => "5", 
			"<B>" => "5", 
			"<B" => "5", 
			"</B>" => "5", 
			"<BASE" => "5", 
			"<BASEFONT" => "5", 
			"<BDO>" => "5", 
			"<BDO" => "5", 
			"</BDO>" => "5", 
			"<BGSOUND" => "5", 
			"<BIG>" => "5", 
			"<BIG" => "5", 
			"</BIG>" => "5", 
			"<BLINK>" => "5", 
			"</BLINK>" => "5", 
			"<BLOCKQUOTE>" => "5", 
			"<BLOCKQUOTE" => "5", 
			"</BLOCKQUOTE>" => "5", 
			"<BODY" => "5", 
			"<BODY>" => "5", 
			"</BODY>" => "5", 
			"<BOX>" => "5", 
			"<BR" => "5", 
			"<BR>" => "5", 
			"<BLINK" => "5", 
			"<BUTTON>" => "5", 
			"</BUTTON>" => "5", 
			"<CAPTION>" => "5", 
			"<CAPTION" => "5", 
			"</CAPTION>" => "5", 
			"<CENTER>" => "5", 
			"<CENTER" => "5", 
			"</CENTER>" => "5", 
			"<CITE>" => "5", 
			"<CITE" => "5", 
			"</CITE>" => "5", 
			"<CODE>" => "5", 
			"<CODE" => "5", 
			"</CODE>" => "5", 
			"<COL>" => "5", 
			"<COLGROUP>" => "5", 
			"</COLGROUP>" => "5", 
			"<COMMENT>" => "5", 
			"</COMMENT>" => "5", 
			"<DD>" => "5", 
			"<DD" => "5", 
			"</DD>" => "5", 
			"<DEL>" => "5", 
			"<DEL" => "5", 
			"</DEL>" => "5", 
			"<DFN>" => "5", 
			"<DFN" => "5", 
			"</DFN>" => "5", 
			"<DIR>" => "5", 
			"<DIR" => "5", 
			"</DIR>" => "5", 
			"<DIV>" => "5", 
			"<DIV" => "5", 
			"</DIV>" => "5", 
			"<DL>" => "5", 
			"<DL" => "5", 
			"</DL>" => "5", 
			"<DT>" => "5", 
			"<DT" => "5", 
			"</DT>" => "5", 
			"<EM>" => "5", 
			"<EM" => "5", 
			"</EM>" => "5", 
			"<EMBED" => "5", 
			"<FIELDSET>" => "5", 
			"<FIELDSET" => "5", 
			"</FIELDSET>" => "5", 
			"<FIG>" => "5", 
			"<FONT" => "5", 
			"</FONT>" => "5", 
			"<FORM>" => "5", 
			"<FORM" => "5", 
			"</FORM>" => "5", 
			"<FRAME" => "5", 
			"<FRAMESET" => "5", 
			"</FRAMESET>" => "5", 
			"<H1>" => "5", 
			"<H1" => "5", 
			"</H1>" => "5", 
			"<H2>" => "5", 
			"<H2" => "5", 
			"</H2>" => "5", 
			"<H3>" => "5", 
			"<H3" => "5", 
			"</H3>" => "5", 
			"<H4>" => "5", 
			"<H4" => "5", 
			"</H4>" => "5", 
			"<H5>" => "5", 
			"<H5" => "5", 
			"</H5>" => "5", 
			"<H6>" => "5", 
			"<H6" => "5", 
			"</H6>" => "5", 
			"<HEAD>" => "5", 
			"<HEAD" => "5", 
			"</HEAD>" => "5", 
			"<HR>" => "5", 
			"<HR" => "5", 
			"<HTML>" => "5", 
			"<HTML" => "5", 
			"</HTML>" => "5", 
			"<I>" => "5", 
			"<I" => "5", 
			"</I>" => "5", 
			"<IFRAME>" => "5", 
			"</IFRAME>" => "5", 
			"<ILAYER>" => "5", 
			"</ILAYER>" => "5", 
			"<IMG" => "5", 
			"<INPUT>" => "5", 
			"<INPUT" => "5", 
			"<INS>" => "5", 
			"<INS" => "5", 
			"</INS>" => "5", 
			"<ISINDEX>" => "5", 
			"<ISINDEX" => "5", 
			"<KBD>" => "5", 
			"<KBD" => "5", 
			"</KBD>" => "5", 
			"<LABEL>" => "5", 
			"<LABEL" => "5", 
			"</LABEL>" => "5", 
			"<LAYER>" => "5", 
			"<LAYER" => "5", 
			"</LAYER>" => "5", 
			"<LEGEND>" => "5", 
			"<LEGEND" => "5", 
			"</LEGEND>" => "5", 
			"<LI>" => "5", 
			"<LI" => "5", 
			"</LI>" => "5", 
			"<LINK" => "5", 
			"<LISTING>" => "5", 
			"</LISTING>" => "5", 
			"<MAP" => "5", 
			"</MAP>" => "5", 
			"<MARQUEE" => "5", 
			"</MARQUEE>" => "5", 
			"<MENU>" => "5", 
			"<MENU" => "5", 
			"</MENU>" => "5", 
			"<META" => "5", 
			"<MULTICOL>" => "5", 
			"</MULTICOL>" => "5", 
			"<NEXTID" => "5", 
			"<NOBR>" => "5", 
			"</NOBR>" => "5", 
			"<NOFRAMES>" => "5", 
			"</NOFRAMES>" => "5", 
			"<NOLAYER>" => "5", 
			"</NOLAYER>" => "5", 
			"<NOTE>" => "5", 
			"</NOTE>" => "5", 
			"<NOSCRIPT>" => "5", 
			"</NOSCRIPT>" => "5", 
			"<OBJECT>" => "5", 
			"<OBJECT" => "5", 
			"<OL>" => "5", 
			"<OL" => "5", 
			"</OL>" => "5", 
			"<OPTION>" => "5", 
			"<OPTION" => "5", 
			"</OPTION>" => "5", 
			"<OPTGROUP>" => "5", 
			"<OPTGROUP" => "5", 
			"</OPTGROUP>" => "5", 
			"<P" => "5", 
			"<P>" => "5", 
			"</P>" => "5", 
			"<PARAM" => "5", 
			"<PRE>" => "5", 
			"<PRE" => "5", 
			"</PRE>" => "5", 
			"<Q>" => "5", 
			"<Q" => "5", 
			"</Q>" => "5", 
			"<QUOTE>" => "5", 
			"<RANGE>" => "5", 
			"<ROOT>" => "5", 
			"<S>" => "5", 
			"<S" => "5", 
			"</S>" => "5", 
			"<SAMP>" => "5", 
			"<SAMP" => "5", 
			"</SAMP>" => "5", 
			"<SCRIPT" => "5", 
			"<SCRIPT>" => "5", 
			"</SCRIPT>" => "5", 
			"<SELECT" => "5", 
			"</SELECT>" => "5", 
			"<SMALL>" => "5", 
			"<SMALL" => "5", 
			"</SMALL>" => "5", 
			"<SOUND" => "5", 
			"<SPACER>" => "5", 
			"<SPAN>" => "5", 
			"<SPAN" => "5", 
			"</SPAN>" => "5", 
			"<SQRT>" => "5", 
			"<STRIKE>" => "5", 
			"<STRIKE" => "5", 
			"</STRIKE>" => "5", 
			"<STRONG>" => "5", 
			"<STRONG" => "5", 
			"</STRONG>" => "5", 
			"<STYLE>" => "5", 
			"<STYLE" => "5", 
			"</STYLE>" => "5", 
			"<SUB>" => "5", 
			"<SUB" => "5", 
			"</SUB>" => "5", 
			"<SUP>" => "5", 
			"<SUP" => "5", 
			"</SUP>" => "5", 
			"<TABLE>" => "5", 
			"<TABLE" => "5", 
			"</TABLE>" => "5", 
			"<TBODY>" => "5", 
			"<TBODY" => "5", 
			"</TBODY>" => "5", 
			"<TD" => "5", 
			"<TD>" => "5", 
			"</TD>" => "5", 
			"<TEXT>" => "5", 
			"<TEXTAREA" => "5", 
			"<TEXTAREA>" => "5", 
			"</TEXTAREA>" => "5", 
			"<TFOOT>" => "5", 
			"<TFOOT" => "5", 
			"</TFOOT>" => "5", 
			"<TH" => "5", 
			"<TH>" => "5", 
			"</TH>" => "5", 
			"<THEAD>" => "5", 
			"<THEAD" => "5", 
			"</THEAD>" => "5", 
			"<TITLE>" => "5", 
			"</TITLE>" => "5", 
			"<TR" => "5", 
			"<TR>" => "5", 
			"</TR>" => "5", 
			"<TT>" => "5", 
			"</TT>" => "5", 
			"<TT" => "5", 
			"<U>" => "5", 
			"<U" => "5", 
			"</U>" => "5", 
			"<UL>" => "5", 
			"<UL" => "5", 
			"</UL>" => "5", 
			"<VAR>" => "5", 
			"</VAR>" => "5", 
			"<VAR" => "5", 
			"<WBR>" => "5", 
			"<XMP>" => "5", 
			"</XMP>" => "5", 
			"GATEWAY_INTERFACE" => "6", 
			"REQUEST_METHOD" => "6", 
			"REQUEST_URI" => "6", 
			"QUERY_STRING" => "6", 
			"DOCUMENT_ROOT" => "6", 
			"HTTP_ACCEPT" => "6", 
			"HTTP_ACCEPT_CHARSET" => "6", 
			"HTTP_ENCODING" => "6", 
			"HTTP_ACCEPT_LANGUAGE" => "6", 
			"HTTP_CONNECTION" => "6", 
			"HTTP_HOST" => "6", 
			"HTTP_REFERER" => "6", 
			"HTTP_USER_AGENT" => "6", 
			"REMOTE_ADDR" => "6", 
			"REMOTE_PORT" => "6", 
			"SCRIPT_FILENAME" => "6", 
			"SERVER_ADMIN" => "6", 
			"SERVER_PORT" => "6", 
			"SERVER_SIGNATURE" => "6", 
			"SCRIPT_NAME" => "6", 
			"SERVER_NAME" => "6", 
			"SERVER_SOFTWARE" => "6", 
			"SERVER_PROTOCOL" => "6", 
			"PATH_TRANSLATED" => "6", 
			"$PHP_SELF" => "7", 
			"$HTTP_COOKIE_VARS" => "7", 
			"$HTTP_GET_VARS" => "7", 
			"$HTTP_POST_VARS" => "7");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing", 
			"7" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
