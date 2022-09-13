<?php
spl_autoload_register('experts_autoloader');
function experts_autoloader($class) {
	$namespace = 'AWhitePixel\Theme';
 
	if (strpos($class, $namespace) !== 0) {
		return;
	}
 
	$class = str_replace($namespace, '', $class);
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
 
	$directory = get_template_directory();
	$path = $directory . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $class;
 
	if (file_exists($path)) {
		require_once($path);
	}
}