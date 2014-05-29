<?php get_header() ?>

	<div class="background-croquis">
	<div class="container800">
	    <div class="container margin-top-fix">

				<div id="post-0" class="post error404 not-found">
					<div class="encabezado"><h2><?php _e( 'Error 404', 'sandbox' ) ?></h2></div>
					<div class="entry-content">
						<h4><?php _e( 'La página que estás buscando, no ha sido encontrada.', 'sandbox' ) ?></h4>
					</div>
					<form id="searchform-404" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
					</form>
				</div><!-- .post -->

			</div><!-- #container margin top fix-->
		</div><!-- background croquis -->
</div>
<?php get_footer() ?>