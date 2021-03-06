<?php

/* Copyright (c) 1998-2010 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once("./Services/Skill/classes/class.ilSkillTreeNode.php");

/**
 * Basic Skill
 *
 * @author Alex Killing <alex.killing@gmx.de>
 * @version $Id$
 *
 * @ingroup ServicesSkill
 */
class ilBasicSkill extends ilSkillTreeNode
{
	const ACHIEVED = 1;
	const NOT_ACHIEVED = 0;

	var $id;

	/**
	 * Constructor
	 * @access	public
	 */
	function __construct($a_id = 0)
	{
		parent::ilSkillTreeNode($a_id);
		$this->setType("skll");
	}

	/**
	 * Read data from database
	 */
	function read()
	{
		parent::read();
	}

	/**
	 * Create skill
	 *
	 */
	function create()
	{
		parent::create();
	}

	/**
	 * Delete skill
	 */
	function delete()
	{
		global $ilDB;

		$ilDB->manipulate("DELETE FROM skl_level WHERE "
			." skill_id = ".$ilDB->quote($this->getId(), "integer")
			);

		$ilDB->manipulate("DELETE FROM skl_user_has_level WHERE "
			." skill_id = ".$ilDB->quote($this->getId(), "integer")
			);

		parent::delete();
	}

	/**
	 * Copy basic skill
	 */
	function copy()
	{
		$skill = new ilBasicSkill();
		$skill->setTitle($this->getTitle());
		$skill->setType($this->getType());
		$skill->setSelfEvaluation($this->getSelfEvaluation());
		$skill->setOrderNr($this->getOrderNr());
		$skill->create();

		$levels = $this->getLevelData();
		if (sizeof($levels))
		{
			foreach($levels as $item)
			{
				$skill->addLevel($item["title"], $item["description"]);
			}
		}
		$skill->update();
		
		return $skill;
	}

	//
	//
	// Skill level related methods
	//
	//

	/**
	 * Add new level
	 *
	 * @param	string	title
	 * @param	string	description
	 */
	function addLevel($a_title, $a_description)
	{
		global $ilDB;

		$nr = $this->getMaxLevelNr();
		$nid = $ilDB->nextId("skl_level");
		$ilDB->insert("skl_level", array(
			"id" => array("integer", $nid),
			"skill_id" => array("integer", $this->getId()),
			"nr" => array("integer", $nr+1),
			"title" => array("text", $a_title),
			"description" => array("clob", $a_description)
			));

	}

	/**
	 * Get maximum level nr
	 *
	 * @return	int		maximum level nr of skill
	 */
	function getMaxLevelNr()
	{
		global $ilDB;

		$set = $ilDB->query("SELECT MAX(nr) mnr FROM skl_level WHERE ".
			" skill_id = ".$ilDB->quote($this->getId(), "integer")
			);
		$rec = $ilDB->fetchAssoc($set);
		return (int) $rec["mnr"];
	}

	/**
	 * Get level data
	 *
	 * @return	array	level data
	 */
	function getLevelData($a_id = 0)
	{
		global $ilDB;

		if ($a_id > 0)
		{
			$and = " AND id = ".$ilDB->quote($a_id, "integer");
		}

		$set = $ilDB->query("SELECT * FROM skl_level WHERE ".
			" skill_id = ".$ilDB->quote($this->getId(), "integer").
			$and.
			" ORDER BY nr"
			);
		$levels = array();
		while ($rec = $ilDB->fetchAssoc($set))
		{
			if ($a_id > 0)
			{
				return $rec;
			}
			$levels[] = $rec;
		}
		return $levels;
	}

	/**
	 * Lookup level property
	 *
	 * @param	id		level id
	 * @return	mixed	property value
	 */
	protected static function lookupLevelProperty($a_id, $a_prop)
	{
		global $ilDB;

		$set = $ilDB->query("SELECT $a_prop FROM skl_level WHERE ".
			" id = ".$ilDB->quote($a_id, "integer")
		);
		$rec = $ilDB->fetchAssoc($set);
		return $rec[$a_prop];
	}

	/**
	 * Lookup level title
	 *
	 * @param	int		level id
	 * @return	string	level title
	 */
	static function lookupLevelTitle($a_id)
	{
		return ilBasicSkill::lookupLevelProperty($a_id, "title");
	}

	/**
	 * Lookup level description
	 *
	 * @param	int		level id
	 * @return	string	level description
	 */
	static function lookupLevelDescription($a_id)
	{
		return ilBasicSkill::lookupLevelProperty($a_id, "description");
	}

