<?php get_header() ?>


  <div class="container margin-top-fix">
      
   
<div class="encabezado" >
	<h3 data-popup="Font: Merriweather, Font Size: @font-size-h3, Color: @rojo"><?php $current_cat_id = the_category_ID(false); echo get_cat_name($current_cat_id);?></h3>
</div>

<div class="row">

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
                    	<h5 data-popup="Font: Merriweather, Font Size: @font-size-base, Color: @rojo"><?php the_title(); ?></h5>
						<aside data-popup="Font: Open Sans, Font-size: 12px, Color: @gray"><?php the_time ('l j F, Y'); ?></aside>
                        <p data-popup="Font: Open Sans, Font-Size: @font-size-base, Color: @gray-dark"><?php echo string_limit_words(get_the_excerpt(), 30); echo '...' ?></p>
                    </div>
                    </a>
				</div>
           
		</div>
	    <?php endwhile; wp_reset_postdata(); ?>

</div><!-- .row -->



					

	

    <!--Inicio de codigo de pagination-->
    <div class='pagination-custom'>
	    <?php wp_pagenavi(); //Posts por páginas ?>
    </div>
        
	
	<!-- </div> ¿.row? -->
  </div><!--cierre de container-->

<?php get_footer() ?>