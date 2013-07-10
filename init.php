<?php
/**
 * Plugin Name: YITH Custom Login
 * Plugin URI: http://yithemes.com/
 * Description: YITH Custom Login allows you to customize the login and register Wordpress pages.
 * Version: 1.0.0
 * Author: Your Inspiration Themes
 * Author URI: http://yithemes.com/
 * Text Domain: yit
 * Domain Path: /languages/
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Magnifier
 * @version 1.0.0
 */
/*  Copyright 2013  Your Inspiration Themes  (email : plugins@yithemes.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

/* Include common functions */
if( !defined('YITH_FUNCTIONS') ) {
    require_once( 'yit-common/google_fonts.php' );
    require_once( 'yit-common/yit-functions.php' );
    require_once( 'yit-common/yith-panel.php' );
}

load_plugin_textdomain( 'yit', false, dirname( plugin_basename( __FILE__ ) ). '/languages/' );

define( 'YITH_LOGIN', true );
define( 'YITH_LOGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'YITH_LOGIN_DIR', plugin_dir_path( __FILE__ ) );

// Load required classes and functions
require_once('functions.yith-login.php');
require_once('yith-login-options.php');
require_once('class.yith-login-admin.php');
require_once('class.yith-login-frontend.php');
require_once('class.yith-login.php');

// Let's start the game!
global $yith_login;
$yith_login = new YITH_Login();
