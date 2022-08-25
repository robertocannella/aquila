<?php

/**
 * Theme functions.
 * 
 * @package Aquila
 * 
 */


// Set the default path
if (!defined('AQUILA_DIR_PATH')){
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

// Add autoloader
require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

// DEBUG TOOL
//echo '<pre>';
//print_r(AQUILA_DIR_PATH);
//wp_die();

// Load our scripts
function aquila_enqueue_scripts(){
    /* Register styles */
   //wp_enqueue_style('main-css',get_template_directory_uri() . '/main.css', ['stylesheet']);
    wp_register_style('style-css', get_stylesheet_uri(),[],filemtime(get_template_directory() . '/style.css'),'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css',[],false,'all');

    /* Register scripts */
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js',[],filemtime( get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.bundle.min.js',['jquery'],false, true);

    /* Enqueue styles */
    wp_enqueue_style('style-css');
    wp_enqueue_style('popper-css');
    wp_enqueue_style('bootstrap-css');

    /* Enqueue scripts */
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');