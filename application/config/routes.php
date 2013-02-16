<?php
return array(
	'_root_'			=> (stristr($_SERVER['HTTP_HOST'],".",true) != 'backend') ? 'main/frontend' : 'main/backend',  // The default route
	'_404_'				=> 'frontend/404',    // The main 404 route
	
	// Frontend routes
	
	
	// Backend routes
	//'dashboard' => 'main/backend/dashboard'
);