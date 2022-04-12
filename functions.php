<?php

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME VERSION
-----------------------------------------------------*/

//define('NEWSPRK_DEV_MODE',true);

if( defined( 'NEWSPRK_DEV_MODE' ) ){
	define( 'NEWSPRK_VERSION', time() );
	define( 'NEWSPRK_SCRIPT_VAR', '.' );
}else{
	define( 'NEWSPRK_VERSION', '3.5.4' );
	define( 'NEWSPRK_SCRIPT_VAR', '.min.' );
}

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME ASSETS URL
-----------------------------------------------------*/
define( 'NEWSPRK_THEME_URI', get_template_directory_uri() );

if ( !defined( 'NEWSPRK_IMG' ) ) {
    define( 'NEWSPRK_IMG', NEWSPRK_THEME_URI . '/assets/img' );
}

define( 'NEWSPRK_CSS', NEWSPRK_THEME_URI . '/assets/css' );
define( 'NEWSPRK_JS', NEWSPRK_THEME_URI . '/assets/js' );

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME ASSETS DIRECTORY PATH
-----------------------------------------------------*/
define( 'NEWSPRK_THEME_DIR', get_template_directory() );

/*----------------------------------------------------
LOAD COMPOSER PSR - 4
-----------------------------------------------------*/

require_once NEWSPRK_THEME_DIR . '/autoload.php';


/*----------------------------------------------------
SET UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN
-----------------------------------------------------*/
if ( !isset( $content_width ) ) {
    $content_width = 800;
}

Newsprk\newsprk_init::register_services();

/*----------------------------------------------------
UTILITY
-----------------------------------------------------*/
require_once NEWSPRK_THEME_DIR . '/app/utility/global.php';
require_once NEWSPRK_THEME_DIR . '/app/utility/helpers.php';
require_once NEWSPRK_THEME_DIR . '/app/utility/template-tags.php';
require_once NEWSPRK_THEME_DIR . '/woocommerce/woo-setup.php';
/*----------------------------------------------------
AJAX LOAD MORE OPTIONS
-----------------------------------------------------*/
require_once NEWSPRK_THEME_DIR . '/app/core/customhook/ajax.php';