<?php
/*
Template Name: Página de estudios
*/
?>

<?php get_header() ?>

    <div class="container margin-top-fix"><!-- container -->
		<?php the_post() ?>
		
		<div class="row"><!-- .row -->
        	<div class="col-md-9">
				<div class="thumbnail">
                	<div class="captiondos">		
						<h1><?php the_title() ?></h1>
						 <p class="text-justify"><?php the_content(); ?></p><?php the_content() ?>
					</div>

				</div>
			</div>

			<div class="col-md-3">
       			<div class="entry-header">
          			<div class="sidebar-derecha">

            			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar-derecha')) : ?>


            			<?php endif; ?>
					          
					 </div>
				</div>
			</div>
		</div><!-- .row -->
		<div class="row">
        <div class="encabezado"><h3>Más <?php $current_cat_id = the_category_ID(false); echo get_cat_name($current_cat_id);?></h3></div>
			<?php
		  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
		  $wp_query = new WP_Query(array('cat' => $current_cat_id, 'paged' => $paged));
		  while ($wp_query->have_posts()) : $wp_query->the_post();
		?>
        <div class="col-lg-3">

                <div class="thumbnail">
                	<a href="<?php the_permalink() ?>">
                	<?php the_post_thumbnail('medium');?>
                    <div class="caption">
                    	<h5><?php the_title(); ?></h5>
						<aside><?php the_time ('l j F, Y'); ?></aside>
                        <p><?php echo string_limit_words(get_the_excerpt(), 30); echo '...' ?></p>
                    </div>
                    </a>
				</div>
           
		</div>
	    <?php endwhile; wp_reset_postdata(); ?>

		</div>

		 <!--Inicio de codigo de pagination-->
    <div class='pagination-custom'>
	    <?php wp_pagenavi(); //Posts por páginas ?>
    </div>


    </div> <!-- container -->



<?php get_footer() ?>