	/**
	 * Lookup level trigger
	 *
	 * @param	int		level id
	 * @return	array	trigger ref id and obj id
	 */
	static function lookupLevelTrigger($a_id)
	{
		$ref_id = ilBasicSkill::lookupLevelProperty($a_id, "trigger_ref_id");
		$obj_id = ilBasicSkill::lookupLevelProperty($a_id, "trigger_obj_id");
		return array("ref_id" => $ref_id, "obj_id" => $obj_id);
	}

	/**
	 * Lookup level skill id
	 *
	 * @param	int		level id
	 * @return	string	skill id
	 */
	static function lookupLevelSkillId($a_id)
	{
		return ilBasicSkill::lookupLevelProperty($a_id, "skill_id");
	}

	/**
	 * Write level property
	 *
	 * @param
	 * @return
	 */
	static protected function writeLevelProperty($a_id, $a_prop, $a_value, $a_type)
	{
		global $ilDB;

		$ilDB->update("skl_level", array(
			$a_prop => array($a_type, $a_value),
			), array(
			"id" => array("integer", $a_id),
		));
	}

	/**
	 * Write level title
	 *
	 * @param	int		level id
	 * @param	text	level title
	 */
	static function writeLevelTitle($a_id, $a_title)
	{
		ilBasicSkill::writeLevelProperty($a_id, "title", $a_title, "text");
	}

	/**
	 * Write level description
	 *
	 * @param	int		level id
	 * @param	text	level description
	 */
	static function writeLevelDescription($a_id, $a_description)
	{
		ilBasicSkill::writeLevelProperty($a_id, "description", $a_description, "clob");
	}

	/**
	 * Write trigger
	 *
	 * @param	int		level id
	 * @param	text	level description
	 */
	static function writeLevelTrigger($a_id, $a_trigger_ref_id)
	{
		$a_trigger_obj_id = 0;
		if ($a_trigger_ref_id > 0)
		{
			$a_trigger_obj_id = ilObject::_lookupObjId($a_trigger_ref_id);
		}
		ilBasicSkill::writeLevelProperty($a_id, "trigger_ref_id", $a_trigger_ref_id, "integer");
		ilBasicSkill::writeLevelProperty($a_id, "trigger_obj_id", $a_trigger_obj_id, "integer");
	}

	/**
	 * Update level order
	 *
	 * @param
	 * @return
	 */
	function updateLevelOrder($order)
	{
		global $ilDB;

		asort($order);

		$cnt = 1;
		foreach ($order as $id => $o)
		{
			$ilDB->manipulate("UPDATE skl_level SET ".
				" nr = ".$ilDB->quote($cnt, "integer").
				" WHERE id = ".$ilDB->quote($id, "integer")
				);
			$cnt++;
		}
	}

	/**
	 * Delete level
	 *
	 * @param
	 * @return
	 */
	function deleteLevel($a_id)
	{
		global $ilDB;

		$ilDB->manipulate("DELETE FROM skl_level WHERE "
			." id = ".$ilDB->quote($a_id, "integer")
			);

	}

	/**
	 * Fix level numbering
	 *
	 * @param
	 * @return
	 */
	function fixLevelNumbering()
	{
		global $ilDB;

		$set = $ilDB->query("SELECT id, nr FROM skl_level WHERE ".
			" skill_id = ".$ilDB->quote($this->getId(), "integer").
			" ORDER BY nr ASC"
		);
		$cnt = 1;
		while ($rec = $ilDB->fetchAssoc($set))
		{
			$ilDB->manipulate("UPDATE skl_level SET ".
				" nr = ".$ilDB->quote($cnt, "integer").
				" WHERE id = ".$ilDB->quote($rec["id"], "integer")
				);
			$cnt++;
		}
	}

	/**
	 * Lookup levels for trigger
	 *
	 * @param
	 * @return
	 */
	function lookupLevelsForTriggerRefId($a_ref_id)
	{
		global $ilDB;

		$set = $ilDB->query("SELECT id FROM skl_level WHERE ".
			" trigger_ref_id = ".$ilDB->quote($a_ref_id, "integer")
			);
		$levels = array();
		while ($rec = $ilDB->fetchAssoc($set))
		{
			$levels[] = $rec["id"];
		}
		return $levels;
	}

	/**
	 * Get skill for level id
	 *
	 * @param
	 * @return
	 */
	function getSkillForLevelId($a_level_id)
	{
		global $ilDB;

		$set = $ilDB->query("SELECT * FROM skl_level WHERE ".
			" id = ".$ilDB->quote($a_level_id, "integer")
			);
		$skill = null;
		if ($rec = $ilDB->fetchAssoc($set))
		{
			if (ilSkillTreeNode::isInTree($rec["skill_id"]))
			{
				$skill = new ilBasicSkill($rec["skill_id"]);
			}
		}
		return $skill;
	}

