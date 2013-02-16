<?php 

namespace Main;

class Controller_Frontend extends \Controller_Frontend
{
	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$this->theme->set_partial('content', 'frontend/index');
	}

	public function action_404()
	{
		$this->theme->set_partial('content', 'frontend/404');
	}
}