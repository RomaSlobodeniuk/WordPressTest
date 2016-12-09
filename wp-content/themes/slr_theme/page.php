<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 blog-main">
                <main class="blog-post">
                    <?php while (have_posts()) : the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <div>data posts: <?php the_date(); ?></div>
                        <div class="com"><?php the_content(); ?></div>
                        <hr/>
                    <?php endwhile; ?>
                </main>
            </div>
        </div>
    </div>

<?php get_footer(); ?>