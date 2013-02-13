<?php 
class Controller_Backend extends \Controller
{
	public $template	= 'backend/default';
	public $data		= array();

	public function before()
	{
		// Filter Ajax requests
		if (\Input::is_ajax())
			return parent::before();

		// Set empty values to avoid errors
		$this->data['site']		= array();
		$this->data['template']	= array();
		$this->data['page']		= array();

		// Initial configuration
		\Package::load('nvutility');
		\Theme::instance()->active('backend-theme');
		\Theme::instance()->set_template($this->template);
		\Theme::instance()->asset->add_path('upload/');

		// Setting authorization
		$permission = array($this->request->controller, $this->request->action);
		$roles = \Config::get('simpleauth.roles', array());

		$auth_id = \Auth::instance()->get_user_id();
		$this->global_user = Model_User::find($auth_id[1]);

		// Authorization check
		if (!\Auth::check()) {
			\Session::set_flash('error', 'No permission!');
			\Response::redirect('backend/login');
		}

		// Check if user can access this section
		if (!\NVUtility\NVPermission::is_allowed($permission)) 
		{
			if (\NVUtility\NVPermission::is_allowed(array('main', $roles['main']['dashboard']))) 
			{
				\Session::set_flash('error', 'You can\'t access this section.');
				\Response::redirect('backend/dashboard');
			}
			else
			{
				\Session::set_flash('error', 'You can\'t access this section.');
				\Response::redirect('backend/login');
			}
		}

		// Set variables
		$this->data['site_values']['global_user'] = $this->global_user;

		$this->data['template_values'] = array(
			'title'			=> 'Site Title',
			'subtitle'		=> 'Default subtitle',
			'description'	=> 'Default description',
			'keywords'		=> 'Default keywords',
		);

		// Set template
		\Theme::instance()->set_partial('header', 'backend/_global/header');
	}

	public function after($response)
	{
		if (!\Input::is_ajax()) {
			\Theme::instance()->set_info('data', $theme->data);

			if (empty($response))
				$response = \Response::forge(\Theme::instance());
		}

		return parent::after($response);
	}
}