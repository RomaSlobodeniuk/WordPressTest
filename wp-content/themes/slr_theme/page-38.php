<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <main class="blog-post">
                    <h1>My media files:</h1>
                    <?php foreach (get_images_from_media_library() as $src):; ?>
                        <?php echo '<img src="' . $src . '" class="img-thumbnail" alt="Cinque Terre">'; ?>
                    <?php endforeach; ?>
                </main>
            </div>
        </div>
    </div>

<?php get_footer(); ?>