	//
	//
	// User skill (level) related methods
	//
	//


	/**
	 * Look for all skill level that have a trigger and update
	 * the user skill level information, if it has changed
	 */
	public static function updateAllUserSkillLevels()
	{
		global $ilDB;

		$set = $ilDB->query("SELECT id, trigger_obj_id FROM skl_level WHERE ".
			" trigger_obj_id > ".$ilDB->quote(0, "integer")
		);
		while ($rec = $ilDB->fetchAssoc($set))		// all trigger objects
		{
			$skill_level_id = $rec["id"];
			$tr_obj_id = $rec["trigger_obj_id"];

			if (ilObject::_hasUntrashedReference($tr_obj_id))
			{
				include_once("./Services/Tracking/classes/class.ilLPStatusWrapper.php");
				$completed = ilLPStatusWrapper::_lookupCompletedForObject($tr_obj_id);
				foreach ($completed as $user_id)
				{
					ilBasicSkill::writeUserSkillLevelStatus($skill_level_id,
						$user_id, ilBasicSkill::ACHIEVED);
				}
			}
		}
	}

	/**
	 * Look for all skill level that have a trigger and update
	 * the user skill level information, if it has changed
	 */
	public static function updateSkillLevelsByTriggerRef($a_user_id, $a_ref_id)
	{
		global $ilDB;

		$set = $ilDB->query("SELECT id, trigger_obj_id FROM skl_level WHERE ".
			" trigger_ref_id = ".$ilDB->quote($a_ref_id, "integer")
		);
		while ($rec = $ilDB->fetchAssoc($set))		// all trigger objects
		{
			$skill_level_id = $rec["id"];
			$tr_obj_id = $rec["trigger_obj_id"];

			if (ilObject::_hasUntrashedReference($tr_obj_id))
			{
				include_once("./Services/Tracking/classes/class.ilLPStatusWrapper.php");
				$completed = ilLPStatusWrapper::_lookupCompletedForObject($tr_obj_id);
				foreach ($completed as $user_id)
				{
					if ($a_user_id == $user_id)
					{
						ilBasicSkill::writeUserSkillLevelStatus($skill_level_id,
							$user_id, ilBasicSkill::ACHIEVED);
					}
				}
			}
		}
	}

	/**
	 * Write skill level status
	 *
	 * @param	int		skill level id
	 * @param	int		user id
	 * @param	int		status
	 */
	static function writeUserSkillLevelStatus($a_level_id, $a_user_id,
		$a_status = ilBasicSkill::ACHIEVED, $a_force = false)
	{
		global $ilDB;

		$skill_id = ilBasicSkill::lookupLevelSkillId($a_level_id);
		$trigger = ilBasicSkill::lookupLevelTrigger($a_level_id);
		$trigger_ref_id = $trigger["ref_id"];
		$trigger_obj_id = $trigger["obj_id"];
		$trigger_title = ilObject::_lookupTitle($trigger["obj_id"]);

		$save = false;

		if ($a_force)
		{
			$save = true;
		}
		else
		{
			// check whether current skill user level is identical
			// to the one that should be set (-> no change required)
			$ilDB->setLimit(1);
			$set = $ilDB->query("SELECT status, valid FROM skl_user_skill_level WHERE ".
				"level_id = ".$ilDB->quote($a_level_id, "integer")." AND ".
				"user_id = ".$ilDB->quote($a_user_id, "integer").
				" ORDER BY status_date DESC"
			);
			$rec = $ilDB->fetchAssoc($set);
			if (!$rec["valid"] || $rec["status"] != $a_status)
			{
				$save = true;
			}
		}

		if ($save)
		{
			$now = ilUtil::now();
			$ilDB->manipulate("INSERT INTO skl_user_skill_level ".
				"(level_id, user_id, status_date, skill_id, status, valid, trigger_ref_id,".
				"trigger_obj_id, trigger_title) VALUES (".
				$ilDB->quote($a_level_id, "integer").",".
				$ilDB->quote($a_user_id, "integer").",".
				$ilDB->quote($now, "timestamp").",".
				$ilDB->quote($skill_id, "integer").",".
				$ilDB->quote($a_status, "integer").",".
				$ilDB->quote(1, "integer").",".
				$ilDB->quote($trigger_ref_id, "integer").",".
				$ilDB->quote($trigger_obj_id, "integer").",".
				$ilDB->quote($trigger_title, "text").
				")");

			$ilDB->manipulate("DELETE FROM skl_user_has_level WHERE "
				." user_id = ".$ilDB->quote($a_user_id, "integer")
				." AND level_id = ".$ilDB->quote($a_level_id, "integer")
			);

			if ($a_status == ilBasicSkill::ACHIEVED)
			{
				$ilDB->manipulate("INSERT INTO skl_user_has_level ".
				"(level_id, user_id, status_date, skill_id, trigger_ref_id, trigger_obj_id, trigger_title) VALUES (".
				$ilDB->quote($a_level_id, "integer").",".
				$ilDB->quote($a_user_id, "integer").",".
				$ilDB->quote($now, "timestamp").",".
				$ilDB->quote($skill_id, "integer").",".
				$ilDB->quote($trigger_ref_id, "integer").",".
				$ilDB->quote($trigger_obj_id, "integer").",".
				$ilDB->quote($trigger_title, "text").
				")");
			}
		}
	}

