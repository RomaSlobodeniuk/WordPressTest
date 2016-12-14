<?php get_header(); ?>

    <div class="container">
        <div class="jumbotron row">
            <div class="col-sm-12">
                <main>
                    <?php while (have_posts()) : the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="picture">
                                <?php the_post_thumbnail('thumbnail',
                                    $attr = array(
                                    'class' => "img-circle",
                                )); ?>
                            </div>
                        <?php endif; ?>
                        <div><?php the_excerpt(); ?></div>
                        <a class="btn btn-sm btn-primary" href="<?php echo get_permalink(); ?>"> Read more </a>
                        <hr/>
                    <?php endwhile; ?>
                </main>
            </div>

        </div>
    </div>

<?php get_footer(); ?>