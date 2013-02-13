<?php 
namespace main;

class Controller_Backend_Main_Settings extends \Controller_Backend
{
	public function action_index()
	{
		return \Theme::instance()->get_template()->set('content', \Theme::instance()->view('admin/settings/form'));
	}
}