<?php
/*
Template Name: Página croquis de fondo
*/
?>

<?php get_header() ?>

<div class="background-croquis">
    <div class="container margin-top-fix">
		<?php the_post() ?>
		
		<div class="row">
        	<div class="col-md-6">
				<div class="thumbnail">
                	<div class="caption">		
						<h1><?php the_title() ?></h1>
						<?php the_content() ?>
					</div>
				</div>
			</div>
			

		<?php if (get_post_meta($post->ID, "sidebar", true)) { ?>
			<div class="col-md-6">
				<div class="cajaregistro">
					<?php echo do_shortcode(get_post_meta($post->ID, "sidebar", true)); ?>
				</div>
			</div>
		<? } ?>				

			
		</div><!-- .row -->
    </div> <!-- container -->
</div><!-- background-croquis -->

<?php get_footer() ?>