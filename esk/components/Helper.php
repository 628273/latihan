<?php

namespace esk\components;

use Yii;

class Helper
{
	
	public static function access($check=array())
	{
		$access = false;
		$roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->id);
		$myrole = array();
		foreach($roles as $rows)
			$myrole[] = $rows->name;

		foreach($check as $rows)
		{
			if(in_array($rows,$myrole))
				$access = true;
		}
		return $access;
	}
	
}

?>