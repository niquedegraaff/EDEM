<?php 
namespace main;

class Controller_Backend_Main extends \Controller_Backend
{
	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		return \Theme::instance()->get_template()->set('content', \Theme::instance()->view('backend/main/index'));
	}
}