<?php 
namespace Page;

class Controller_Page extends \Controller_Frontend
{
	public function action_index()
	{
		$this->theme->set_partial('content', 'page/index');
	}
}