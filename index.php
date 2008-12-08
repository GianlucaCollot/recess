<?php
/**
 * This file allows your recess application to work without .htaccess
 * by using the following url: http://www.somehost.com/index.php/path/to/your/app
 * 
 * This is discouraged over using a proper .htaccess rewrite.
 * 
 * Once .htaccess is working go ahead and delete this file.
 * 
 * @author Kris Jordan
 */

define('INDEX_PHP','index.php');
$pos = strpos($_SERVER['PHP_SELF'], INDEX_PHP);
$base = substr($_SERVER['PHP_SELF'],0,$pos + strlen(INDEX_PHP));
$_ENV['url.content'] = str_replace(INDEX_PHP,'',$base) . 'content/';
$_SERVER['PHP_SELF'] = $base . '/bootstrap.php';
$_SERVER['REQUEST_URI'] = str_replace(INDEX_PHP, '', $_SERVER['REQUEST_URI']);

require_once('bootstrap.php');
?>