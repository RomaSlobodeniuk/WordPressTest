<?php

register_nav_menus( array(
	'primary' => __( 'Home' ),
	'secondly' => 'Second menu'
));

function hello_world()
{
	return 'Hello world';
}

register_sidebar(
    array(
        'id' => 'sidebar_pages',
        'name' => __( "Sidebar menu with pages" ),
        'description' => 'This sidebar prints out all the pages we have got...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
register_sidebar(
    array(
        'id' => 'sidebar_posts',
        'name' => __( "Sidebar with posts" ),
        'description' => 'And here we have got all the posts, if any )',
        'before_widget' => '<div id="%1$s" class="widget %2$s"><strong>',
        'after_widget' => '</strong></div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
register_sidebar(
    array(
        'id' => 'sidebar_for_searching',
        'name' => __( "Sidebar for searching" ),
        'description' => 'You can even search...enjoy it',
        'before_widget' => '<div id="%1$s" class="widget %2$s"><strong>',
        'after_widget' => '</strong></div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));