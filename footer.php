<footer>
	<div class="container">
				<?php
            wp_nav_menu( array(
                'menu'              => 'secondary',
                'theme_location'    => 'secondary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'footer-menu',
        		'container_id'      => 'menu-secondary',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
	</div>
     <div class="navbar-header col-md-2">
            <span class='cabecera visible-xs'><?php bloginfo('name'); ?></span>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsible">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-vergel.png"></img></a>
        </div>
</footer>

<?php wp_footer() ?>

</body>
</html>