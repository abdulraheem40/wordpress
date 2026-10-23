<?php
// Heroku Database Connection Config
$dbopts = parse_url(getenv('DATABASE_URL'));

define('DB_NAME', ltrim($dbopts["path"], '/'));
define('DB_USER', $dbopts["user"]);
define('DB_PASSWORD', $dbopts["pass"]);
define('DB_HOST', $dbopts["host"]);
define('DB_PORT', $dbopts["port"]);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Authentication Unique Keys and Salts
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix = 'wp_';

define('WP_DEBUG', false);

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
