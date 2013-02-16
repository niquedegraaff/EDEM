<!DOCTYPE html>
<html lang=<?php echo "\"".\Config::get('language')."\""; ?>>
	<head>
		<meta charset="UTF-8">
		<title><?php echo \Config::get('website.title'); echo (($title)) ? ' - '.$title : ''; ?></title>

		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">

	<?php echo \Theme::instance()->asset->css('bootstrap.css'); ?>
	</head>
	<body>
		<?php echo $partials['header'].PHP_EOL; ?>
		<?php echo $partials['content'].PHP_EOL; ?>
		<?php echo $partials['footer'].PHP_EOL; ?>
	<?php echo \Theme::instance()->asset->js('jquery.js'); ?>
	<?php echo \Theme::instance()->asset->js('bootstrap.js'); ?>
	</body>
</html>