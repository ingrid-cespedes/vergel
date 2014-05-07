<?php get_header() ?>

<div class="container">
    <div class="margin-top-fix"></div>
    <div class="row">
      <div class="col-md-9">
        <div class="entry-header">
          <h2><?php the_title(); ?></h2>
          <aside>
            <ul>
              <li><?php the_time ('l j \d\e\ F, Y'); ?></li>
              <li>por: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'user_login' ); ?></a></li>
            </ul>
          </aside>
        </div>
        <p class="text-justify"><?php the_content(); ?></p>
      </div>
    </div>



      <div class="row">
        <div class="encabezado"><h3>Más <?php $current_cat_id = the_category_ID(false); echo get_cat_name($current_cat_id);?></h3></div>
			<?php
			$category = get_the_category(); //Obtengo el ID de la categoría del post
			$this_post = $post->ID;
			$posts = get_posts('numberposts=4&orderby=rand&category=' . $category[0]->cat_ID . '&exclude=' . $this_post);
			foreach($posts as $post) { ?>
	
		        <div class="col-md-3">
					<a href="<?php the_permalink() ?>">
		                <div class="thumbnail">
		                	<?php the_post_thumbnail('medium');?>
		                    <div class="caption">
		                    	<h4><?php the_title(); ?></h4>
		                        <h5><?php echo string_limit_words(get_the_excerpt(), 10); echo '...' ?></h5>
		                    </div>
						</div>
	                </a>
				</div>
			<?php } wp_reset_postdata(); ?>
		</div>	
      <!-- fin segundo row -->

      <div class="row">
        <div class="col-md-6">
          <div class="encabezado"><h4>Deja tu comentario</h4></div>
          <div class="form-group">
         	 <?php comments_template() ?>
         	 <!--  
                <textarea class="form-control" rows="3"></textarea>
             -->   
          </div>
         	 <!--  
              <button type="submit" class="btn btn-default">Comenta</button>
             -->         
        </div>
        


      </div>


  </div> <!--cierre de container-->





<?php get_footer() ?>