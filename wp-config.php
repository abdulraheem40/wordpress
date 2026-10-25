<?php
$database_url = getenv('WORDPRESS_DATABASE_URL') ?: getenv('DATABASE_URL');
$url = $database_url ? parse_url($database_url) : array();

$db_name = trim(isset($url['path']) ? $url['path'] : getenv('PGDATABASE'), '/');
$db_user = isset($url['user']) ? rawurldecode($url['user']) : getenv('PGUSER');
$db_password = isset($url['pass']) ? rawurldecode($url['pass']) : getenv('PGPASSWORD');
$db_host = isset($url['host']) ? $url['host'] : getenv('PGHOST');
$db_port = isset($url['port']) ? $url['port'] : (getenv('PGPORT') ?: '5432');

if (!$db_host) {
    $db_host = 'c89hfa8mgg235.cluster-czrs8kj4isg7.us-east-1.rds.amazonaws.com';
}

if (!$db_name || !$db_user || !$db_password) {
    die('Database configuration is incomplete. Set DATABASE_URL in the application environment and redeploy.');
}

define('DB_NAME', $db_name);
define('DB_USER', $db_user);
define('DB_PASSWORD', $db_password);
define('DB_HOST', $db_host);
define('DB_PORT', $db_port);
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
