<?php

// Define path to application directory
defined('APPLICATION_PATH') ||
 define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../../../application'));

// Define application environment
defined('APPLICATION_ENV') ||
 define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

defined('SITE_PATH') ||
 define('SITE_PATH', realpath(dirname(__FILE__) . '/..'));

require_once 'Aroo/Bootstrap.php';
