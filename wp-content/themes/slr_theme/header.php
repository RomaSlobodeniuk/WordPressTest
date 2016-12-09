<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>
</head>
<body>

<div id="main">

    <header>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php home_url('/'); ?>"> <?php bloginfo('name'); ?> </a>
                    <a class="navbar-brand"><span onclick="openNav()">Sidebar navigation</span></a>
                </div>
                <ul class="nav navbar-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'nav navbar-nav'
                    ));
                    ?>
                </ul>
                <?php if (!dynamic_sidebar('sidebar_for_searching')) : ?><?php endif; ?>
            </div>
        </nav>
        <div>
            <?php get_sidebar(); ?>
        </div>

    </header>