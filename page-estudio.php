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
			$category = get_the_category(); //Obtengo el ID de la categoría del post
			$this_post = $post->ID;
			$posts = get_posts('numberposts=3&orderby=rand&category=' . $category[0]->cat_ID . '&exclude=' . $this_post);
			foreach($posts as $post) { ?>

		        <div class="col-md-3">
					
		                <div class="thumbnail">
                      <a href="<?php the_permalink() ?>">
		                	<?php the_post_thumbnail('medium');?>
		                    <div class="caption">
		                    	<h5><?php the_title(); ?></h5>
		                        <p><?php echo string_limit_words(get_the_excerpt(), 20); echo '...' ?></p>
		                    </div>
						</div>
	                </a>
				</div>
			<?php } wp_reset_postdata(); ?>
      
		</div>	<!-- .row -->


    </div> <!-- container -->



<?php get_footer() ?>
on-custom'>
	    <?php wp_pagenavi(); //Posts por páginas ?>
    </div>


    </div> <!-- container -->



<?php get_footer() ?>

