<?php

// Load parent and child theme styles
function twentyseventeen_adam_theme_styles() {
	wp_enqueue_style( 'twentyseventeen-style', get_template_directory_uri(). '/style.css' );
	wp_enqueue_style( 'twentyseventeen-adam-style', get_stylesheet_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_adam_theme_styles' );

// Add custom PHP below here!

// Remove frontend edit links
function twentyseventeen_edit_link() {
	return '';
}

// Remove author byline
function twentyseventeen_posted_on() {
	echo '<span class="posted-on">' . twentyseventeen_time_link() . '</span>';
}
