<?php
/*
 * Plugin Name: Raise Now Widget
 * Description: Ermöglicht die Darstellung des RaiseNow Widgets mit einem Shortcode
 * Version: 1.0.3
 * Author: Samuel Rüegger
 * Author URI: https://rueegger.me
 * Text Domain: helfen-helfen-raisenow-widget
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0
*/

//Funktion um das Javascript in die Seite einzufügen
function helfenhelfen_raisenow_eneque_script() {
	wp_register_script( 'raisenow-script', 'https://widget.raisenow.com/widgets/lema/helfe-077a/js/dds-init-widget-de.js', null, false, true );
	wp_enqueue_script( 'raisenow-script' );
}
add_action( "wp_enqueue_scripts", "helfenhelfen_raisenow_eneque_script" );

//Shortcode für das Spendenwidget
function helfenhelfen_raisenow_shortcode( $atts ) {
	$output = '<div class="dds-widget-container" data-widget="lema"></div>';
	return $output;
}
add_shortcode( 'spendenwidget', 'helfenhelfen_raisenow_shortcode' );