	/**
	 * Get trigger completion
	 *
	 * @param
	 * @return
	 */
	static function getCompletionDateForTriggerRefId($a_user_id, $a_ref_id = null)
	{
		global $ilDB;

		if ($a_ref_id == "")
		{
			$a_ref_id = null;
		}
		else if (!is_array($a_ref_id))
		{
			$a_ref_id = array($a_ref_id);
		}
		if (!is_array($a_user_id))
		{
			$a_user_id = array($a_user_id);
		}

		if ($a_ref_id != null)
		{
			if (!is_array($a_ref_id))
			{
				$a_ref_id = array($a_ref_id);
			}

			$set = $ilDB->query($q = "SELECT user_id, status_date, trigger_ref_id FROM skl_user_has_level WHERE ".
				$ilDB->in("user_id", $a_user_id, false, "integer")." AND ".
				$ilDB->in("trigger_ref_id", $a_ref_id, false, "integer")
			);

			$completion = array();
			while ($rec = $ilDB->fetchAssoc($set))
			{
				if (!isset($completion[$rec["user_id"]][$rec["trigger_ref_id"]]))
				{
					$completion[$rec["user_id"]][$rec["trigger_ref_id"]] = $rec["status_date"];
				}
				else if ($rec["status_date"] < $completion[$rec["user_id"]][$rec["trigger_ref_id"]])
				{
					$completion[$rec["user_id"]][$rec["trigger_ref_id"]] = $rec["status_date"];
				}
			}

			foreach ($a_ref_id as $ref_id)
			{
				foreach ($a_user_id as $user_id)
				{
					if (!isset($completion[$user_id][$ref_id]))
					{
						$completion[$user_id][$ref_id] = false;
					}
				}
			}
		}
		else
		{
			$completion = array();
			foreach ($a_user_id as $user_id)
			{
				include_once 'Services/Membership/classes/class.ilParticipants.php';
				$a_ref_id = ilParticipants::_getMembershipByType($user_id, 'crs', true);

				$set = $ilDB->query($q = "SELECT user_id, status_date, trigger_ref_id FROM skl_user_has_level WHERE ".
					"user_id = ".$ilDB->quote($user_id, "integer")." AND ".
					$ilDB->in("trigger_ref_id", $a_ref_id, false, "integer")
				);

				while ($rec = $ilDB->fetchAssoc($set))
				{
					if (!isset($completion[$user_id][$rec["trigger_ref_id"]]))
					{
						$completion[$user_id][$rec["trigger_ref_id"]] = $rec["status_date"];
					}
					else if ($rec["status_date"] < $completion[$user_id][$rec["trigger_ref_id"]])
					{
						$completion[$user_id][$rec["trigger_ref_id"]] = $rec["status_date"];
					}
				}
				foreach ($a_ref_id as $ref_id)
				{
					if (!isset($completion[$user_id][$ref_id]))
					{
						$completion[$user_id][$ref_id] = false;
					}
				}
			}
			
		}
		return $completion;
	}

