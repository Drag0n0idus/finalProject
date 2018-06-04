<?php

namespace App\Presenters;


class AchievementsPresenter extends BasePresenter
{
	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}
}
