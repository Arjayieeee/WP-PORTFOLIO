<?php

    function portfolio_assets(){
        wp_enqueue_style('arch_style', get_template_directory_uri(). '/css/main.css', microtime());
    }
    add_action('wp_enqueue_scripts','portfolio_assets');
