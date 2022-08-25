<?php

/**
 * Theme functions.
 * 
 * @package Aquila
 * 
 */

// DEBUG TOOL
//echo '<pre>';
//print_r(get_template_directory_uri());
//wp_die();

// Load our scripts
function aquila_enqueue_scripts(){
    /* REGISTER STYLES AND SCRIPTS */
   //wp_enqueue_style('main-css',get_template_directory_uri() . '/main.css', ['stylesheet']);
    wp_register_style('style-css', get_stylesheet_uri(),[],filemtime(get_template_directory() . '/style.css'),'all');
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js',[],filemtime( get_template_directory() . '/assets/main.js'), true);

    /* ENQUEUE STYLES AND SCRIPTS */
    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');