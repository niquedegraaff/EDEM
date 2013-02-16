<?php 
namespace Page;

class Controller_Page extends \Controller_Frontend
{
	public function action_index()
	{
		$this->theme->set_partial('content', 'page/index');
	}

	public function action_view($id)
	{
		$page = (is_numeric($id)) ? Model_Page::find($id) : Model_page::find_by_slug($id);

		if ($page)
			$this->theme->set_partial('content', 'page/view')->set('page', $page);
		else
			$this->theme->set_partial('content', 'main/frontend/404');		
	}
}