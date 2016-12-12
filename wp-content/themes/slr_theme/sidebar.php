<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php if (!dynamic_sidebar('sidebar_pages')) : ?><?php endif; ?>
    <?php if (!dynamic_sidebar('sidebar_posts')) : ?><?php endif; ?>
    <?php if (!dynamic_sidebar('new_sidebar')) : ?><?php endif; ?>
</div>