<?php
/**
 * Plugin Name: All In One Blog
 * Plugin URI: http://abmsoft.com
 * Description: This plugin helps you to create a easy bloging system with templates.
 * Version: 2.0.1
 * Author: Ashek Al Mahmud
 * Text Domain: aiob-blog
 * Author URI: http://abmsoft.com
 * License: GPL2
 */
define( 'AIOB_L_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'AIOB_L_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

require_once(AIOB_L_PLUGIN_PATH.'admin/scripts.php');
//require_once(AIOB_L_PLUGIN_PATH.'admin/include/db_crud.php');
require_once(AIOB_L_PLUGIN_PATH.'admin/admin_menu.php');

 // Login form
 require_once(AIOB_L_PLUGIN_PATH.'admin/shortcodes.php');
 //after logout
 require_once(AIOB_L_PLUGIN_PATH.'admin/logout.php');
