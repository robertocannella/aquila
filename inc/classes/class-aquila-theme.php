<?php

/**
 *  Bootstraps the theme.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
    use Singleton;

    protected function __construct(){
        // load classes
        Assets::get_instance();

        $this->setup_hooks();
    }
    protected function setup_hooks(): void{
        /**
         * Actions.
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);

    }
    public function register_styles():void{

        /* Register styles */
        //wp_enqueue_style('main-css',get_template_directory_uri() . '/main.css', ['stylesheet']);
        wp_register_style('style-css', get_stylesheet_uri(),[],filemtime(AQUILA_DIR_PATH . '/style.css'),'all');
        wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css',[],false,'all');

        /* Enqueue styles */
        wp_enqueue_style('style-css');
        wp_enqueue_style('popper-css');
        wp_enqueue_style('bootstrap-css');
    }
    public function register_scripts():void{

        /* Register scripts */
        wp_register_script('main-js', AQUILA_DIR_URI . '/assets/main.js',[],filemtime( AQUILA_DIR_PATH . '/assets/main.js'), true);
        wp_register_script('bootstrap-js', AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.bundle.min.js',['jquery'],false, true);

        /* Enqueue scripts */
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }

}

