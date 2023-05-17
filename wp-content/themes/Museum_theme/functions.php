<?php

function Museum_theme_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'style-G', get_template_directory_uri() . '/Главная/styleG.css');
    wp_enqueue_style( 'style-P', get_template_directory_uri() . '/Главная/styleP.css');
    wp_enqueue_style( 'style-PUB', get_template_directory_uri() . '/Главная/stylePUB.css');
    wp_enqueue_style( 'style-T', get_template_directory_uri() . '/Главная/styleT.css');
    wp_enqueue_style( 'style-TT', get_template_directory_uri() . '/Главная/styleTT.css');
    wp_enqueue_style( 'style-NEWS', get_template_directory_uri() . '/Главная/styleNEWS.css');
    wp_enqueue_style( 'style-News-Page', get_template_directory_uri() . '/Главная/styleNewsPage.css');
    wp_enqueue_style( 'itc-slider', get_template_directory_uri() . '/Главная/itc-slider/itc-slider.min.css');
    

	wp_enqueue_script( 'itc-slider', get_template_directory_uri() . 'itc-slider/itc-slider.js', array(), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'Museum_theme_scripts' );


function wptutsplus_register_theme_menu() {
    register_nav_menu( 'primary', 'Main Navigation Menu' );
}
add_action( 'init', 'wptutsplus_register_theme_menu' );
?>