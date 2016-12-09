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