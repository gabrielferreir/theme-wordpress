<?php

add_action('wp_enqueue_scripts', 'theme_css');

function theme_css()
{
    wp_enqueue_style('css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('smn-ui', get_template_directory_uri() . '/css/smn-ui.css');
}

add_action('init', 'twtema_action_init');

function twtema_action_init()
{
    register_nav_menu('twmenu-principal', 'Menu principal');
}

?>
