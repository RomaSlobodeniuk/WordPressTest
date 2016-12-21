<footer>Footer</footer>

<div class="navbar-collapse collapse">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'secondary',
		'menu_class'     => 'nav navbar-nav'
	) );
	?>
</div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/js/my_js.js?12909077'; ?>"></script>
</div>
</body>
</html>