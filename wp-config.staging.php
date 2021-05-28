<?php
/**
 * Staging environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment 
 * in this file.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    2.0.0
 * @author     Studio 24 Ltd  <hello@studio24.net>
 */
  

// ** MySQL settings - You can get this info from your web host ** //
/** MySQL hostname */
define('DB_HOST', '34.126.171.74');

/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'phucnv_account');

/** MySQL database password */
define('DB_PASSWORD', '123456aA@');

/** MySQL database password - set in wp-config.local.php */

/**
 * For developers: WordPress debugging mode.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);


// Recommended WP config settings, uncomment to use these

/**
 * Disable theme/plugin upload.
 */
//define( 'DISALLOW_FILE_MODS', true );