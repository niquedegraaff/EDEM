<?php 

namespace Main;

class Controller_Backend extends \Controller_Backend
{
	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$this->theme->set_partial('content', 'backend/index');
	}
}