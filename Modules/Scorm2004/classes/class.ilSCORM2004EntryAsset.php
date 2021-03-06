<?php
/* Copyright (c) 1998-2011 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once("./Modules/Scorm2004/classes/class.ilSCORM2004Asset.php");

/**
 * Entry page asset
 *
 * @author Alex Killing <alex.killing@gmx.de>
 * @version $Id$
 * @ingroup ModulesScorm2004
 */
class ilSCORM2004EntryAsset extends ilSCORM2004Asset
{
	/**
	 * Constructor
	 *
	 * @param object SCORM LM object
	 */
	function __construct($a_slm_object)
	{
		parent::ilSCORM2004Node($a_slm_object);
		$this->setType("ass");
	}

	/**
	 * Export special item to scorm
	 */
	function exportScorm($a_inst, $a_target_dir, &$expLog)
	{
		ilUtil::makeDir($a_target_dir.'/entry_page');

		$a_target_dir = $a_target_dir.'/entry_page';

		$this->exportHTML($a_inst, $a_target_dir, $expLog, "entry_asset");
	}

	/**
	 * Export page objects of entry asset
	 *
	 * @param int $a_inst
	 * @param string $a_target_dir
	 * @param object $expLog
	 * @param string $a_mode
	 */
/*	function exportHTMLPageObjects($a_inst, $a_target_dir, $expLog, $a_mode)
	{
		$tpl = new ilTemplate("tpl.sco.html", true, true, "Modules/Scorm2004");
		$tpl->setCurrentBlock("page");
		$tpl->setVariable("PAGE", "Entry Page...");
		$content = $tpl->get();

		fputs(fopen($a_target_dir.'/index.html','w+'), $content);
	}*/

	/**
	 * Add entry page item XML to writer
	 */
	static function addEntryPageItemXML($a_writer, $a_slm_obj)
	{
		$a_writer->xmlStartTag("item", array(
			"identifier" => "il_".IL_INST_ID."_entry_page_".$a_slm_obj->getId(),
			"identifierref" => "il_".IL_INST_ID."_entry_page_".$a_slm_obj->getId()."_ref",
			"isvisible" => false
		)
		);
		$a_writer->xmlElement("title", array(), "Entry Page");
		$a_writer->xmlElement("imsss:sequencing", array());
		$a_writer->xmlEndTag("item");
	}

	/**
	 * Add entry page resource XML to writer
	 */
	static function addEntryPageResourceXML($a_writer, $a_slm_obj)
	{
		$a_writer->xmlStartTag("resource", array(
			"identifier" => "il_".IL_INST_ID."_entry_page_".$a_slm_obj->getId()."_ref",
			"type" => "webcontent",
			"adlcp:scormType" => "asset",
			"href" => "entry_page/index.html"
			)
		);
		$a_writer->xmlEndTag("resource");
	}

}
?>
