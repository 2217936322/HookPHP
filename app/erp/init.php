<?php
chdir(__DIR__);
define('APP_ROOT', getcwd());
define('APP_NAME', 'erp');
define('APP_THEME', 'default');
define('APP_CONFIG', Yaconf::get(APP_NAME.'_'.YAF\ENVIRON));
define('APP_TABLE', Yaconf::get(APP_NAME.'_table'));
require APP_ROOT.'/../../vendor/autoload.php';