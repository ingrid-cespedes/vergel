<?php get_header() ?>

	<div class="container margin-top-fix">
		

<?php the_post() ?>
		<div class="encabezado">
			<h4 class="page-title author"><?php printf( __( 'Post Relacionados a: <span class="vcard">%s</span>', 'sandbox' ), "<a class='url fn n' href='$authordata->user_url' title='$authordata->display_name' rel='me'>$authordata->display_name</a>" ) ?></h4>
		</div><!--encabezado-->


	<div class="row">
		
			<?php $authordesc = $authordata->user_description; if ( !empty($authordesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $authordesc . '</div>' ); ?>

			<?php rewind_posts() ?>

			<?php while ( have_posts() ) : the_post() ?>
		<div class="col-md-3">
			<div class="thumbnail">
				<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
					<a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark">
				<div class="caption">
					<h5><?php the_title() ?></h5>
					<div class="entry-date">
						<aside><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr>
						</aside>
					</div>
					<div class="entry-content">
						<?php the_excerpt(__( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?>

					</div>
					<div class="entry-meta">
						<span class="cat-links">
						<?php printf( __( 'Categoría %s', 'sandbox' ), get_the_category_list(', ') ) ?>
						</span>
						<span class="meta-sep">|</span>
					
						<?php edit_post_link(__('Edit', 'sandbox'), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n"); ?>
						<span class="comments-link"><?php comments_popup_link( __( 'Comentarios (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?>
						</span>
					</div>
				</div><!-- .post -->
			
				</a>
			</div>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
		    <!--Inicio de codigo de pagination-->
    <div class='pagination-custom'>
	    <?php wp_pagenavi(); //Posts por páginas ?>
    </div>
	
	</div><!--row-->
</div><!-- #container -->

<?php get_footer() ?>