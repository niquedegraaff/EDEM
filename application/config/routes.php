<?php
return array(
	'_root_'			=> (SUBDOMAIN != 'backend') ? 'main/frontend/index' : 'main/backend',  // The default route
	'_404_'				=> 'main/frontend/404',    // The main 404 route
	
	// Frontend routes
	'error/404'			=> 'main/frontend/404',
	'(:segment)'		=> 'page/view/$1',
	'page/(:num)'		=> 'page/view/$1',
	
	// Backend routes
	//'dashboard' => 'main/backend/dashboard'
);