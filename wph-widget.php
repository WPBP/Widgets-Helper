<?php

/**
 * WordPress Widgets Helper Class based on https://github.com/sksmatt/WordPress-Widgets-Helper-Class
 *
 * https://github.com/WPBP/Widgets-Helper
 *
 * @package      WordPress
 * @subpackage   WPH Widget Class
 * @author       Matt Varone & riesurya & Mte90
 * @license      GPLv2
 * @version      1.0.8
 */
if ( !class_exists( 'WPH_Widget' ) && class_exists( 'WP_Widget' ) ) {
	include_once dirname( __FILE__ ) . '/class.wph-widget.php';
}
