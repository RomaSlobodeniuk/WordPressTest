<?php

/*
Plugin Name: Test Plugin SLR
Description: This plugin will be doing smth
Version: 0.1
Author: Roma
Author URI: http://circle.com.ua/
Plugin URI: http://circle.com.ua/
*/

register_activation_hook(__FILE__, 'slr-lesson_plugin_activation');
register_deactivation_hook(__FILE__, 'slr-lesson_plugin_deactivation');

function test_plugin_activation() {
    // действие при активации
}

function test_plugin_deactivation() {
    // при деактивации
}

define('TEST_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('TEST_PLUGIN_URL', plugin_dir_url(__FILE__));

function insertAdditionalText() {
    echo "<h3> Hello World from \"slr-plugin\" created by Roma :) </h3>";
}

//add_action('the_content', 'insertAdditionalText');
add_action('the_content_from_plugin', 'insertAdditionalText');