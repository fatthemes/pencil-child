<?php
/**
 * Pencil functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package pencil child
 */

add_action( 'wp_enqueue_scripts', 'pencil_child_enqueue_styles' );

function pencil_child_enqueue_styles() {
    wp_enqueue_style( 'pencil-parent-style', get_template_directory_uri() . '/style.css' );
}