	/**
	 * Get trigger completion
	 *
	 * @param
	 * @return
	 */
	static function checkUserCertificateForTriggerRefId($a_user_id, $a_ref_id)
	{
		global $ilDB;

		if (!is_array($a_ref_id))
		{
			$a_ref_id = array($a_ref_id);
		}
		if (!is_array($a_user_id))
		{
			$a_user_id = array($a_user_id);
		}
		$set = $ilDB->query($q = "SELECT user_id, status_date, trigger_ref_id, level_id, skill_id FROM skl_user_has_level WHERE ".
			$ilDB->in("user_id", $a_user_id, false, "integer")." AND ".
			$ilDB->in("trigger_ref_id", $a_ref_id, false, "integer")
		);

		$completion = array();

		$completion = array();
		while ($rec = $ilDB->fetchAssoc($set))
		{
			if (!isset($completion[$rec["user_id"]][$rec["trigger_ref_id"]])
				&& ilBasicSkill::_lookupCertificate($rec["skill_id"], $rec["level_id"]))
			{
				$completion[$rec["user_id"]][$rec["trigger_ref_id"]] = true;
			}
		}

		foreach ($a_ref_id as $ref_id)
		{
			foreach ($a_user_id as $user_id)
			{
				if (!isset($completion[$user_id][$ref_id]))
				{
					$completion[$user_id][$ref_id] = false;
				}
			}
		}
		return $completion;

	}

	/**
	 * Lookup level achievement date
	 *
	 * @param
	 * @return
	 */
	function lookupLevelAchievementDate($a_user_id, $a_level_id)
	{
		global $ilDB;

		$set = $ilDB->query("SELECT user_id, status_date, trigger_ref_id, level_id, skill_id FROM skl_user_has_level WHERE ".
			" user_id = ".$ilDB->quote($a_user_id, "integer").
			" AND user_id = ".$ilDB->quote($a_user_id, "integer")
		);
		if ($rec = $ilDB->fetchAssoc($set))
		{
			return $rec["status_date"];
		}

		return false;
	}

	/**
	 * Get trigger completion
	 *
	 * @param
	 * @return
	 */
	static function getTriggerOfAllCertificates($a_user_id)
	{
		global $ilDB, $tree;

		if (!is_array($a_user_id))
		{
			$a_user_id = array($a_user_id);
		}

		$set = $ilDB->query($q = "SELECT user_id, status_date, trigger_ref_id, level_id, skill_id FROM skl_user_has_level WHERE ".
			$ilDB->in("user_id", $a_user_id, false, "integer")
		);

		$completion = array();

		while ($rec = $ilDB->fetchAssoc($set))
		{
			if ((!is_array($completion[$rec["user_id"]]) || !in_array($rec["trigger_ref_id"], $completion[$rec["user_id"]]))
				&& ilBasicSkill::_lookupCertificate($rec["skill_id"], $rec["level_id"]))
			{
				if ($tree->isInTree($rec["trigger_ref_id"]))
				{
					$completion[$rec["user_id"]][] = $rec["trigger_ref_id"];
				}
			}
		}

		foreach ($a_user_id as $user_id)
		{
			if (!is_array($completion[$user_id]))
			{
				$completion[$user_id] = array();
			}
		}
		return $completion;
	}

	/**
	 * Get assigned skill levels for trigger
	 *
	 * @param
	 * @return
	 */
	static function getSkillLevelsForTrigger($a_ref_id)
	{
		global $ilDB;

		$set = $ilDB->query($q = "SELECT id FROM skl_level".
			" WHERE trigger_ref_id = ".$ilDB->quote($a_ref_id, "integer"));

		$skill_levels = array();
		while ($rec = $ilDB->fetchAssoc($set))
		{
			$skill_levels[] = $rec["id"];
		}

		return $skill_levels;

	}

	//
	//
	// Certificate related methods
	//
	//

	/**
	 * Get title for certificate
	 *
	 * @param
	 * @return
	 */
	function getTitleForCertificate()
	{
		return $this->getTitle();
	}

	/**
	 * Get title for certificate
	 *
	 * @param
	 * @return
	 */
	function getLevelTitleForCertificate($a_level_id)
	{
		return ilBasicSkill::lookupLevelTitle($a_level_id);
	}

	/**
	 * Get trigger title for certificate
	 *
	 * @param
	 * @return
	 */
	function getTriggerTitleForCertificate($a_level_id)
	{
		$tr = ilBasicSkill::lookupLevelTrigger($a_level_id);
		return ilObject::_lookupTitle($tr["obj_id"]);
	}

	/**
	 * Get short title for certificate
	 *
	 * @param
	 * @return
	 */
	function getShortTitleForCertificate()
	{
		return "Skill";
	}

	/**
	 * Checks whether a skill level has a certificate or not
	 * @param int	skill id
	 * @param int	skill level id
	 * @return true/false
	 */
	public static function _lookupCertificate($a_skill_id, $a_skill_level_id)
	{
		$certificatefile = CLIENT_WEB_DIR."/certificates/skill/".
			((int)$a_skill_id)."/".((int) $a_skill_level_id)."/certificate.xml";
		if (@file_exists($certificatefile))
		{
			return true;
		}
		else
		{
			return false;
		}
	}



}
?>
