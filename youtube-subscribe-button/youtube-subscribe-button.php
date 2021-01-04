<?php
/*
Plugin Name:  Youtube Channel Subscribe Button
Version: 1.0
Description: Display the Youtube Channel Subscribe Button using shortcode. [subscribe_button channel_id="xxxxxxxxxxxxx"] 
Author: Adnan Ahmed
Author URI: https://www.iadnanahmed.com/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: ytsubbtn
*/


// Add Shortcode
function youtube_subscribe_button( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'channel_id' => '',
		),
		$atts
	);

	return '<script src="https://apis.google.com/js/platform.js"></script>

	<div class="g-ytsubscribe" data-channelid="'.$atts['channel_id'].'" data-layout="full" data-count="default"></div>';

}
add_shortcode( 'subscribe_button', 'youtube_subscribe_button' );