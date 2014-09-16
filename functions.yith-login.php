<?php
/**
 * Functions
 *
 * @author Your Inspiration Themes
 * @package YITH Custom Login
 * @version 1.0.2
 */

if ( !defined( 'YITH_LOGIN' ) ) { exit; } // Exit if accessed directly

if( !function_exists( 'yith_login_is_enabled' ) ) {
    /**
     * Return if the plugin is enabled
     *
     * @return bool
     * @since 0.9.0
     */
    function yith_login_is_enabled() {
        return get_option('yith_login_enable') == '1';
    }
}