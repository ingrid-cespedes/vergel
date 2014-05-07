<?php get_header() ?>

<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron margin-top-fix">
    <div class="container">

        <h1>Relatos del 12 de Abril</h1>
        <p>Lee las <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Concurso' ) ) ); ?>">bases del concurso</a> y comparte tu experiencia</p>

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
        <div class="encabezado"><h3>Últimas Noticias</h3></div>
			<?php query_posts('category_name=noticias&showposts=4'); ?>
				<?php while (have_posts()) : the_post(); ?>
			        <div class="col-md-3">
						<a href="<?php the_permalink() ?>">
			                <div class="thumbnail">
			                	<?php the_post_thumbnail('medium');?>
			                    <div class="caption">
			                    	<h4><?php the_title(); ?></h4>
			                        <p><?php echo string_limit_words(get_the_excerpt(), 15); echo '...' ?></p>
			                    </div>
							</div>
		                </a>
					</div>
			<?php endwhile; ?>
      </div>
      <!-- fin primer row -->


        <div class="row">
          <div class="encabezado"><h3>Últimos Aportes</h3></div>
			<?php query_posts('category_name=ideas&showposts=4'); ?>
				<?php while (have_posts()) : the_post(); ?>
			        <div class="col-md-3">
						<a href="<?php the_permalink() ?>">
			                <div class="thumbnail">
			                	<?php the_post_thumbnail('medium');?>
			                    <div class="caption">
			                    	<h4><?php the_title(); ?></h4>
			                        <p><?php echo string_limit_words(get_the_excerpt(), 15); echo '...' ?></p>
			                    </div>
							</div>
		                </a>
					</div>
			<?php endwhile; ?>
		</div>
		<!-- fin segundo row-->


        <div class="row">
          <div class="encabezado"><h3>Últimos Artículos</h3></div>
			<?php query_posts('category_name=articulos&showposts=4'); ?>
				<?php while (have_posts()) : the_post(); ?>
			        <div class="col-md-3">
						<a href="<?php the_permalink() ?>">
			                <div class="thumbnail">
			                	<?php the_post_thumbnail('medium');?>
			                    <div class="caption">
			                    	<h4><?php the_title(); ?></h4>
			                        <p><?php echo string_limit_words(get_the_excerpt(), 15); echo '...' ?></p>
			                    </div>
							</div>
		                </a>
					</div>
			<?php endwhile; ?>
		</div>
		<!-- tercer row cerrado-->

    </div><!--cierre de container-->

<?php get_footer() ?>