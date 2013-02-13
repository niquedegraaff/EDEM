<?php namespace main;

class Controller_Main extends \Controller_Frontend
{
	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$this->theme->set_partial('content', 'main/index');
	}

	public function action_404()
	{
		return $this->theme->set_partial('content', \Theme::instance()->view('main/404'));
	}
}