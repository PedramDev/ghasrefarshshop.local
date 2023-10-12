<?php
/**
 */
/*
Plugin Name: پیش نمایش
Plugin URI: https://atinabweb.com/
Description: پیش نمایش
Version: 1.0
Author: پدرام کریمی
Author URI: https://atinabweb.com/
License: GPLv2 or later
Text Domain: CODEYA_PREVIEW
*/
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

#region consts
const LOGGER_PATH = __FILE__;
const CODEYA_PREVIEW_PLUGIN_FILE = __FILE__;
const CODEYA_PREVIEW_VERSION = '1.0';


define( 'CODEYA_PREVIEW_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'CODEYA_PREVIEW_PLUGIN_URL', plugins_url() );


require_once( CODEYA_PREVIEW_PLUGIN_DIR . 'inc/index.php' );
require_once( CODEYA_PREVIEW_PLUGIN_DIR . 'logger.php' );
