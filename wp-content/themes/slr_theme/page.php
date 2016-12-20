<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 blog-main">
            <main class="blog-post">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="well well-lg">data posts: <?php the_date(); ?></div>
                        <div class="well well-lg"><?php the_content(); ?></div>
                        <hr/>
                    </div>
                <?php endwhile; ?>
            </main>
        </div>
        <div class="col-sm-3">
            <div class="panel-group">
                <?php if (!dynamic_sidebar('new_sidebar')) : ?><?php endif; ?>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>
