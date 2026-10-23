<?php
$database_url = getenv('DATABASE_URL');
$url = $database_url ? parse_url($database_url) : array();

define('DB_NAME', trim(isset($url['path']) ? $url['path'] : getenv('PGDATABASE'), '/'));
define('DB_USER', isset($url['user']) ? rawurldecode($url['user']) : getenv('PGUSER'));
define('DB_PASSWORD', isset($url['pass']) ? rawurldecode($url['pass']) : getenv('PGPASSWORD'));
define('DB_HOST', isset($url['host']) ? $url['host'] : getenv('PGHOST'));
define('DB_PORT', isset($url['port']) ? $url['port'] : (getenv('PGPORT') ?: '5432'));
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
