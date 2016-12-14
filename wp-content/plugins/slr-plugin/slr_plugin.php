<?php

/*
Plugin Name: Test Plugin SLR
Description: This plugin will be doing smth
Version: 0.1
Author: Roma
Author URI: http://circle.com.ua/
Plugin URI: http://circle.com.ua/
*/
define('SLR_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('SLR_PLUGIN_URL', plugin_dir_url(__FILE__));

include_once(SLR_PLUGIN_DIR . 'SlrWidget.php');
register_activation_hook(__FILE__, 'slr_plugin_activation');
register_deactivation_hook(__FILE__, 'slr_plugin_deactivation');

function slr_plugin_activation() {
    // действие при активации
}

function slr_plugin_deactivation() {
    // при деактивации
}


function insertAdditionalText() {
    echo "<h3> Hello World from \"slr-plugin\" created by Roma :) </h3>";
}

add_action('the_content_from_plugin', 'insertAdditionalText');



add_action("widgets_init", function () {
    register_widget("SlrWidget");
});

register_sidebar(
    array(
        'id' => 'new_sidebar',
        'name' => __( "My widget #1" ),
        'description' => 'Just created widget',
        'before_widget' => '<div id="%1$s" class="widget %2$s ourselve">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

function lesson_plugin () {
    echo 'Hello World';
}

add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page ()
{
    add_menu_page( 'Lesson Plugin', 'Lesson PL main', 'manage_options', 'lesson_plugin_main', 'lesson_plugin', null, 59 );
    add_submenu_page( 'lesson_plugin_main', 'Lesson sub Plugin', 'Lesson PL sub', 'manage_options', 'lesson_pl_sub_1', 'lesson_plugin');
}

define('LESSON_PLUGIN_BOX', 'lesson_plugin_box');

function custom_meta_box ( $args ) {
    var_dump($args);
    echo 'Hello from custom box_menu';
}

add_action( 'add_meta_boxes', 'add_custom_meta_box' );

function add_custom_meta_box () {
    add_meta_box( LESSON_PLUGIN_BOX, 'Lesson plugin', 'custom_meta_box', ['post', 'page'], 'advanced', 'high', $post );
}