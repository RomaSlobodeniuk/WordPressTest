<?php

register_nav_menus( array(
	'primary' => __( 'Main menu' ),
	'secondary' => 'Socials menu'
));

add_theme_support( 'post-thumbnails' );

register_sidebar(
    array(
        'id' => 'sidebar_pages',
        'name' => __( "Sidebar menu with pages" ),
        'description' => 'This sidebar prints out all the pages we have got...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
register_sidebar(
    array(
        'id' => 'sidebar_posts',
        'name' => __( "Sidebar with posts" ),
        'description' => 'And here we have got all the posts, if any )',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
register_sidebar(
    array(
        'id' => 'sidebar_for_searching',
        'name' => __( "Sidebar for searching" ),
        'description' => 'You can even search...enjoy it',
        'before_widget' => '<form class="navbar-form navbar-right">',
        'after_widget' => '</form>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
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
register_sidebar(
    array(
        'id' => 'imho_sidebar',
        'name' => __( "IMHO" ),
        'description' => 'Someone\' humble opinion',
        'before_widget' => '<div class="panel panel-info">',
        'after_widget' => '</div>',
        'before_title' => '<div class="panel-heading"><h2>',
        'after_title' => '</h2></div>'
    ));

function get_images_from_media_library($query_images) {

    $images = array();
    foreach ( $query_images->posts as $image) {
        $images[]= $image->guid;
    }
    return $images;
}