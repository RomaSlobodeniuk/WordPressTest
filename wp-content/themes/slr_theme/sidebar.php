<div class="col-sm-3">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <?php if (!dynamic_sidebar('sidebar_pages')) : ?><?php endif; ?>
        <?php if (!dynamic_sidebar('sidebar_posts')) : ?><?php endif; ?>
    </div>
</div>
<!-- Use any element to open the sidenav -->
<span onclick="openNav()">Navigation</span>