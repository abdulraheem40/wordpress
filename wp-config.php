<?php
$url = parse_url(getenv("DATABASE_URL"));

define('DB_NAME', trim($url["path"], "/"));
define('DB_USER', $url["user"]);
define('DB_PASSWORD', $url["pass"]);
define('DB_HOST', $url["host"]);
define('DB_PORT', isset($url["port"]) ? $url["port"] : '5432');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Postgres Driver compatibility (agar pg4wp use kar rahe hain)
define('DB_TYPE', 'pgsql');

define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix = 'wp_';

define('WP_DEBUG', true); // Filhal error dekhne ke liye true rakha hai

if ( !defined('ABSPATH') )
    define('ABSPATH', __DIR__ . '/');

require_once(ABSPATH . 'wp-settings.php');
