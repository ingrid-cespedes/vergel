<?php get_header() ?>


  <div class="container margin-top-fix">
      
    <div class="row">

      <div class="encabezado">
          <h3><strong><?php $current_cat_id = the_category_ID(false); echo get_cat_name($current_cat_id);?></strong></h3>
      </div>
      
      
	<!--        
      <div class="btn-group alinearderecha">
          <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Ordenar por<span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
              <li><a href="#">Más Recientes</a></li>
              <li><a href="#">Más Antiguas</a></li>
              <li><a href="#">Más Votados</a></li>
          </ul>
      </div>
	-->
	        
      </div><!-- .row -->

      <!--  <div class="row"> -->
		<?php
		  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
		  $wp_query = new WP_Query(array('cat' => $current_cat_id, 'paged' => $paged));
		  while ($wp_query->have_posts()) : $wp_query->the_post();
		  query_posts('category_name=relatos&showposts=4'); 
		?>

			        <div class="col-md-3">
						<a href="<?php the_permalink() ?>">
			                <div class="thumbnail">
			                	<?php the_post_thumbnail('medium');?>
			                    <div class="caption">
			                    	<h4><?php the_title(); ?></h4>
									<h6><?php the_time ('l j F, Y'); ?></h6>
			                        <h5><?php echo string_limit_words(get_the_excerpt(), 10); echo '...' ?></h5>
			                    </div>
							</div>
		                </a>
					</div>


	<?php endwhile; wp_reset_postdata(); ?>

    <!--Inicio de codigo de pagination-->
	    <?php wp_pagenavi(); //Posts por páginas ?>
    
        
	
	<!-- </div> ¿.row? -->
  </div><!--cierre de container-->

<?php get_footer() ?>