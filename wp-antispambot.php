<?php
/*
Plugin Name: WP-AntiSpambot
Plugin URI: http://dustyf.com
Description: A shortcode to encode emails in your content area using the WP antispambot function
Version: 0.1
Author: Dustin Filippini
Author URI: http://dustyf.com
License: GPL2
*/

function df_antispambot_shortcode( $atts, $content = null ) {
	return '<a href=mailto:' . antispambot( $content ) . '>' . antispambot( $content ) . '</a>';
}
add_shortcode( 'email', 'df_antispambot_shortcode');