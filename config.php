<?php
	
	define('DB_NAME', 'wikilitica');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');

	if (!defined('ABSPATH')) define('ABSPATH', dirname(__FILE__) . '/');
	if (!defined('BASEURL')) define('BASEURL', '/wikilitica/');
	if (!defined('DBAPI'))	 define('DBAPI', ABSPATH . 'inc/database.php');