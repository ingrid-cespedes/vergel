<?php get_header() ?>

<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron margin-top-fix">
    <div class="container">

        <h1>Concurso de ideas y relatos</h1>
        <p>Ideas para convertir las ruinas de Vergel 439 en un espacio socio-cultural</p>
        <p>Lee las <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Concurso' ) ) ); ?>">bases aquí</a> </p>

		<?php global $current_user; get_currentuserinfo(); if (is_user_logged_in () ) { ?>
    		<p>Ya estás registrado, ahora sólo te falta compartir tu historia.</p>
    		<a class="btn btn-participa btn-rnd" role="button" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Participa' ) ) ); ?>">Participa</a>
		<?php } else { ?>	
			<a class="btn btn-registrate btn-rnd" role="button" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Regístrate' ) ) ); ?>">Regístrate</a>
    		<a class="btn btn-participa btn-rnd" role="button" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Participa' ) ) ); ?>">Participa</a>			
		<?php }	?>

    </div>
</div>

<!-- Galería -->

    <div class="container">

    	 <div class="row">
         <div class="encabezado"><h3 data-popup="Font: Merriweather, Font Size: @font-size-h3, Color: @rojo">Últimas Ideas</h3></div>
			<?php query_posts('category_name=ideas&showposts=4'); ?>
				<?php while (have_posts()) : the_post(); ?>
			        <div class="col-md-3">
						
			                <div class="thumbnail-relatos">
			                	<a href="<?php the_permalink() ?>">
			                    <div class="caption">
			                    	<h4 data-popup="Font: Merriweather, Font Size: @font-size-h4, Color: @rojo"><?php the_title(); ?></h4>
			                        <p data-popup="Font: Open Sans, Font-Size: @font-size-base, Color: @gray-dark"><?php echo string_limit_words(get_the_excerpt(), 45); echo '...' ?></p>
			                    </div>
							</div>
		                </a>
					</div>
			<?php endwhile; ?>
		</div>


    	 <div class="row">
          <div class="encabezado"><h3 data-popup="Font: Merriweather, Font Size: @font-size-h3, Color: @rojo">Últimos Relatos</h3></div>
			<?php query_posts('category_name=relatos&showposts=4'); ?>
				<?php while (have_posts()) : the_post(); ?>
			        <div class="col-md-3">

			                <div class="thumbnail-relatos">
			                	<a href="<?php the_permalink() ?>">
			                	<?php the_post_thumbnail('small');?>
			                    <div class="caption">
			                    	<h5 data-popup="Font: Merriweather, Font Size: @font-size-base, Color: @rojo"><?php the_title(); ?></h5>
			                    	<aside data-popup="Font: Open Sans, Font-size: 12px, Color: @gray"><?php the_time ('l j F, Y'); ?></aside>
			                        <p data-popup="Font: Open Sans, Font-Size: @font-size-base, Color: @gray-dark"><?php echo string_limit_words(get_the_excerpt(), 45); echo '...' ?></p>
			                    </div>
							</div>
		                </a>
					</div>
			<?php endwhile; ?>
		</div>
     
      
      <!-- fin primer row -->
      <div class="row">
        <div class="encabezado"><h3 data-popup="Font: Merriweather, Font Size: @font-size-h3, Color: @rojo">Prensa Relacionada</h3></div>
			<?php query_posts('category_name=prensa&showposts=4'); ?>
				<?php while (have_posts()) : the_post(); ?>
			        <div class="col-md-3" data-popup="Width: Col-md-3, Hover: @thumbnail-bg">
			                <div class="thumbnail">
			                	<a href="<?php the_permalink() ?>">
			                	<?php the_post_thumbnail('small');?>
			                    <div class="caption">
			                    	<h5 data-popup="Font: Merriweather, Font Size: @font-size-base, Color: @rojo"><?php the_title(); ?></h5>
			                    	<aside data-popup="Font: Open Sans, Font-size: 12px, Color: @gray"><?php the_time ('l j F, Y'); ?></aside>
			                        <p data-popup="Font: Open Sans, Font-Size: @font-size-base, Color: @gray-dark"><?php echo string_limit_words(get_the_excerpt(), 20); echo '...' ?></p>
			                    </div>
							</div>
		                </a>
					</div>
			<?php endwhile; ?>
      </div>

		<!-- fin segundo row-->



		<!-- tercer row cerrado-->

    </div><!--cierre de container-->

<?php get_footer() ?>