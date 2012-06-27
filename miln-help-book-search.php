<?php
/*
Plugin Name: Miln Help Book Search
Plugin URI: http://miln.eu/helpbooksearch/
Description: Provide Mac application help with WordPress.
Version: 1.0
Author: Graham Miln
Author URI: http://miln.eu/
License: GPL2

Thanks to Jon Cave for his example on writing a WordPress endpoint based plug-in.
Thanks to Ryan Nutt for his function to return a shorten string.

*/

/*  Copyright 2012  Graham Miln  (email : graham.miln@miln.eu)

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

/* Make sure we don't expose any info if called directly */
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

function helpbooksearch_shorten($string, $wordsreturned) {
	$retval = $string;
	$array = explode(' ', $string);
	if (count($array) <= $wordsreturned) {
		$retval = $string;
	} else {
		array_splice($array, $wordsreturned);
		$retval = implode(' ', $array).' ...';
	}
	return $retval;
}

function helpbooksearch_add_endpoint() {
        add_rewrite_endpoint( 'helpbook', EP_ALL );
}
add_action('init','helpbooksearch_add_endpoint');

function helpbooksearch_template_redirect() {
        global $wp_query;

		// search only; or helpbook in query
        if ( ! isset( $wp_query->query_vars['helpbook'] ) || ! is_search() )
                return;

		header('Content-Type: text/xml');

        // include custom template
		include dirname( __FILE__ ) . '/template-search.php';
        exit;
}
add_action( 'template_redirect', 'helpbooksearch_template_redirect' );

function helpbooksearch_activate() {
        // ensure our endpoint is added before flushing rewrite rules
        helpbooksearch_add_endpoint();
        // flush rewrite rules - only do this on activation as anything more frequent is bad!
        flush_rewrite_rules();
}
register_activation_hook(__FILE__,'helpbooksearch_activate');

function helpbooksearch_deactivate() {
        // flush rules on deactivate as well so they're not left hanging around uselessly
        flush_rewrite_rules();
}
register_deactivation_hook(__FILE__,'helpbooksearch_deactivate');
