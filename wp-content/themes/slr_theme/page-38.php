<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <main class="blog-post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>My media files:</h1>
                        </div>
                        <?php
                        $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'attachment',
                            'post_mime_type' => 'image',
                            'post_status' => 'inherit',
                            'posts_per_page' => 1,
                            'orderby' => 'asc',
                            'paged' => $paged
                        );
                        $query_images = new WP_Query($args); ?>

                        <?php foreach (get_images_from_media_library($query_images) as $src):; ?>
                            <?php echo '<img src="' . $src . '" class="img-thumbnail" alt="Cinque Terre">'; ?>
                        <?php endforeach; ?>

                        <?php
                        wp_reset_postdata();

                        // пагинация для произвольного запроса
                        $big = 999999999; // уникальное число
                        ?>
                        <div class="text-center">
                            <?php echo paginate_links(array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'current' => max(1, get_query_var('paged')),
                                'total' => $query_images->max_num_pages,
                                'type' => 'list',
                            ));
                            ?>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php get_footer(); ?>