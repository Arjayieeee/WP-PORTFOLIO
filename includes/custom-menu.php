<?php

function wp_menu_li(){
    $options = array(
        'echo'          => false,
        'container'     => false,
        'theme_location'=> 'header__nav'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);
    

}