<?php
/**
* Plugin Name: ABP Team PDF Tools
 * Plugin URI: http://abp-wp.com
* Description: This is the  PDF Tools for PDF Ticket, This plugin needs to create pdf file.
 * Version: 1.0.0
 * Author: ABP Team
 * Author URI: http://www.abp-wp.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: abpps_plugin
 * Domain Path: /languages/
 * WC requires at least: 3.0.9
 */
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
if( ! class_exists( 'mPDF' ) ) {
	if (!class_exists('ABPPS_PDF_Support')) {
		class ABPPS_PDF_Support {
			public function __construct() {
				require_once (dirname(__FILE__) . "/lib/vendor/autoload.php");
			}

		}
		new ABPPS_PDF_Support();
	}
}
