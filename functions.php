<?php

add_action( 'wp_enqueue_scripts', 'theme_css');

function theme_css() {
    wp_enqueue_style('css', get_template_directory_uri() . '/css/style.css');
}
?>