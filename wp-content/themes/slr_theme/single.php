<?php get_header(); ?>

<div class="container">
    <div class="jumbotron>">

        <main>
            <?php while (have_posts()) {
                the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
                <div class="alert alert-info">
                    <?php do_action('the_content_from_plugin'); ?>
                </div>
                <hr/>
            <?php } ?>

        </main>
    </div>
</div>

</div>

<?php get_footer(); ?>
