<?php 
//ladda eget .css stylesheets
function load_stylesheets() {
    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.css',array(),false,false);
    wp_enqueue_style('bootstrap');

    wp_register_style('style',get_template_directory_uri() . '/css/style.css',array(),false,false);
    wp_enqueue_style('style');

    wp_register_style('font-awesome',get_template_directory_uri() . '/css/font-awesome.css',array(),false,false);
    wp_enqueue_style('font-awesome');
};
add_action('wp_enqueue_scripts','load_stylesheets');

// ladda eget js
function addjs() {
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js',array(),false,false);
    wp_enqueue_script('jquery');

    wp_register_script('script', get_template_directory_uri() . '/js/script.js',array(),false,false);
    wp_enqueue_script('script');
};
add_action('wp_enqueue_scripts','addjs');

//Aktivera thumbnails verktyget inuti wordpress admin toolbox.
function get_title() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
};
add_action('after_setup_theme','get_title');
//Aktivera widgets verktyget inuti wordpress admin toolbox.
function ourWidgetsInit(){
    register_sidebar( array (
        'name' => 'Sidebar',
        'id' => 'sidebar1',));
};
add_action('widgets_init','ourwidgetsinit');