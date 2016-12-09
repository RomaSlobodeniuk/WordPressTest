<?php get_header(); ?>

<div class="container">
    <?php get_sidebar(); ?>
    <div id="main">

        <div class="col-sm-9">
            <main>

                <?php while (have_posts()) {
                    the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                    <?php do_action('the_content_from_plugin'); ?>
                    <hr/>
                <?php } ?>

            </main>
        </div>
    </div>

</div>

<?php get_footer(); ?>
