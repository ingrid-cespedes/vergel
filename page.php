<?php
/*
Template Name: Página base
*/
?>

<?php get_header() ?>

<div class="container800">

    <div class="container margin-top-fix">
		<?php the_post() ?>
		
		<div class="row">
        	<div class="col-md-12">
				<div class="thumbnail">
                	<div class="captiondos">		
						<h1><?php the_title() ?></h1>
						<?php the_content() ?>



					</div>

					</div>
				</div>
			</div>
			
		</div><!-- .row -->
    </div> <!-- container -->
</div>
<?php get_footer() ?>