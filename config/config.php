<?php

/**
 * Global configuration of application.
 */
define('SERVEUR_URL', 'https://box-ubuntu-mickaelandrieu.c9users.io/WePlayMusic.fr');
define('BASE_URL', SERVEUR_URL.'/');
define('BASE_FILE', __DIR__.'/../');

define('LIB_FILE', BASE_FILE.'modeles/');

define('PUBLIC_URL', BASE_URL.'public/');
define('ADMIN_URL', BASE_URL.'admin/');

/*
 * files repository 
 */
define('ENTREPOT_URL', BASE_URL.'entrepot/');
define('ENTREPOT_FILE', BASE_FILE.'entrepot/');

/*
 * external libraries
 */
define('HELPER_URL', BASE_URL.'helpers/');
define('HELPER_FILE', BASE_FILE.'helpers/');

/*
 * Database configuration
 */
if (!defined('DB_CONFIG')) {
    define('DB_CONFIG', 'config/config_db.php');
}

require_once BASE_FILE.'vendor/autoload.php';
\Symfony\Component\Debug\Debug::enable();

if(!defined('ENV_TEST')) {
    require_once BASE_FILE.DB_CONFIG;
} else {
    require_once __DIR__.'/../tests/config_test_db.php';
}
