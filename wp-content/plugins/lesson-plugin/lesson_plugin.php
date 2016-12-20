<?php
/*
Plugin Name: Lesson Plugin
Description: This plugin will be doing smth
Version: 0.1
Author: Circle Group Class
Author URI: http://circle.com.ua/
Plugin URI: http://circle.com.ua/
*/

define('LESSON_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('LESSON_PLUGIN_URL', plugin_dir_url(__FILE__));

include_once(LESSON_PLUGIN_DIR . 'lesson_widget.php');

register_activation_hook(__FILE__, 'lesson_plugin_activation');
register_deactivation_hook(__FILE__, 'lesson_plugin_deactivation');

function lesson_plugin_activation()
{
    // действие при активации
}

function lesson_plugin_deactivation()
{
    // при деактивации
}

add_action("widgets_init", function () {
//  register_widget("TextWidget");
    register_widget("lesson_widget");
});

register_sidebar(
    array(
        'id' => 'sidebar3',
        'name' => __("Lesson Widget"),
        'description' => 'Place for lesson widget',
        'before_widget' => '<div id="%1$s" class="widget %2$s ourselve">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

function lesson_plugin()
{
    echo "<div>";
    echo 'Hello World from the "lesson_plugin"!';
    echo '</div>';
}

add_action('admin_menu', 'register_my_custom_menu_page');

function register_my_custom_menu_page()
{
    add_menu_page('Lesson Plugin', 'Lesson PL', 'manage_options', 'lesson_plugin_1', 'lesson_plugin', null, 59);
    add_submenu_page('lesson_plugin_1', 'Lesson sub Plugin', 'Lesson sub PL', 'manage_options', 'lesson_plugin_2', 'lesson_plugin');
}

define('LESSON_PLUGIN_BOX', 'lesson_plugin_box');

function custom_meta_box($args)
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    echo 'Hello from custom box_menu';
}

function add_custom_meta_box()
{
    add_meta_box(LESSON_PLUGIN_BOX, 'Lesson plugin BOX', 'custom_meta_box', ['post', 'page'], 'side', 'high', $post);
}

add_action('add_meta_boxes', 'add_custom_meta_box');
