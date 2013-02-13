<?php 
class Controller_Frontend extends Controller
{
	public function before() 
	{
		parent::before();

		// Load the theme and set template
		$this->theme = \Theme::instance();
		$this->theme->set_template('layouts/default');
		$this->theme->set_partial('header', 'partials/header');
		$this->theme->set_partial('footer', 'partials/footer');
		$this->theme->set_partial('messages', 'partials/messages');
		$this->theme->get_template()->set('title', ucwords(implode(" - ", \Uri::segments())));
		$this->current_user = "Guest";

		// TODO: Authorization check here

		View::set_global('current_user', $this->current_user);
	}

	public function after($response)
	{
		if (empty($response) or !$response instanceof \Response)
		{
			$response = \Response::forge(\Theme::instance()->render());
		}
		return parent::after($response);
	}
}