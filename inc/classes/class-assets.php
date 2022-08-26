<?php
/**
 *
 * Enqueue theme assets
 *
 * @package Aquila
 */

namespace Aquila_Theme\Inc;

use Aquila_Theme\Inc\Traits\Singleton;

class Assets {
    use Singleton;


    protected function __construct(){
        // load classes
        $this->setup_hooks();
    }

    protected function setup_hooks(): void{
        /**
         * Actions.
         */

    }


}
